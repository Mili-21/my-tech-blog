<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Process or store the data as needed
    // For example, send an email or save to a database

    // Redirect or thank you message
    echo "Thank you, $name! Your message has been received.";
}
?>
