<?php
include "../config/koneksi.php";

$id = $_GET['id'];
$status = $_GET['status'];

$query = "UPDATE tamu SET status='$status' WHERE id='$id'";
mysqli_query($koneksi, $query);

header("Location: dashboard.php");
