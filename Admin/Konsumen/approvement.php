<?php
	require("../connectdb.php");
	
	if($_GET['stat']=='terima'){
	if (isset ($_POST["kirim"])) {    
		$nik=$_POST['nik'];
		$SQL = "update booking set verifikasi_order = 1 where nik = $nik";
        $result = mysqli_query($conn, $SQL);
        $id_akun=$_POST['id_akun'];
        $batas_waktu = $_POST['batas_waktu'];
        $daftar_persyaratan = $_POST['Persyaratan'];
        $SQL1 = "insert into data_persyaratan (id_akun, Batas_waktu, daftar_persyaratan) values ('$id_akun','$batas_waktu','$daftar_persyaratan')";
        $result1 = mysqli_query($conn, $SQL1);
        
        header('Location: ../index.php?mod=datakonsumen');
    	}
	}

	elseif ($_GET['stat']=='tolak') {
        $SQL = "delete from booking where nik = '$nik'";
        $result = mysqli_query($conn, $SQL);
        header('Location: ../index.php?mod=datakonsumen');
	}


?>