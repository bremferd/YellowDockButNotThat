<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Replace these variables with your own email settings
    $to = "your@email.com";
    $subject = "Contact Form Submission from $name";
    $headers = "From: $email";
    
    // Send the email
    mail($to, $subject, $message, $headers);
    
    // Redirect back to your website after submission
    header("Location: your-thankyou-page.html");
}
?>
