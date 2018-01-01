<?php
include 'connectdb.php';
$Type = $_GET['Type'];
$Block = mysqli_query($conn,"SELECT * FROM detail_siteplan WHERE Type='$Type'");
echo "<option>Pilih blok</option>";
while($b = mysqli_fetch_array($Block)){
	for($a=$b['No_awal_rumah']; $a<=$b['No_akhir_rumah']; $a++){
     echo "<option value=\"".$b['Block']."\">".$b['Block']."-".$a."</option>\n";
	}
}
?>
