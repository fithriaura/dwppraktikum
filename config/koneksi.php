<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_undanganpraktikum");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>