/**
 * Career page form: validates, sends the form (with the optional resume) via
 * fetch + FormData, and shows the result in a SweetAlert popup.
 */
(function () {
    'use strict';

    var form = document.getElementById('career-form');
    if (!form) { return; }

    var button = form.querySelector('button[type="submit"]');
    var buttonText = button ? button.textContent.trim() : 'Send Message';
    var maxMb = parseInt(form.getAttribute('data-max-mb'), 10) || 5;
    var fileInput = form.querySelector('input[type="file"]');
    var ALLOWED = ['pdf', 'doc', 'docx'];

    function notify(icon, title, text) {
        if (window.Swal) {
            return Swal.fire({ icon: icon, title: title, text: text, confirmButtonText: 'OK', confirmButtonColor: '#ff6600' });
        }
        window.alert(text);
        return Promise.resolve();
    }

    // Returns an error message, or '' when the selected resume is fine (or none chosen).
    function resumeError() {
        var file = fileInput && fileInput.files && fileInput.files[0];
        if (!file) { return ''; }
        var ext = file.name.split('.').pop().toLowerCase();
        if (ALLOWED.indexOf(ext) === -1) { return 'Please upload your resume as a PDF, DOC or DOCX file.'; }
        if (file.size > maxMb * 1024 * 1024) { return 'The resume is too large. Please upload a file up to ' + maxMb + ' MB.'; }
        return '';
    }

    if (fileInput) {
        fileInput.addEventListener('change', function () {
            var err = resumeError();
            if (err) {
                fileInput.value = '';
                notify('warning', 'Invalid resume', err);
            }
        });
    }

    form.addEventListener('submit', function (event) {
        event.preventDefault();
        if (!form.reportValidity()) { return; }

        var err = resumeError();
        if (err) { notify('warning', 'Invalid resume', err); return; }

        if (button) { button.disabled = true; button.textContent = 'Sending...'; }

        fetch(form.action, {
            method: 'POST',
            body: new FormData(form),
            headers: { 'X-Requested-With': 'XMLHttpRequest', 'Accept': 'application/json' }
        }).then(function (response) {
            return response.json().then(function (result) {
                return { ok: response.ok, result: result };
            }, function () {
                throw new Error('The server returned an unexpected response. Please try again.');
            });
        }).then(function (res) {
            if (!res.ok || !res.result.success) {
                throw new Error(res.result.message || 'Your message could not be sent. Please try again.');
            }
            form.reset();
            return notify('success', 'Message Sent!', res.result.message);
        }).catch(function (error) {
            notify('error', 'Unable to Send', error.message || 'Something went wrong. Please try again later.');
        }).then(function () {
            if (button) { button.disabled = false; button.textContent = buttonText; }
        });
    });
})();
