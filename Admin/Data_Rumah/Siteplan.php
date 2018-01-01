
<div>
	<form action="index.php?mod=siteplan" method="post">
	<div>
		Masukkan jumlah blok 
		<input name="jumlah"></input><br>
		<button name="hitung">Input</button>
		<br><input name="tipe" type="hidden" value="<?php echo "$_GET[tipe]"; ?>"></input><br>
	</div>
	</form>
	<form action="Data_Rumah/do_site.php" method="post">
	<?php
		if(isset($_POST['hitung'])){
		$tipe = $_POST['tipe'];
		$i=1;
		$j = $_POST['jumlah'];
			while($i<=$j){
				?>
			<div >
				<br><input name="tipe" type="hidden" value="<?php echo "$tipe"; ?>"></input><br>
				Masukkan nama blok
				<br><input name="blok[]" type="text"></input><br>
				Masukkan nomor awal rumah
				<br><input name="no_awal[]" type="text"></input><br>
				Masukkan nomor akhir rumah
				<br><input name="no_akhir[]" type="text"></input><br>
			</div>
				<?php
			$i++;
			}
			?>

		<button name="simpan" style="margin-top: 20px;">Simpan</button>
	<?php
		}
	?>
	</form>
</div>

