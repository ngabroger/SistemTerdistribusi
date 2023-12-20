<?php
    // Koneksi ke database
    $conn = mysqli_connect("localhost", "root", "", "teuku");

    // Pesan error jika gagal
    if(mysqli_connect_errno()){
        echo "Koneksi database gagal nih, karena " . mysqli_connect_error();
    }
?>