<html>
<head> 
	<title>Membuat otentifikasi user</title>
</head>
<body>
<h2>Status Registrasi</h2>
<?php
if (isset ($_POST["daftar"])) {
	$NIP		= $_POST["NIP"];
	$Username	= $_POST["Username"];
	$Password	= $_POST["Password"];
	$nama_depan = $_POST["nama_depan"];
	$nama_belakang	= $_POST["nama_belakang"];
	require ("../connectdb.php");

	/*$tempfile = $_FILES["Foto"]["tmp_name"];
	$filename = $_FILES["Foto"]["name"];

	$targetDir = getcwd() . "\\Foto\\" . $filename;
	
	if($tempfile) {
		copy($tempfile, $targetDir);
	}

	$targetDir = str_replace("\\", "/", $targetDir);
	*/

	$SQL	= "insert into admin (NIP,Username,Password,NamaDepan,NamaBelakang) values ('$NIP','$Username','$Password','$nama_depan','$nama_belakang')";
	mysqli_query($conn, $SQL);
	$num = mysqli_affected_rows($conn);
	if($num > 0){
		header('Location: ../index.php?mod=datauser');
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