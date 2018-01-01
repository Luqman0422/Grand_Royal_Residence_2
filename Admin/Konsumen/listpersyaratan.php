	<?php
	$nik = $_GET['nik'];
	$id_akun = $_GET['id_akun'];
	?>
	<form action="Konsumen/approvement.php?stat=terima" method="post">	
		<div>
		  <input type="hidden" name="nik" value="<?php echo "$nik"; ?>"></input>
		  <input type="hidden" name="id_akun" value="<?php echo "$id_akun"; ?>"></input>
		  <b>batas waktu</b><br>
		  <input type="date" name="batas_waktu"></input><br>
          <b>kirim Persyaratan</b><br>
          <textarea name="Persyaratan" cols="30" rows="6"></textarea>
          <br>
          <button name="kirim">Kirim</button>
        </div>
    </form>