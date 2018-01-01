<?php 
if(isset($_POST['log'])){
session_start();
require_once("connectdb.php");
$username = $_POST['Username'];
$pass = $_POST['Password'];
$cekuser = mysqli_query($conn,"SELECT * FROM admin WHERE Username = '$username'");

$jumlah = mysqli_num_rows($cekuser);
$hasil = mysqli_fetch_array($cekuser);
$NamaDepan = $hasil['NamaDepan'];
if($jumlah == 0) {
echo "Username Belum Terdaftar!";
echo "<a href=login.php>? Back</a>";
} else {
if($pass != $hasil['Password']) {
echo "Password Salah!
";
echo "<a href=login.php> Back</a>";
} else {
$_SESSION['Username'] = $hasil['Username'];
$_SESSION['$NamaDepan'] = $hasil['NamaDepan'];
header('location:index.php?mod=Dashboard');
}
}
}
?>