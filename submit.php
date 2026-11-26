<?php
declare(strict_types=1);

/**
 * DivineTech home-page contact form handler.
 * Sends email using PHP mail() directly; no SMTP library is used.
 */
header('Content-Type: application/json; charset=UTF-8');
header('X-Content-Type-Options: nosniff');

function respond(int $status, bool $success, string $message): void
{
    http_response_code($status);
    echo json_encode(['success' => $success, 'message' => $message], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Allow: POST');
    respond(405, false, 'Please submit the contact form using the website.');
}

// Simple honeypot field to filter basic automated spam.
if (trim((string)($_POST['company'] ?? '')) !== '') {
    respond(200, true, 'Thank you! Your enquiry has been received.');
}

$firstName = trim((string)($_POST['first_name'] ?? ''));
$lastName  = trim((string)($_POST['last_name'] ?? ''));
$email     = trim((string)($_POST['email'] ?? ''));
$phone     = trim((string)($_POST['number'] ?? ''));
$website   = trim((string)($_POST['website'] ?? ''));
$message   = trim((string)($_POST['messages'] ?? ''));

if ($firstName === '' || $lastName === '' || $email === '' || $phone === '' || $message === '') {
    respond(422, false, 'Please complete all required fields.');
}

if (strlen($firstName) > 80 || strlen($lastName) > 80 || strlen($email) > 254 || strlen($phone) > 30 || strlen($website) > 255 || strlen($message) > 5000) {
    respond(422, false, 'One or more fields exceed the allowed length. Please review your details.');
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL) || preg_match('/[\r\n]/', $email)) {
    respond(422, false, 'Please enter a valid email address.');
}

if ($website !== '') {
    $websiteToValidate = preg_match('~^https?://~i', $website) ? $website : 'https://' . $website;
    if (!filter_var($websiteToValidate, FILTER_VALIDATE_URL)) {
        respond(422, false, 'Please enter a valid website URL, or leave that field empty.');
    }
}

if (preg_match('/[\r\n]/', $firstName . $lastName . $phone)) {
    respond(422, false, 'Please check the details entered and try again.');
}

$recipient = 'hello@divainetech.io';
$fullName = trim($firstName . ' ' . $lastName);
$subjectText = 'New Home Page Enquiry - ' . $fullName;
$subject = '=?UTF-8?B?' . base64_encode($subjectText) . '?=';

$e = static fn(string $value): string => htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
$body = '<!doctype html><html lang="en"><head><meta charset="UTF-8"><title>New Website Enquiry</title></head>'
    . '<body style="margin:0;padding:24px;background:#f5f6fa;font-family:Arial,sans-serif;color:#222;">'
    . '<div style="max-width:640px;margin:0 auto;padding:28px;background:#fff;border:1px solid #e7e9ef;border-radius:12px;">'
    . '<h2 style="margin:0 0 8px;">New Home Page Contact Enquiry</h2>'
    . '<p style="color:#666;">A visitor submitted the contact form on divainetech.io.</p>'
    . '<table role="presentation" style="width:100%;border-collapse:collapse;">'
    . '<tr><td style="padding:10px 0;font-weight:bold;width:140px;">Name</td><td>' . $e($fullName) . '</td></tr>'
    . '<tr><td style="padding:10px 0;font-weight:bold;">Email</td><td>' . $e($email) . '</td></tr>'
    . '<tr><td style="padding:10px 0;font-weight:bold;">Phone</td><td>' . $e($phone) . '</td></tr>'
    . '<tr><td style="padding:10px 0;font-weight:bold;">Website</td><td>' . ($website !== '' ? $e($website) : 'Not provided') . '</td></tr>'
    . '<tr><td style="padding:10px 0;font-weight:bold;vertical-align:top;">Message</td><td style="padding:10px 0;line-height:1.6;">' . nl2br($e($message)) . '</td></tr>'
    . '</table><p style="margin-top:24px;color:#888;font-size:12px;">Sent from the DivineTech home page contact form.</p>'
    . '</div></body></html>';

$headers = [
    'MIME-Version: 1.0',
    'Content-Type: text/html; charset=UTF-8',
    'From: DivineTech Website <hello@divainetech.io>',
    'Reply-To: ' . $email,
    'X-Mailer: PHP/' . phpversion(),
];

try {
    $sent = mail($recipient, $subject, $body, implode("\r\n", $headers));
} catch (Throwable $exception) {
    error_log('DivineTech home contact mail error: ' . $exception->getMessage());
    $sent = false;
}

if ($sent) {
    respond(200, true, 'Thank you for contacting DivineTech! Your message has been sent successfully. Our team will get back to you soon.');
}

error_log('DivineTech home contact form: PHP mail() returned false.');
respond(500, false, 'Sorry, we could not send your message right now. Please try again later or email hello@divainetech.io directly.');
