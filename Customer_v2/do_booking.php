<html>
<head>
	<title></title>
</head>
<body>
<?php
	if (isset ($_POST["booking"])) {
	$nm_lengkap	= $_POST["nm_lengkap"];
	$nik	= $_POST["nik"];
	$no_telp = $_POST["no_telp"];
	$alamat	= $_POST["alamat"];
	$pekerjaan	= $_POST["pekerjaan"];
	$type	= $_POST["type"];
	$DP	= $_POST["DP"];
	$Posisi	= $_POST["Posisi"];
	$Gaji	= $_POST["Gaji"];

	require ("connectdb.php");
	

	$SQL = "insert into booking (Nama_Lengkap, nik, no_telp, alamat, pekerjaan, type, DP, Block_No, Gaji_per_bulan) values('$nm_lengkap', '$nik', '$no_telp', '$alamat', '$pekerjaan', '$type', '$DP','$Posisi','$Gaji')";
	mysqli_query($conn, $SQL);
	$num = mysqli_affected_rows($conn);
	if ($num > 0) {

		$id = $_GET['id'];
		$query = "select * from booking where nik = $nik";
        $result1 = mysqli_query($conn, $query);
        $hasil = mysqli_fetch_array($result1);
        
		$SQL1 = "update akun set id_booking = $hasil[id_booking] where id_akun = '$id'";
        $result2 = mysqli_query($conn, $SQL1);
		echo "data telah tersimpan.<br />";
		header('Location: indexUser.php?page=');
	}
	else {
		echo "Data gagal disimpan.<br />";
	}
}

else {
		echo "data gagal";
	}
?>
</body>
</html>