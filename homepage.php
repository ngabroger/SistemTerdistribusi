<?php
session_start();

if (!isset($_SESSION['email'])) {
    // Redirect to the login page if the user is not logged in
    header('Location: index.php');
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
                    <li class="nav-item">
                        <a class="btn btn-danger" href="proses/proses_logout.php">Logout</a>
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


    <!-- TEAM STARTS -->
    <div class="team" id="team">
        <div class="heading">
            <h2>Our Team</h2>
        </div>
        <div class="box-container">
            <div class="box">	
                <img src="image/Mail(1).jpeg" alt="">
                <h3>Daffa Putra Setyatama</h3>
                <div class="overlay">
                    <div class="text">Perkenalkan nama saya Daffa, asal dari Depok.</div>
                </div>
            </div>
            <div class="box">
                <img src="image/Fizi(1).jpeg" alt="">
                <h3>Muhammad Faried</h3>
                <div class="overlay">
                    <div class="text">Halo, nama saya Faried, asal dari Bogor.</div>
                </div>
            </div>
            <div class="box">
                <img src="image/Jarjit.jpeg" alt="">
                <h3>Teuku Muhammad Erlangga</h3>
                <div class="overlay">
                    <div class="text">Hai, saya Erlangga yang asalnya dari Depok.</div>
                </div>
            </div>
            <div class="box">
                <img src="image/ehsan(1).jpg" alt="">
                <h3>Roger Martua Simanjuntak</h3>
                <div class="overlay">
                    <div class="text">Hai, saya Roger yang asalnya dari Depok.</div>
                </div>
            </div>
        </div>
    </div>
    <!-- TEAM ENDS -->


    <?php include('bootstrap/footer.php');?>
</body>

</html>