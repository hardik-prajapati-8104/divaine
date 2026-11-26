<?php
declare(strict_types=1);

/**
 * Career / contact form handler (career.php).
 * Sends the enquiry with the optional resume attached, using PHP mail().
 * The resume is attached to the email only; nothing is stored on the server.
 */

header('Content-Type: application/json; charset=UTF-8');
header('X-Content-Type-Options: nosniff');

require_once __DIR__ . '/elements/career-data.php';

function respond(int $status, bool $success, string $message): void
{
    http_response_code($status);
    echo json_encode(['success' => $success, 'message' => $message], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    exit;
}

function field(string $key): string
{
    return isset($_POST[$key]) && is_string($_POST[$key]) ? trim($_POST[$key]) : '';
}

function text_len(string $value): int
{
    return function_exists('mb_strlen') ? mb_strlen($value) : strlen($value);
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Allow: POST');
    respond(405, false, 'Invalid request method. Please submit the form on the careers page.');
}

// Honeypot: bots often fill hidden fields. Return a neutral response.
if (field('company') !== '') {
    respond(200, true, 'Thank you! Your enquiry has been received.');
}

$data         = career_data();
$technologies = $data['technologies'] ?? [];
$maxMb        = (int) ($data['contact']['form']['max_resume_mb'] ?? 5);
$maxBytes     = max(1, $maxMb) * 1024 * 1024;

$name       = field('name');
$phone      = field('phone');
$email      = field('email');
$technology = field('technology');
$message    = field('message');

if ($name === '' || $email === '' || $message === '' || ($technologies && $technology === '')) {
    respond(422, false, 'Please complete all required fields before submitting.');
}
if (text_len($name) > 100 || text_len($email) > 254 || text_len($phone) > 20 || text_len($technology) > 120 || text_len($message) > 5000) {
    respond(422, false, 'Some fields are too long. Please review your details and try again.');
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL) || preg_match('/[\r\n]/', $email . $name)) {
    respond(422, false, 'Please enter a valid email address.');
}
if ($phone !== '' && !preg_match('/^[0-9+\-\s()]{6,20}$/', $phone)) {
    respond(422, false, 'Please enter a valid phone number.');
}
if ($technologies && !in_array($technology, $technologies, true)) {
    respond(422, false, 'Please choose a technology from the list.');
}

// ---- Optional resume ------------------------------------------------------
$attachment = null; // ['name' => ..., 'mime' => ..., 'data' => ...]
$file = $_FILES['resume'] ?? null;

if (is_array($file) && ($file['error'] ?? UPLOAD_ERR_NO_FILE) !== UPLOAD_ERR_NO_FILE) {
    switch ($file['error']) {
        case UPLOAD_ERR_OK:
            break;
        case UPLOAD_ERR_INI_SIZE:
        case UPLOAD_ERR_FORM_SIZE:
            respond(422, false, "The resume is too large. Please upload a file up to {$maxMb} MB.");
        default:
            respond(422, false, 'The resume could not be uploaded. Please try again.');
    }

    if (!is_uploaded_file($file['tmp_name']) || $file['size'] <= 0 || $file['size'] > $maxBytes) {
        respond(422, false, "Please upload a resume between 1 KB and {$maxMb} MB.");
    }

    $extension = strtolower(pathinfo((string) $file['name'], PATHINFO_EXTENSION));
    $types = [
        'pdf'  => 'application/pdf',
        'doc'  => 'application/msword',
        'docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
    ];
    if (!isset($types[$extension])) {
        respond(422, false, 'Please upload your resume as a PDF, DOC or DOCX file.');
    }

    // Check the real file signature, not just the extension.
    $head = (string) file_get_contents($file['tmp_name'], false, null, 0, 8);
    $valid = $extension === 'pdf'
        ? strncmp($head, '%PDF', 4) === 0
        : ($extension === 'doc' ? strncmp($head, "\xD0\xCF\x11\xE0", 4) === 0 : strncmp($head, 'PK', 2) === 0);
    if (!$valid) {
        respond(422, false, 'The uploaded file does not look like a valid ' . strtoupper($extension) . ' document.');
    }

    $base = preg_replace('/[^A-Za-z0-9._-]+/', '_', pathinfo((string) $file['name'], PATHINFO_FILENAME));
    $base = trim(substr((string) $base, 0, 60), '._-');
    $attachment = [
        'name' => ($base !== '' ? $base : 'resume') . '.' . $extension,
        'mime' => $types[$extension],
        'data' => (string) file_get_contents($file['tmp_name']),
    ];
}

// ---- Build and send the email ---------------------------------------------
$recipient = 'hello@divainetech.io';
$h = function (string $v): string {
    return htmlspecialchars($v, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
};
$row = function (string $label, string $value, bool $last = false) use ($h): string {
    $border = $last ? '' : 'border-bottom:1px solid #eee;';
    return '<tr><td style="padding:10px 0;' . $border . 'font-weight:bold;width:145px;vertical-align:top;">' . $label
        . '</td><td style="padding:10px 0;' . $border . 'line-height:1.6;">' . $value . '</td></tr>';
};

$html = '<!doctype html><html lang="en"><head><meta charset="UTF-8"><title>New Career Enquiry</title></head>'
    . '<body style="margin:0;padding:24px;background:#f5f6fa;font-family:Arial,sans-serif;color:#222;">'
    . '<div style="max-width:640px;margin:0 auto;padding:28px;background:#fff;border:1px solid #e7e9ef;border-radius:12px;">'
    . '<h2 style="margin:0 0 8px;color:#171717;">New Career Enquiry</h2>'
    . '<p style="margin:0 0 22px;color:#666;">A visitor submitted the form on the careers page of divainetech.io.</p>'
    . '<table role="presentation" style="width:100%;border-collapse:collapse;">'
    . $row('Name', $h($name))
    . $row('Email', $h($email))
    . $row('Phone', $phone !== '' ? $h($phone) : '-')
    . $row('Technology', $technology !== '' ? $h($technology) : '-')
    . $row('Resume', $attachment ? 'Attached: ' . $h($attachment['name']) : 'Not provided')
    . $row('Message', nl2br($h($message)), true)
    . '</table></div></body></html>';

$boundary = 'dt_' . bin2hex(random_bytes(12));
$subject  = '=?UTF-8?B?' . base64_encode('New Career Enquiry' . ($technology !== '' ? ' - ' . $technology : '')) . '?=';

$body  = "--{$boundary}\r\n";
$body .= "Content-Type: text/html; charset=UTF-8\r\nContent-Transfer-Encoding: base64\r\n\r\n";
$body .= chunk_split(base64_encode($html)) . "\r\n";
if ($attachment) {
    $body .= "--{$boundary}\r\n";
    $body .= 'Content-Type: ' . $attachment['mime'] . '; name="' . $attachment['name'] . "\"\r\n";
    $body .= "Content-Transfer-Encoding: base64\r\n";
    $body .= 'Content-Disposition: attachment; filename="' . $attachment['name'] . "\"\r\n\r\n";
    $body .= chunk_split(base64_encode($attachment['data'])) . "\r\n";
}
$body .= "--{$boundary}--";

$headers = implode("\r\n", [
    'MIME-Version: 1.0',
    'Content-Type: multipart/mixed; boundary="' . $boundary . '"',
    'From: DivineTech Website <hello@divainetech.io>',
    'Reply-To: ' . $email,
    'X-Mailer: PHP/' . phpversion(),
]);

try {
    $sent = mail($recipient, $subject, $body, $headers);
} catch (Throwable $exception) {
    error_log('DivineTech career form mail error: ' . $exception->getMessage());
    $sent = false;
}

if ($sent) {
    respond(200, true, 'Thank you for contacting DivineTech! Your message has been sent successfully. Our team will get back to you soon.');
}

error_log('DivineTech career form: PHP mail() returned false.');
respond(500, false, 'Sorry, we could not send your message right now. Please try again later or email hello@divainetech.io directly.');
