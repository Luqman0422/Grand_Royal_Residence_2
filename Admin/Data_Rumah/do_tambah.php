
<?php
if (isset ($_POST["Tambah"])){
	require ("../connectdb.php");

	$Tipe		= $_POST["Tipe"];
	$Harga		= $_POST["Harga"];
	$Cluster	= $_POST["Cluster"];
	$Deskripsi	= $_POST["Deskripsi"];
	
	$filename0   = $_FILES["Foto"]["name"][0];
	$tempfile0   = $_FILES["Foto"]["tmp_name"][0];
	$filename1   = $_FILES["Foto"]["name"][1];
	$tempfile1   = $_FILES["Foto"]["tmp_name"][1];
	
	$Fotobaru = date('dmYHis').$filename0;
	$path0 = "../images/".$Fotobaru;
	$Denahbaru = date('dmYHis').$filename1;
	$path1 = "../Denah/".$Denahbaru;

	copy($tempfile0, $path0);
	copy($tempfile1, $path1);

	$SQL	= "insert into data_rumah (Type,Harga,Cluster,Deskripsi,Foto,Denah) values ('$Tipe','$Harga','$Cluster','$Deskripsi','$Fotobaru','$Denahbaru')";
	mysqli_query($conn, $SQL);
	$num = mysqli_affected_rows($conn);
	if($num > 0){
		header("location: ../index.php?mod=siteplan&tipe=".$Tipe."");
	}
	else{
		echo "Data gagal disimpan.<br />";
	}

}

?>