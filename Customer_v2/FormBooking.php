<?php  
  $id_akun = $_SESSION['$id_akun'];
?>

<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
var htmlobjek;
$(document).ready(function(){
  //apabila terjadi event onchange terhadap object <select id=propinsi>
  $("#Type").change(function(){
    var Type = $("#Type").val();
    $.ajax({
        url: "ambilType.php",
        data: "Type="+Type,
        cache: false,
        success: function(msg){
            //jika data sukses diambil dari server kita tampilkan
            //di <select id=kota>
            $("#Block").html(msg);
        }
    });
  });
});

</script>

<form style="margin-bottom: 10px; margin-top: 50px;" action="do_booking.php?id=<?php echo "$id_akun"; ?>" method="post">
<h2 align="center">Form Booking</h2>
<hr width="100%">
<div align="center">
          <div class="input-group input-group-lg" style="margin-top: 30px; width: 50%;">
          <input type="text" class="form-control"  aria-describedby="sizing-addon1" name="nm_lengkap" placeholder="Nama Lengkap">
</div>

<div class="input-group" style="margin-top: 30px; width: 50%;">
  <input type="text" class="form-control"  aria-describedby="sizing-addon2" name="nik" placeholder="NIK">
</div>

<div class="input-group" style="margin-top: 30px; width: 50%;">
  <input type="text" class="form-control"  aria-describedby="sizing-addon2" name="no_telp" placeholder="No Telp">
</div>

<div class="input-group"style="margin-top: 30px; width: 50%;">
  <input type="text" class="form-control"  aria-describedby="sizing-addon2" name="alamat" placeholder="Alamat">
</div>

<div class="input-group" style="margin-top: 30px; width: 50%;">
  <input type="text" class="form-control"  aria-describedby="sizing-addon2" name="pekerjaan" placeholder="Pekerjaan">
</div>

<div class="input-group" style="margin-top: 30px; width: 50%;">
  <select class="form-control" type="text" aria-describedby="nameHelp" name="Type" id="Type">
      <option value="" disabled selected>Pilih Type</option>
<?php 
        $SQL = "SELECT * FROM data_rumah";
        $dat = mysqli_query($conn,$SQL);
        while($has = mysqli_fetch_array($dat)){

 ?>
      <option value="<?php echo "$has[Type]"; ?>"><?php echo "$has[Type]"; ?></option>
      <?php
    }
    ?>
  </select>
</div>

<div class="input-group" style="margin-top: 30px; width: 50%;">
  <input type="text" class="form-control"  aria-describedby="sizing-addon2" name="DP" placeholder="Dana Pertama">
</div>

<div class="input-group" style="margin-top: 30px; width: 50%;">
  <select name="Block" id="Block" class="form-control"  aria-describedby="sizing-addon2">
<option value="" disabled selected>Pilih blok</option>
<?php
//mengambil nama-nama kecamatan yang ada di database
$Block = mysqli_query($conn,"SELECT * FROM detail_siteplan");
while($s=mysqli_fetch_array($dat)){
echo "<option value=\"$s[Block]\">$s[Block]</option>\n";
}
?>

</select>
</div>

<div class="input-group" style="margin-top: 30px; width: 50%;">
  <input type="text" class="form-control"  aria-describedby="sizing-addon2" name="Gaji" placeholder="Gaji">
</div>


<br>
<br>
<div align="center">
    <button class="btn btn-default" name="booking">Booking</button>
  </div>
</form>
</div>
