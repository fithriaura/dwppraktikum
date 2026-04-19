<?php
include "../config/koneksi.php";

$nama = $_POST['nama'];
$kategori = $_POST['kategori'];
$no_wa = $_POST['no_wa'];

$query = "INSERT INTO tamu (nama, kategori, no_wa, status) VALUES ('$nama', '$kategori', '$no_wa', 'belum')";
mysqli_query($koneksi, $query);

header("Location: dashboard.php");
