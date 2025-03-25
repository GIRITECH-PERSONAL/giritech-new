<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['form-select']);
    $message = htmlspecialchars($_POST['message']);

    // Set recipient email address
    $to = "info@giritech.co.in";  // Replace with your email

    // Set the email subject
    $email_subject = "New message from: $name";

    // Build the email content
    $email_body = "You have received a new message from your website contact form.\n\n";
    $email_body .= "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Subject: $form-select\n";
    $email_body .= "Message:\n$message\n";

    // Set the email headers
    $headers = "From: $email\n";
    $headers .= "Reply-To: $email\n";

    // Send the email
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "Thank you for your Query! We will contact to you shortly.";
    } else {
        echo "There was an error sending your message. Please try again later.";
    }
} else {
    echo "Invalid request method.";
}
?>
