<?php
	if($_GET['mode']=='delete') {
		$NIP = $_GET['dat'];

		require ("../connectdb.php");
			$sql="delete from admin where NIP='$NIP'";
			mysqli_query($conn, $sql);
			
		$num1 = mysqli_affected_rows($conn);
		

		if( $num1 > 0 ) {
			header("Location: ../index.php?mod=datauser");
		}
		 
		else {
			echo "Data gagal dihapus";
			echo "<br><a href=tables.php ><button>Kembali</button></a>";
		}
			

	
	}
	
?>