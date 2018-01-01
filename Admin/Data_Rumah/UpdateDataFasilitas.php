<ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Data Perum</a>
        </li>
        <li class="breadcrumb-item active">Update Data Fasilitas</li>
      </ol>
      <!-- Example DataTables Card-->
      <?php
        if($_GET['mode']=='update'){
        $id = $_GET['dat'];
  

        require ("connectdb.php");
        if (mysqli_connect_errno()) {
          echo "Koneksi ke server gagal";
          exit();
        }
        $query = "select * from fasilitas where ID_Fasilitas = '$id'";
        $result = mysqli_query($conn, $query);
        if ($result) {
          $row = mysqli_fetch_array($result);      
        }
      ?>
      <form action="do_update.php?dat=<?php echo"$id"; ?>" method="post" enctype="multipart/form-data">    
      <div class="card card-register mx-auto mt-5">
      <div class="card-header">Update data Rumah</div>
      <div class="card-body">
          <div class="form-group">
             <div class="card-body">
               <img id="blah" src="Foto_Fasilitas/<?php echo "$row[Foto_Fasilitas]"; ?>" alt="your image" width="100px" height="100px"><br>
               <input type="file" name="FotoFas" value="<?php echo "$row[Foto_Fasilitas]"; ?>" ></input>
             </div>
          </div>
          <div class="form-group">     
              <label for="exampleInputName">Nama</label>
              <input class="form-control" type="text" aria-describedby="nameHelp" name="NamaFas" value="<?php echo "$row[Nama_Fasilitas]"; ?>"></input>
          </div>
          <div class="form-group">     
              <label for="exampleInputName">Keterangan</label>
              <textarea class="form-control" type="textarea" aria-describedby="nameHelp" name="Keterangan" value=""><?php echo "$row[Keterangan]"; ?></textarea>
          </div>
          <button name="Update" class="btn btn-primary btn-block">Update</button>
        </div>
        </div>  
      </div>
      </div>  
      </form>
      <?php 
  
  }
  ?>
        </div>
        </div>
      </div>
      
    </div>
