<?php
include "../config/koneksi.php";

$id = $_GET['id'];
$query = "DELETE FROM tamu WHERE id='$id'";
mysqli_query($koneksi, $query);

header("Location: dashboard.php");
