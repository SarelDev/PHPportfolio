<?php
session_start();

// Check if the user is logged in
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    // User is logged in, show content
    include 'pages/includes_home_signedin.php';
} else {
    // User is not logged in, redirect to login page
    include 'pages/includes_home.php';
    exit;
}
?>