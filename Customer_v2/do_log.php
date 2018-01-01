<html>
<head> 
	<title>Membuat otentifikasi user</title>
</head>
<body>
<h2>Status Registrasi</h2>
<?php
if (isset ($_POST["daftar"])) {
	$Username	= $_POST["Username"];
	$Email	= $_POST["Email"];
	$Password	= $_POST["Password"];
	require ("connectdb.php");

	$SQL	= "insert into akun (User,Email,Password) values ('$Username','$Email','$Password')";
	mysqli_query($conn, $SQL);
	$num = mysqli_affected_rows($conn);
	if($num > 0){
		header('Location: Login.php');
	}
	else{
		echo "Data gagal disimpan.<br />";
	}
}
else
{
	echo "gagal";
}
?>
</body>
</html>