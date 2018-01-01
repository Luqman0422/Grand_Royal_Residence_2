<?php
if (isset($_POST["Update"])) {
  $Tipe   = $_POST["Tipe"];
  $Harga    = $_POST["Harga"];
  $Cluster  = $_POST["Cluster"];
  $Deskripsi  = $_POST["Deskripsi"];
  $filename0   = $_FILES["Foto"]["name"][0];
  $tempfile0   = $_FILES["Foto"]["tmp_name"][0];
  $filename1   = $_FILES["Foto"]["name"][1];
  $tempfile1   = $_FILES["Foto"]["tmp_name"][1];
  
  
  require ("../connectdb.php");
  $Fotobaru = date('dmYHis').$filename0;
  $Denahbaru = date('dmYHis').$filename1;

  $path0 = "../images/".$Fotobaru;
  $path1 = "../Denah/".$Denahbaru;
  
  

  if (mysqli_connect_errno()) {
    echo "Koneksi ke server gagal";
    exit();
  }
  $sql = "update data_rumah ".
         "set Harga = '$Harga', ".
         "    Cluster = '$Cluster', ".
         "    Deskripsi = '$Deskripsi' ".
         "where Type = '$Tipe'";

  if(!empty($tempfile0)){

  copy($tempfile0, $path0);
  $sql1 = "update data_rumah ".
         "set Foto = '$Fotobaru' ".
         "where Type = '$Tipe'";
         mysqli_query($conn, $sql1);
  
  }
  if(!empty($tempfile1)){
    copy($tempfile1, $path1);

  $sql2 = "update data_rumah ".
         "set Denah = '$Denahbaru' ".
         "where Type = '$Tipe'";
         mysqli_query($conn, $sql2);
  
  }
  
  mysqli_query($conn, $sql);

  header("Location: ../index.php?mod=datarumah");

}
else{
  echo "gagal";
}
?>
