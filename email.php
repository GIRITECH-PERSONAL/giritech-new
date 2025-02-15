<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $to = "info@giritech.co.in"; // Your email where you receive submissions
    $subject = "New Subscription Request";
    $body = "User Email: " . $email;
    $headers = "From: noreply@example.com";

    if (mail($to, $subject, $body, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Email sending failed!";
    }
}
?>

