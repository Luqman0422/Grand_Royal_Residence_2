<?php
$dbname	= "grand_royal";
$host	= "localhost";
$username	= "root";
$password	= "";

$conn = mysqli_connect ($host, $username, $password, $dbname);
if (mysqli_connect_errno()) {
	echo "koneksi ke server database gagal";
	exit();
}


?>