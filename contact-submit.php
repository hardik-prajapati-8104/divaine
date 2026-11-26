<?php
declare(strict_types=1);

/**
 * DivineTech contact form handler.
 * Uses PHP mail() directly (no SMTP library/configuration).
 */

header('Content-Type: application/json; charset=UTF-8');
header('X-Content-Type-Options: nosniff');

function respond(int $status, bool $success, string $message): void
{
    http_response_code($status);
    echo json_encode(
        ['success' => $success, 'message' => $message],
        JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES
    );
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Allow: POST');
    respond(405, false, 'Invalid request method. Please submit the contact form.');
}

// Honeypot: bots often fill hidden fields. Return a neutral response.
if (!empty($_POST['company'] ?? '')) {
    respond(200, true, 'Thank you! Your enquiry has been received.');
}

$name    = trim((string)($_POST['name'] ?? ''));
$email   = trim((string)($_POST['email'] ?? ''));
$service = trim((string)($_POST['service'] ?? ''));
$website = trim((string)($_POST['website'] ?? ''));
$message = trim((string)($_POST['message'] ?? ''));

if ($name === '' || $email === '' || $service === '' || $website === '' || $message === '') {
    respond(422, false, 'Please complete all required fields before submitting.');
}

if (mb_strlen($name) > 100 || mb_strlen($email) > 254 ||
    mb_strlen($service) > 120 || mb_strlen($website) > 255 ||
    mb_strlen($message) > 5000) {
    respond(422, false, 'Some fields are too long. Please review your details and try again.');
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    respond(422, false, 'Please enter a valid email address.');
}

// Prevent header injection and validate website URL (accept domain with or without scheme).
if (preg_match('/[\r\n]/', $email) || preg_match('/[\r\n]/', $name)) {
    respond(422, false, 'Please check the details you entered and try again.');
}
$websiteForEmail = $website;
if (!preg_match('~^https?://~i', $websiteForEmail)) {
    $websiteForEmail = 'https://' . $websiteForEmail;
}
if (!filter_var($websiteForEmail, FILTER_VALIDATE_URL)) {
    respond(422, false, 'Please enter a valid website address.');
}

$recipient = 'hello@divainetech.io';
$subjectText = 'New Website Contact Enquiry - ' . $service;
$subject = '=?UTF-8?B?' . base64_encode($subjectText) . '?=';

$safeName = htmlspecialchars($name, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
$safeEmail = htmlspecialchars($email, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
$safeService = htmlspecialchars($service, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
$safeWebsite = htmlspecialchars($website, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
$safeMessage = nl2br(htmlspecialchars($message, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'));

$body = '
<!doctype html>
<html lang="en">
<head><meta charset="UTF-8"><title>New Contact Enquiry</title></head>
<body style="margin:0;padding:24px;background:#f5f6fa;font-family:Arial,sans-serif;color:#222;">
  <div style="max-width:640px;margin:0 auto;padding:28px;background:#fff;border:1px solid #e7e9ef;border-radius:12px;">
    <h2 style="margin:0 0 8px;color:#171717;">New Website Contact Enquiry</h2>
    <p style="margin:0 0 22px;color:#666;">A visitor submitted the contact form on divainetech.io.</p>
    <table role="presentation" style="width:100%;border-collapse:collapse;">
      <tr><td style="padding:10px 0;border-bottom:1px solid #eee;font-weight:bold;width:145px;">Name</td><td style="padding:10px 0;border-bottom:1px solid #eee;">' . $safeName . '</td></tr>
      <tr><td style="padding:10px 0;border-bottom:1px solid #eee;font-weight:bold;">Email</td><td style="padding:10px 0;border-bottom:1px solid #eee;">' . $safeEmail . '</td></tr>
      <tr><td style="padding:10px 0;border-bottom:1px solid #eee;font-weight:bold;">Service</td><td style="padding:10px 0;border-bottom:1px solid #eee;">' . $safeService . '</td></tr>
      <tr><td style="padding:10px 0;border-bottom:1px solid #eee;font-weight:bold;">Website</td><td style="padding:10px 0;border-bottom:1px solid #eee;">' . $safeWebsite . '</td></tr>
      <tr><td style="padding:10px 0;font-weight:bold;vertical-align:top;">Message</td><td style="padding:10px 0;line-height:1.6;">' . $safeMessage . '</td></tr>
    </table>
    <p style="margin:24px 0 0;color:#888;font-size:12px;">This message was sent from the DivineTech website contact form.</p>
  </div>
</body>
</html>';

$headers = [];
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-Type: text/html; charset=UTF-8';
$headers[] = 'From: DivineTech Website <hello@divainetech.io>';
$headers[] = 'Reply-To: ' . $email;
$headers[] = 'X-Mailer: PHP/' . phpversion();

try {
    $sent = mail($recipient, $subject, $body, implode("\r\n", $headers));
} catch (Throwable $exception) {
    error_log('DivineTech contact form mail error: ' . $exception->getMessage());
    $sent = false;
}

if ($sent) {
    respond(200, true, 'Thank you for contacting DivineTech! Your message has been sent successfully. Our team will get back to you soon.');
}

error_log('DivineTech contact form: PHP mail() returned false.');
respond(500, false, 'Sorry, we could not send your message right now. Please try again later or email hello@divainetech.io directly.');
