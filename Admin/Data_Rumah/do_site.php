
<?php
if (isset ($_POST["simpan"])){
	require ("../connectdb.php");
	$Type = $_POST['tipe'];
	$blok		= $_POST["blok"];
	$no_awal		= $_POST["no_awal"];
	$no_akhir	= $_POST["no_akhir"];
	$jumlah = count($blok);
	for($i=0; $i<$jumlah; $i++){
	$SQL= "insert into detail_siteplan (Type, Block, No_awal_rumah, No_akhir_rumah) values ('$Type','$blok[$i]','$no_awal[$i]','$no_akhir[$i]')";
	mysqli_query($conn,$SQL);
	}
	header("location: ../index.php?mod=datarumah");
	

		
}
?>