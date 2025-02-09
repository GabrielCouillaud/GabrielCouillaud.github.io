<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $to = "gabriel.cristy29@gmail.com"; // Replace with your email
    $headers = "From: $email" . "\r\n" . "Reply-To: $email";

    if (mail($to, $subject, $message, $headers)) {
        http_response_code(200);
        echo "Message sent successfully";
    } else {
        http_response_code(500);
        echo "Error sending message";
    }
}
?>
