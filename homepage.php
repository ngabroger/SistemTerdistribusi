<?php
session_start();

if (!isset($_SESSION['email'])) {
    // Redirect to the login page if the user is not logged in
    header('Location: ../index.php');
    exit;
}
// Debugging output

// Ambil nilai username dari sesi
$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Sistem Terdistribusi</title>
    <?php include('bootstrap/header.php');?>

    <link rel="stylesheet" href="style/style-index.css">
    <link rel="Icon" href="image/logo-slebew-v2.png" type="image/x-icon">
</head>

<body>
    <!-- Background Image Page -->
    <div class="background-dashboard"></div>
    <!-- Background Image Page -->
    

    <!-- Navbar Start-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SLEBEW</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <!-- Link-menu untuk halaman Home -->
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <!-- Link-menu untuk halaman Data -->
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <!-- Link-menu untuk halaman Form -->
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-danger" href="proses/proses_logout.php">Logut</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End-->


    <!-- Logo Dashboard-->
    <div class="container-dashboard">
        <img src="image/logo-slebew-v2.png" alt="slebew bang">
    </div>
    <!-- Logo Dashboard-->


    <!-- Title Dashboard-->
    <div class="welkom">
        <h3>Selamat datang di dashboard</h3>
     <h3> <?php echo $username;?></h3>
    </div>
    <!-- Title Dashboard-->


    <?php include('bootstrap/footer.php');?>
</body>

</html>