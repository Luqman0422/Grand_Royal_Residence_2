<?php session_start();
if(empty($_SESSION['User'])) {
header('location:Login.php'); 
}
$id_akun = $_SESSION['$id_akun'];
include 'connectdb.php';
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>form cost</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="vendor/devicons/css/devicons.min.css" rel="stylesheet">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/resume.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      <a href="index.php?page="><img src="img/logo2.png" width="200" class="logo" alt="" titl="" /></a>
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <div align="center">
            <a href="indexUser.php?page=Home"><img src="img/image.png" width="50%" height="auto"></a> 
        </div>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="indexUser.php?page=Product">Rumah</a>
          </li>
            <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="indexUser.php?page=Simulasi">Simulasi Cicilan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="indexUser.php?page=Booking">Form Booking</a>
          </li>
          <?php
            $sql =  "SELECT * FROM akun where id_akun = '$id_akun'";
            $data = mysqli_query($conn,$sql);
            $hasil = mysqli_fetch_array($data);
            $sql2 =  "SELECT * FROM booking where id_booking = '$hasil[id_booking]'";
            $row = mysqli_query($conn,$sql2);
            $result = mysqli_fetch_array($row);
            if($result['verifikasi_order']>0){
          ?>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="indexUser.php?page=Upload">Upload File</a>
          </li>
          <?php
            }
          ?>
        </ul>
      </div>
      <a href="logout.php" style="text-decoration: none; color: white;">Logout</a>
    </nav>
    <?php
        switch ($_GET['page']) {
            case 'Home':
                include 'DashboardUser.php';
                break;
            case 'Simulasi':
                include 'Simulasi.php';
                break;
            case 'Booking':
                include 'FormBooking.php';
                break;
            case 'Upload':
                include 'Upload.php';
                break;
            default:
                include 'DashboardUser.php';
                break;
        }
    ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/resume.min.js"></script>

  </body>

</html>
