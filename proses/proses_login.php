<?php
session_start();

require 'koneksi.php';

if (isset($_SESSION['email'])) {
    // Redirect the user if already logged in
    header('Location: ../homepage.php');
    exit;
}

$error = '';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($email) && !empty(trim($password))) {
        $query = "SELECT * FROM user WHERE email = ?";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        $rows = mysqli_num_rows($result);

        if ($rows != 0) {
            $user_data = mysqli_fetch_assoc($result);
            $data = $user_data['password'];
            $username = $user_data['username'];
            if ($password == $data) {
                $_SESSION['email'] = $email;
                $_SESSION['username'] = $username;
                // Session set, now display alert and redirect using JavaScript
                echo '<script>alert("selamat datang"); window.location="../homepage.php";</script>';
                exit;
            } else {
                echo '<script>alert("Login failed! Incorrect password."); window.location="../index.php";</script>';
                $error = 'Login failed! Incorrect password.';
                exit;
            }
        } else {
            echo '<script>alert("Login failed! User not found."); window.location="../index.php";</script>';
            $error = 'Login failed! User not found.';
            exit;
        }
    } else {
        echo '<script>alert("Email, password tidak boleh kosong."); window.location="../index.php";</script>';
        $error = 'Email, password tidak boleh kosong';
        exit;
    }
}
?>
