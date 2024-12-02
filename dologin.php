<?php
// login.php

// Sample hardcoded credentials for demonstration
$valid_username = "Secret";
$valid_password = "Page";

// Start session to store user data after login
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate credentials
    if ($username === $valid_username && $password === $valid_password) {
        // Save session data and redirect to a welcome page
        $_SESSION['username'] = $username;
        header("Location: secret.php");
        exit();
    } else {
        // Redirect back to login with an error message
        $error = "Invalid username or password";
        header("Location: login.html?error=" . urlencode($error));
        exit();
    }
}
?>
