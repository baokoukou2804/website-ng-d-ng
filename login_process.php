<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Hard-coded credentials for demonstration purposes
    $validEmail = "user@example.com";
    $validPassword = "password123";

    // Validate inputs (add more validation if needed)
    if (empty($email) || empty($password)) {
        echo "Please fill in all the fields.";
        die();
    }

    // Check credentials
    if ($email == $validEmail && $password == $validPassword) {
        echo "Login successful!";
        // You can redirect the user to another page or perform other actions here
    } else {
        echo "Invalid email or password. Please try again.";
    }
} else {
    echo "Invalid request.";
}
?>
