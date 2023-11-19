
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Validate inputs (add more validation if needed)
    if (empty($name) || empty($email) || empty($message)) {
        echo "Please fill in all the fields.";
        die();
    }

    // Email configuration
    $to = "your_email@example.com"; // Replace with your email address
    $subject = "New Contact Form Submission";

    // Email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Message:\n$message";

    // Additional headers
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $email_content, $headers)) {
        echo "Your message has been sent successfully. We will get back to you soon!";
    } else {
        echo "Oops! Something went wrong and we couldn't send your message.";
    }
} else {
    echo "Invalid request.";
}
?>

<?php
$feedbackFile = "feedback.txt";

if (file_exists($feedbackFile)) {
    $feedbackList = file_get_contents($feedbackFile);
    echo nl2br($feedbackList); // Display feedback with line breaks
} else {
    echo "No feedback yet.";
}
?>
