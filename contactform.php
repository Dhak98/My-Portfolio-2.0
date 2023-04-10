<?php
if (isset($_POST['Submit'])) {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Set recipient email address
    $to = 'dhakchanamoorthy23@gmail.com';

    // Set email headers
    $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    // Compose email message
    $email_body = "You have received a new message from " . $name . ":\r\n\r\n";
    $email_body .= "Subject: " . $subject . "\r\n";
    $email_body .= "Email: " . $email . "\r\n";
    $email_body .= "Message:\r\n" . $message;

    // Send email
    if (mail($to, $subject, $email_body, $headers)) {
        echo '<p>Your message has been sent.</p>';
    } else {
        echo '<p>Sorry, there was a problem sending your message. Please try again later.</p>';
    }
}
?>
