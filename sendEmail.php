<?php

$firstName = trim($_POST['firstName']);
$lastName = trim($_POST['lastName']);
$phone = trim($_POST['phone']);
$subject = $_POST['subject'];
$site_owners_email = 'exmple@example.com'; // Replace this with your own email address
$message = $_POST['message'];

$msg = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>OSCEND</h2>\r\n";
$msg .= "<p><strong>From:</strong> " . $firstName . " " . $lastName . "</p>\r\n";
$msg .= "<p><strong>Phone:</strong> " . $phone . "</p>\r\n";
$msg .= "<p><strong>Message:</strong> <br /> " . $message . " </p>";
$msg .= "</body></html>";

$headers = "From: " . $firstName . " " . $lastName . " \r\n";
$headers .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

if ($firstName == "") {
    $error['firstName'] = "Please enter your first name";
}

if ($lastName == "") {
    $error['lastName'] = "Please enter your last name";
}

if ($phone == "") {
    $error['phone'] = "Please enter your phone";
}

if ($message == "") {
    $error['message'] = "Please leave a comment.";
}

if ($subject == "") {
    $error['subject'] = "Please leave a subject.";
}

if (!$error) {
    $mail = mail($site_owners_email, $subject, $msg, $headers);

    echo "<div class='success'>" . $firstName . " " . $lastName . ", we've received your email. We'll be in touch with you as soon as possible! </div>";
} # end if no error
else {

    foreach ($error as $er) {
        echo '<div class="error">' . $er . '</div>';
    }
} # end if there was an error sending
?>