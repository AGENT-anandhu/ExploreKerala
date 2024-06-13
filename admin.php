<?php
session_start();

$admin_username = 'admin';
$admin_password = 'admin123';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $admin_username && $password === $admin_password) {
        $_SESSION['admin_logged_in'] = true;
        header('Location: admin_dashboard.php');
        exit;
    } else {
        $_SESSION['login_error'] = true; // Indicate an error
        header('Location: admin.html');
        exit;
    }
} else {
    header('Location: admin.html');
    exit;
}
?>
