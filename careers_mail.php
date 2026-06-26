<?php

// Only process POST requests.
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get the form fields and sanitize.
    $name       = strip_tags(trim($_POST["name"] ?? ''));
    $name       = str_replace(["\r", "\n"], [" ", " "], $name);
    $email      = filter_var(trim($_POST["email"] ?? ''), FILTER_SANITIZE_EMAIL);
    $phone      = strip_tags(trim($_POST["phone"] ?? ''));
    $degree     = strip_tags(trim($_POST["degree"] ?? ''));
    $university = strip_tags(trim($_POST["university"] ?? ''));
    $grad_year  = strip_tags(trim($_POST["grad_year"] ?? ''));
    $message    = strip_tags(trim($_POST["message"] ?? ''));

    // Validate required fields.
    if (
        empty($name) ||
        empty($email) ||
        !filter_var($email, FILTER_VALIDATE_EMAIL) ||
        empty($phone)
    ) {
        http_response_code(400);
        echo "Please complete all required fields and try again.";
        exit;
    }

    // Recipient for careers applications.
    $recipient = "careers@triassoftware.com";
    $subject   = "Internship Application – Full Stack Web Development – $name";

    // Handle CV file upload.
    $cv_attachment = '';
    $cv_filename   = '';
    $cv_mime       = '';

    if (isset($_FILES['cv']) && $_FILES['cv']['error'] === UPLOAD_ERR_OK) {
        $allowed_types = ['application/pdf', 'application/msword',
                          'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
        $allowed_exts  = ['pdf', 'doc', 'docx'];

        $file_ext  = strtolower(pathinfo($_FILES['cv']['name'], PATHINFO_EXTENSION));
        $file_mime = mime_content_type($_FILES['cv']['tmp_name']);
        $file_size = $_FILES['cv']['size']; // bytes

        if (!in_array($file_ext, $allowed_exts) || !in_array($file_mime, $allowed_types)) {
            http_response_code(400);
            echo "Invalid CV file type. Please upload a PDF, DOC, or DOCX file.";
            exit;
        }

        if ($file_size > 5 * 1024 * 1024) { // 5 MB limit
            http_response_code(400);
            echo "CV file size exceeds the 5 MB limit.";
            exit;
        }

        $cv_attachment = chunk_split(base64_encode(file_get_contents($_FILES['cv']['tmp_name'])));
        $cv_filename   = basename($_FILES['cv']['name']);
        $cv_mime       = $file_mime;
    }

    // Build email body.
    $email_content  = "New Internship Application Received\n";
    $email_content .= "====================================\n\n";
    $email_content .= "Full Name   : $name\n";
    $email_content .= "Email       : $email\n";
    $email_content .= "Phone       : $phone\n";
    $email_content .= "Degree      : $degree\n";
    $email_content .= "University  : $university\n";
    $email_content .= "Grad Year   : $grad_year\n\n";
    $email_content .= "Cover Letter / Message:\n$message\n";

    // Build MIME headers.
    $uid      = md5(uniqid(time()));
    $eol      = "\r\n";

    if (!empty($cv_attachment)) {
        // Multipart email with attachment.
        $headers  = "From: $name <$email>" . $eol;
        $headers .= "Reply-To: $email" . $eol;
        $headers .= "MIME-Version: 1.0" . $eol;
        $headers .= "Content-Type: multipart/mixed; boundary=\"{$uid}\"" . $eol;

        $body  = "--{$uid}" . $eol;
        $body .= "Content-Type: text/plain; charset=UTF-8" . $eol;
        $body .= "Content-Transfer-Encoding: 7bit" . $eol . $eol;
        $body .= $email_content . $eol;

        $body .= "--{$uid}" . $eol;
        $body .= "Content-Type: {$cv_mime}; name=\"{$cv_filename}\"" . $eol;
        $body .= "Content-Transfer-Encoding: base64" . $eol;
        $body .= "Content-Disposition: attachment; filename=\"{$cv_filename}\"" . $eol . $eol;
        $body .= $cv_attachment . $eol;
        $body .= "--{$uid}--";
    } else {
        // Plain text email without attachment.
        $headers  = "From: $name <$email>" . $eol;
        $headers .= "Reply-To: $email" . $eol;
        $headers .= "Content-Type: text/plain; charset=UTF-8" . $eol;
        $body     = $email_content;
    }

    if (mail($recipient, $subject, $body, $headers)) {
        http_response_code(200);
        echo "Thank You! Your application has been submitted successfully. We will contact shortlisted candidates for the next steps.";
    } else {
        http_response_code(500);
        echo "Oops! Something went wrong and we couldn't send your application. Please try again or email us directly at careers@triassoftware.com";
    }

} else {
    http_response_code(403);
    echo "There was a problem with your submission, please try again.";
}
