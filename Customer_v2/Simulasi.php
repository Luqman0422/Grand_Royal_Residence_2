<div align="center">
	<form action="indexUser.php?page=Simulasi" method="post">
			<h2>SIMULASI CICILAN</h2>
			<hr width="100%">
	<table border="0" align="center">
		<tr>
			<td>Harga Rumah </td>
			<td><input type="text" name="harga" size="70" maxlength="30" placeholder="Rp." style="margin-top: 20px;" /></input></td>
		</tr>
		<tr>
			<td>Uang Muka</td>
			<td><input type="text" name="dana" size="70" maxlength="30" placeholder="Rp." style="margin-top: 20px;"/></input></td>
		</tr>
		<tr>
			<td>Suku Bunga</td>
			<td><input type="text" name="bunga" size="70" maxlength="30" placeholder="%" style="margin-top: 20px;"/></input></td>
		</tr>
		<tr>
			<td>Jangka Waktu (Tenor)</td>
			<td><input type="text" name="tenor" size="70" maxlength="30" placeholder="tahun" style="margin-top: 20px;"/></input></td>
		</tr>
				<tr>
			<td></td>
			<td><input type="submit" name="btnsubmit"  value="SIMULASI" style="margin-top: 20px;"/></input></td>
		</tr>
		<?php
	
	if (isset($_POST['btnsubmit'])) {
		$a = $_POST["harga"];
	$b = $_POST["dana"];
	$c = $_POST["bunga"];
	$d = $_POST["tenor"];
	$e = $_POST["cicilan"];

		if ($b == 0) {
			echo "Anda seharusnya memasukkan jumlah nominal";
			exit();
		}
		$e = ($a - $b) * $c / $d;
	}
	else{
		$e="";
	}
	?>
		<tr>
			<td>Biaya Cicilan/Bulan</td>
			<td><input type="text" name="cicilan" size="70" maxlength="30" placeholder="Hasil Perhitungan" value="<?php echo "Rp.$e"; ?>" style="margin-top: 20px;"/></td>
		</tr>
	</table>
		</form>
	</div>
	