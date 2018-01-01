<?php
if (isset($_POST["Update"])) {

  $id = $_GET['dat'];

  $Nama   = $_POST["NamaFas"];
  $Keterangan = $_POST["Keterangan"];
  $filename   = $_FILES["FotoFas"]["name"];
  $tempfile   = $_FILES["FotoFas"]["tmp_name"];
  
  
  require ("../connectdb.php");
  $Fotobaru = date('dmYHis').$filename;
 
  $path = "../Foto_Fasilitas/".$Fotobaru;
  
  if(move_uploaded_file($tempfile, $path))


  if (mysqli_connect_errno()) {
    echo "Koneksi ke server gagal";
    exit();
  }
  $sql = "update fasilitas ".
         "set Nama_Fasilitas = '$Nama', ".
         "    Keterangan = '$Keterangan', ".
         "    Foto_Fasilitas = '$Fotobaru' ".
         "where ID_Fasilitas = '$id'";
  
  mysqli_query($conn, $sql);
  
  $num = mysqli_affected_rows($conn);

  if ($num > 0) {
    header("Location: ../index.php?mod=datafasilitas");
  } else {
    header("Location: ../index.php?mod=datafasilitas");
  }

}
else{
  echo "gagal";
}
?>
