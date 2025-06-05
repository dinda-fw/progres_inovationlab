<?php
session_start();
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Format email tidak valid'); window.location='login.html';</script>";
        exit;
    }

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $res = $stmt->get_result();

    if ($res->num_rows > 0) {
        $user = $res->fetch_assoc();
        
        if (password_verify($password, $user['password'])) {
            $_SESSION['email'] = $email;
            header("Location: landing.html"); 
            exit;
        } else {
            echo "<script>alert('Password salah'); window.location='login.html';</script>";
        }
    } else {
        echo "<script>alert('Email tidak ditemukan'); window.location='login.html';</script>";
    }
}
?>
