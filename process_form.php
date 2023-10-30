<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "sravich8@cougarnet.uh.edu"; // Replace with your email address
    $subject = "Portfolio Contact Form Submission from $name";
    $headers = "From: $email";
    
    mail($to, $subject, $message, $headers);

    // Redirect the user back to your portfolio after submission
    header("Location: index.html");
}
?>
