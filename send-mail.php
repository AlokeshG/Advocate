<?php

// ============================================================
// LOAD .ENV
// ============================================================

function ve_load_env_file($path)
{
    if (!file_exists($path) || !is_readable($path)) {
        return;
    }

    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    if ($lines === false) {
        return;
    }

    foreach ($lines as $line) {
        $line = trim($line);

        if ($line === '' || str_starts_with($line, '#')) {
            continue;
        }

        $pos = strpos($line, '=');

        if ($pos === false) {
            continue;
        }

        $key = trim(substr($line, 0, $pos));
        $value = trim(substr($line, $pos + 1));

        if ($key === '') {
            continue;
        }

        if (
            (str_starts_with($value, '"') && str_ends_with($value, '"')) ||
            (str_starts_with($value, "'") && str_ends_with($value, "'"))
        ) {
            $value = substr($value, 1, -1);
        }

        if (getenv($key) !== false) {
            continue;
        }

        putenv($key . '=' . $value);
        $_ENV[$key] = $value;
    }
}

ve_load_env_file(__DIR__ . '/.env');


// ============================================================
// HELPERS
// ============================================================

function ve_val($value)
{
    return trim((string)($value ?? ''));
}

function ve_h($value)
{
    return htmlspecialchars(
        (string)$value,
        ENT_QUOTES | ENT_SUBSTITUTE,
        'UTF-8'
    );
}


// ============================================================
// POST ONLY
// ============================================================

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}


// ============================================================
// SMTP CONFIGURATION
// ============================================================

$adminEmail  = ve_val(getenv('ADMIN_EMAIL'));

$smtpHost    = ve_val(getenv('SMTP_HOST')) ?: 'smtp.gmail.com';
$smtpPort    = (int)(getenv('SMTP_PORT') ?: 587);
$smtpUser    = ve_val(getenv('SMTP_USER'));
$smtpPass    = ve_val(getenv('SMTP_PASS'));

$smtpFrom    = ve_val(getenv('SMTP_FROM')) ?: $smtpUser;
$smtpFromName = ve_val(getenv('SMTP_FROM_NAME')) ?: 'Advocate Roshani';


// ============================================================
// CONFIGURATION CHECK
// ============================================================

if ($adminEmail === '') {
    die('Configuration error: ADMIN_EMAIL is missing.');
}

if ($smtpUser === '') {
    die('Configuration error: SMTP_USER is missing.');
}

if ($smtpPass === '') {
    die('Configuration error: SMTP_PASS is missing.');
}

if ($smtpFrom === '') {
    die('Configuration error: SMTP_FROM is missing.');
}


// ============================================================
// FORM DATA
// ============================================================

$source  = ve_val($_POST['source'] ?? 'contact');

$name    = ve_val($_POST['name'] ?? '');
$email   = ve_val($_POST['email'] ?? '');
$phone   = ve_val($_POST['phone'] ?? '');
$service = ve_val($_POST['service'] ?? '');
$message = ve_val($_POST['message'] ?? '');

$captcha         = ve_val($_POST['captcha'] ?? '');
$captchaExpected = ve_val($_POST['captcha_expected'] ?? '');


// ============================================================
// VALIDATE CONTACT FORM
// ============================================================

if ($source === 'quote') {

    if ($name === '' || $phone === '' || $message === '') {
        header('Location: index.php?error=missing_fields');
        exit;
    }

    $service = 'General Inquiry';

} else {

    if (
        $name === '' ||
        $email === '' ||
        $phone === '' ||
        $service === '' ||
        $message === ''
    ) {
        header('Location: contact.php?error=missing_fields');
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('Location: contact.php?error=invalid_email');
        exit;
    }
}


// ============================================================
// CAPTCHA
// ============================================================

if (
    $captcha === '' ||
    $captchaExpected === '' ||
    $captcha != $captchaExpected
) {

    if ($source === 'quote') {
        header('Location: index.php?error=captcha');
    } else {
        header('Location: contact.php?error=captcha');
    }

    exit;
}


// ============================================================
// LOAD PHPMailer
// ============================================================

$autoload = __DIR__ . '/vendor/autoload.php';

if (!file_exists($autoload)) {
    die(
        'PHPMailer is not installed. Run composer install inside the advocate folder.'
    );
}

require_once $autoload;

if (!class_exists('\PHPMailer\PHPMailer\PHPMailer')) {
    die(
        'PHPMailer could not be loaded. Check the vendor folder.'
    );
}


// ============================================================
// CREATE SMTP MAILER
// ============================================================

function ve_create_mailer()
{
    global $smtpHost;
    global $smtpPort;
    global $smtpUser;
    global $smtpPass;
    global $smtpFrom;
    global $smtpFromName;

    $mail = new \PHPMailer\PHPMailer\PHPMailer(true);

    $mail->isSMTP();

    $mail->Host = $smtpHost;
    $mail->SMTPAuth = true;

    $mail->Username = $smtpUser;
    $mail->Password = $smtpPass;

    $mail->SMTPSecure =
        \PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;

    $mail->Port = $smtpPort;

    $mail->CharSet = 'UTF-8';

    $mail->setFrom(
        $smtpFrom,
        $smtpFromName
    );

    $mail->isHTML(true);

    return $mail;
}


// ============================================================
// ADMIN EMAIL
// ============================================================

$adminSubject =
    ($source === 'quote')
    ? 'New Get Quote Request'
    : 'New Legal Consultation Request';


$adminHtml = '
<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<title>' . ve_h($adminSubject) . '</title>
</head>

<body style="
margin:0;
padding:20px;
background:#f4f7fb;
font-family:Arial,Helvetica,sans-serif;
color:#162032;
">

<div style="
max-width:700px;
margin:auto;
background:#ffffff;
border:1px solid #e2e8f0;
border-radius:12px;
overflow:hidden;
">

<div style="
background:#162032;
color:#ffffff;
padding:20px;
">

<h2 style="margin:0;">
' . ve_h($adminSubject) . '
</h2>

<p style="margin:8px 0 0;">
Source: ' . ve_h($source) . '
</p>

</div>

<div style="padding:25px;">

<p>
<strong>Name:</strong>
' . ve_h($name) . '
</p>

' .
(
    $email !== ''
    ? '<p><strong>Email:</strong> ' . ve_h($email) . '</p>'
    : ''
)
. '

<p>
<strong>Phone:</strong>
' . ve_h($phone) . '
</p>

<p>
<strong>Service:</strong>
' . ve_h($service) . '
</p>

<p>
<strong>Message:</strong>
</p>

<div style="
background:#f4f7fb;
border:1px solid #e2e8f0;
border-radius:8px;
padding:15px;
white-space:pre-wrap;
">

' . ve_h($message) . '

</div>

</div>

</div>

</body>
</html>
';


// ============================================================
// SEND ADMIN EMAIL
// ============================================================

try {

    $adminMail = ve_create_mailer();

    // Support multiple admin email addresses
    $adminRecipients = preg_split(
        '/[,;]+/',
        $adminEmail
    );

    $validAdminRecipients = 0;

    foreach ($adminRecipients as $recipient) {

        $recipient = trim($recipient);

        if (
            $recipient !== '' &&
            filter_var($recipient, FILTER_VALIDATE_EMAIL)
        ) {
            $adminMail->addAddress($recipient);
            $validAdminRecipients++;
        }
    }

    if ($validAdminRecipients === 0) {
        throw new RuntimeException('No valid ADMIN_EMAIL recipient was configured.');
    }

    if ($email !== '') {
        $adminMail->addReplyTo(
            $email,
            $name
        );
    }

    $adminMail->Subject = $adminSubject;
    $adminMail->Body = $adminHtml;
    $adminMail->AltBody = strip_tags($adminHtml);

    $adminMail->send();

} catch (\Throwable $e) {

    echo '<h2>Mail could not be sent.</h2>';

    echo '<p>Please check the SMTP configuration.</p>';

    echo '<hr>';
    echo '<strong>SMTP Error:</strong><br>';
    echo '<pre style="white-space:pre-wrap;background:#f5f5f5;padding:15px;border:1px solid #ccc;">';
    echo ve_h($e->getMessage());
    echo '</pre>';

    exit;
}


// ============================================================
// CUSTOMER AUTO-REPLY
// ============================================================

if ($source !== 'quote' && $email !== '') {

    $userSubject =
        'Thank you for contacting Advocate Roshani';


    $userHtml = '
<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<title>Thank You</title>
</head>

<body style="
margin:0;
padding:20px;
background:#f4f7fb;
font-family:Arial,Helvetica,sans-serif;
">

<div style="
max-width:700px;
margin:auto;
background:#ffffff;
border:1px solid #e2e8f0;
border-radius:12px;
overflow:hidden;
">

<div style="
background:#162032;
color:#ffffff;
padding:25px;
text-align:center;
">

<h2 style="margin:0;">
THANK YOU, ' . ve_h(strtoupper($name)) . '!
</h2>

</div>

<div style="padding:25px;">

<p style="line-height:1.7;">
We have successfully received your enquiry.
Our team is reviewing your requirements and will get back to you shortly.
</p>

<div style="
background:#f4f7fb;
padding:18px;
border-radius:8px;
">

<p>
<strong>Service:</strong>
' . ve_h($service) . '
</p>

<p>
<strong>Phone:</strong>
' . ve_h($phone) . '
</p>

<p>
<strong>Source:</strong>
Website
</p>

</div>

<p style="line-height:1.7;">
Thank you for contacting Advocate Roshani.
</p>

</div>

</div>

</body>
</html>
';


    try {

        $userMail = ve_create_mailer();

        $userMail->addAddress(
            $email,
            $name
        );

        $userMail->addReplyTo(
            $smtpFrom,
            $smtpFromName
        );

        $userMail->Subject = $userSubject;

        $userMail->Body = $userHtml;

        $userMail->AltBody =
            strip_tags($userHtml);

        $userMail->send();

    } catch (\Throwable $e) {

        // Admin email was already sent.
        // Do not fail the enquiry if auto-reply fails.
    }
}


// ============================================================
// SUCCESS
// ============================================================

$redirectBase =
    ($source === 'quote')
    ? 'index.php'
    : 'contact.php';


$query = http_build_query([
    'thankyou' => '1',
    'name'     => $name,
    'phone'    => $phone,
    'service'  => $service,
    'source'   => $source
]);


header(
    'Location: ' .
    $redirectBase .
    '?' .
    $query
);

exit;