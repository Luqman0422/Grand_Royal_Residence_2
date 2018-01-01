<html>
<head> 
	<title>Membuat otentifikasi user</title>
</head>
<body>
<h2>Status Registrasi</h2>
<?php
if (isset ($_POST["Tambah"])){
	$Nama		= $_POST["NamaFas"];
	$Keterangan	= $_POST["Keterangan"];
	$filename   = $_FILES["FotoFas"]["name"];
	$tempfile   = $_FILES["FotoFas"]["tmp_name"];
	
	
	require ("../connectdb.php");

	$Fotobaru = date('dmYHis').$filename;

	$path = "../Foto_Fasilitas/".$Fotobaru;
	
	if(move_uploaded_file($tempfile, $path)) {

	$SQL	= "insert into fasilitas (Nama_Fasilitas,Keterangan,Foto_Fasilitas) values ('$Nama','$Keterangan','$Fotobaru')";
	mysqli_query($conn, $SQL);
	$num = mysqli_affected_rows($conn);
	if($num > 0){
		header("Location: ../index.php?mod=datafasilitas");
	}
	else{
		echo "Data gagal disimpan.<br />";
	}
	}
else
{
	echo "gagal";
}
}

?>
</body>
</html>