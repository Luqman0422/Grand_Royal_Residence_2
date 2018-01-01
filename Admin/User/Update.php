<?php
if (isset($_POST["btnSubmit"])) {
  $Username = $_POST["Username"];
  $Password = $_POST["Password"];
  $NamaDepan   = $_POST["nama_depan"];
  $NamaBelakang   = $_POST["nama_belakang"];
  $NIP	= $_POST["NIP"];
  
  require ("../connectdb.php");

  if (mysqli_connect_errno()) {
    echo "Koneksi ke server gagal";
    exit();
  }
  $sql = "update admin ".
         "set Username = '$Username', ".
         "    Password = '$Password', ".
         "    NamaDepan = '$NamaDepan', ".
         "    NamaBelakang = '$NamaBelakang' ".
         "where NIP = '$NIP'";
  
  mysqli_query($conn, $sql);
  
  $num = mysqli_affected_rows($conn);

  if ($num > 0) {
    header("Location: ../index.php?mod=datauser");
  } else {
    echo "Perubahan data gagal disimpan.";
    echo "<br><a href=UpdateForm.php ><button>Kembali</button></a>";
  }
}
?>
