<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and retrieve form inputs
    $name    = htmlspecialchars(trim($_POST["name"]));
    $email   = htmlspecialchars(trim($_POST["email"]));
    $phone   = htmlspecialchars(trim($_POST["phone"]));
    $message = htmlspecialchars(trim($_POST["message"]));
    $email_receipt = isset($_POST["email_receipt"]) ? "Yes" : "No";



    $entry = "Name: $name\nEmail: $email\nPhone: $phone\nMessage:\n$message\n";
    $entry .= "Email receipt: $email_receipt\n";
    $entry .= "-----------------------------\n";

    $file = 'submissions.txt';

    if (file_put_contents($file, $entry, FILE_APPEND | LOCK_EX)) {
        echo "Thank you! Your message has been saved.";
    } else {
        echo "Error saving your message. Please try again.";
    }
} else {
    echo "Invalid request.";
}
