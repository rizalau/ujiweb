<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into pesan values('$name','$email','$subject','$message')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>