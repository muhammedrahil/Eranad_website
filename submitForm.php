<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['w3lName'];
    $email = $_POST['w3lSender'];
    $phone = $_POST['w3lPhoner']; // Assuming this is the phone number field
    $subject = $_POST['w3lSubject'];
    $message = $_POST['w3lMessage'];

    $to = 'mshaheerkp99@example.com'; // Replace with your company's email address
    $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Phone: $phone\n";
    $email_content .= "Subject: $subject\n\n";
    $email_content .= "Message:\n$message";

    mail($to, $subject, $email_content, $headers);

    // Redirect to a thank you page or show a success message
    header("Location: thank-you.html");
    exit;
}
?>
