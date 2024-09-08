<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the user's email from the form input
    $email = htmlspecialchars(trim($_POST["email"]));

    // Check if the email is not empty and is a valid email format
    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Your admin email where the subscription notification will be sent
        $to = "miloomangee@gmail.com"; // Replace with your email
        $subject = "New Subscriber to Million Mengistu's Tech Blog";
        $message = "You have a new subscriber: $email";
        $headers = "From: noreply@1millionmengistu.com"; // You can set a noreply email here

        // Send the email
        if (mail($to, $subject, $message, $headers)) {
            // Success message to be displayed to the user
            echo "Thank you for subscribing!";
        } else {
            // Error message if email sending fails
            echo "There was an issue sending the subscription email. Please try again later.";
        }
    } else {
        // If email is invalid, show an error message
        echo "Please enter a valid email address.";
    }
} else {
    // Redirect to the homepage if the form is accessed directly
    header("Location: index.html");
    exit();
}
?>