<?php
include $_SERVER['DOCUMENT_ROOT'].'/omniservices/database/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["reg_username"];
    $password = $_POST["reg_password"];
    $confirm_password = $_POST["confirm_password"];

    if ($password === $confirm_password) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";

        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("ss", $param_username, $param_password);
            $param_username = $username;
            $param_password = $hashed_password;

            if ($stmt->execute()) {
                header("location: /omniservices/views/login.php");
            } else {
                echo "Something went wrong. Please try again later.";
            }

            $stmt->close();
        }
    } else {
        $error = "Passwords do not match.";
    }

    $conn->close();
}
?>
