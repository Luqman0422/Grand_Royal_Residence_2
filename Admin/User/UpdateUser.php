
<?php

  if($_GET['mode']=='update'){
  $NIP = $_GET['dat'];
  

  require ("connectdb.php");
  if (mysqli_connect_errno()) {
    echo "Koneksi ke server gagal";
    exit();
  }
  $query = "select NIP, Username, Password, NamaDepan,NamaBelakang from admin where NIP = '$NIP'";
  $result = mysqli_query($conn, $query);
  if ($result) {
    $row = mysqli_fetch_array($result);
    $NIP = $row[0];
    $Username = $row[1];
    $Pw = $row[2];
    $NamaDepan = $row[3];
    $NamaBelakang = $row[4];
  }

?>

  <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">User</a>
        </li>
        <li class="breadcrumb-item active">Update User</li>
  </ol>    
  <div class="card card-register mx-auto mt-5">
      <div class="card-header">Update Akun User</div>
      <div class="card-body">
        <form action="Update.php" method="post">
        <div class="form-group">
            <label for="exampleInputNIP">NIP</label>
            <input class="form-control" id="exampleInputNIP" type="hidden" aria-describedby="NIPHelp" value="<?php echo "$NIP"; ?>" name="NIP"><?php echo "<br>$NIP"; ?></input>
        </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">Nama Depan</label>
                <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" value="<?php echo "$NamaDepan"; ?>" name="nama_depan">
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">Nama Belakang</label>
                <input class="form-control" id="exampleInputLastName" type="text" aria-describedby="nameHelp" value="<?php echo "$NamaBelakang"; ?>" name="nama_belakang">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input class="form-control" id="exampleInputUsername1" type="text" aria-describedby="UsernameHelp" value="<?php echo "$Username"; ?>" name="Username">
          </div>
          <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input class="form-control" id="exampleInputPassword" type="password" value="<?php echo "$PW"; ?>" name="Password">
          </div>
          <button name="btnSubmit" class="btn btn-primary btn-block">Update</button>
          <a class="btn btn-primary btn-block" href="tables.php">Back</a>
        </form>
        </div>  
      </div>
      </div><!-- /.content-wrapper-->

  <?php
    } 
  ?>

