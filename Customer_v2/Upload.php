<style type="text/css">
  body {
      padding-top: 70px;
      background: #eeeeee;
    }

    .container-body {
      background: #ffffff;
      box-shadow: 1px 1px 1px #999;
      padding: 20px;
    }
</style>
  <div class="container container-body">
    <h2>Upload</h2>
    <hr>
    <?php
    if(!$_SESSION['User']){
      echo '<div class="alert alert-danger">Anda harus login untuk membuka halaman ini.</div>';
    }else{
    $sql = "SELECT * FROM data_persyaratan where id_akun = '$id_akun'";
    $dat = mysqli_query($conn,$sql);
    $res = mysqli_fetch_array($dat);
    ?>
    <div style="float: right;">
        <p>Batas waktu <?php echo "$res[Batas_waktu]"; ?></p>
     </div>
     <div>
        <h3>DAFTAR PERSYARATAN YANG HARUS DIUPLOAD</h3>
        <p><?php echo "$res[daftar_persyaratan]"; ?></p>
     </div>
    <div class="row" style="margin-top: 100px;">
     
     <br>
      <div class="col-md-6 col-md-offset-3">
        <form class="form-horizontal" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <div class="col-md-10">
              <input type="file" name="myFile" class="filestyle" data-icon="false">
            </div>
            <br>
            <div class="col-md-2">
              <input type="submit" name="upload" class="btn btn-primary" value="Upload">
            </div>
          </div>
        </form>

        <?php
        // definisi folder upload
        define("UPLOAD_DIR", "../admin/upload/");

        if (!empty($_FILES["myFile"])) {
          $myFile = $_FILES["myFile"];
          $ext    = pathinfo($_FILES["myFile"]["name"], PATHINFO_EXTENSION);
          $size   = $_FILES["myFile"]["size"];
          $tgl   = date("Y-m-d");

          if ($myFile["error"] !== UPLOAD_ERR_OK) {
            echo '<div class="alert alert-warning">Gagal upload file.</div>';
            exit;
          }

          // filename yang aman
          $name = preg_replace("/[^A-Z0-9._-]/i", "_", $myFile["name"]);

          // mencegah overwrite filename
          $i = 0;
          $parts = pathinfo($name);
          while (file_exists(UPLOAD_DIR . $name)) {
            $i++;
            $name = $parts["filename"] . "-" . $i . "." . $parts["extension"];
          }

          // upload file
          $success = move_uploaded_file($myFile["tmp_name"],
            UPLOAD_DIR . $name);
          if (!$success) { 
            echo '<div class="alert alert-warning">Gagal upload file.</div>';
            exit;
          }else{

            $insert = $conn->query("INSERT INTO persyaratan(id_akun, tgl_upload, file_name, file_size, file_type) VALUES('$id_akun', '$tgl', '$name', '$size', '$ext')");
            if($insert){
              echo '<div class="alert alert-success">File berhasil di upload.</div>';
            }else{
              echo '<div class="alert alert-warning">Gagal upload file.</div>';
              exit;
            }
          }

          // set permisi file
          chmod(UPLOAD_DIR . $name, 0644);
        }
        ?>

      </div>
    </div>

    <?php
    }
    ?>

    <hr>