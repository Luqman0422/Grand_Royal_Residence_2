
     <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Data Perum</a>
        </li>
        <li class="breadcrumb-item active">Tambah Data</li>
      </ol>
      <!-- Example DataTables Card-->
      <?php
        if($_GET['mode']=='update'){
        $Type = $_GET['dat'];
  

        require ("connectdb.php");
        if (mysqli_connect_errno()) {
          echo "Koneksi ke server gagal";
          exit();
        }
        $query = "select Type, Harga, Cluster, Deskripsi,Foto, Denah from data_rumah where Type = '$Type'";
        $result = mysqli_query($conn, $query);
        if ($result) {
          $row = mysqli_fetch_array($result);
      

      ?>
      <form action="Data_rumah/updt.php" method="post" enctype="multipart/form-data">    
      <div class="card card-register mx-auto mt-5">
      <div class="card-header">Update data Rumah</div>
      <div class="card-body">
          <div class="form-group">
             <div class="card-body">
               <img id="blah" src="images/<?php echo "$row[Foto]"; ?>" alt="your image" width="100px" height="100px"><br>
               <input type="file" name="Foto[]" ></input>
             </div>

             <div class="card-body">
               <img id="blah" src="Denah/<?php echo "$row[Denah]"; ?>" alt="your image" width="100px" height="100px"><br>
               <input type="file" name="Foto[]"></input>
             </div>
          </div>
          <div class="form-group">     
              <label for="exampleInputName">Type Rumah</label>
              <input class="form-control" type="text" aria-describedby="nameHelp" name="Tipe" value="<?php echo "$row[Type]"; ?>"></input>
          </div>
              
          <div class="form-group">     
              <label for="exampleInputName">Harga</label>
              <input class="form-control" type="text" aria-describedby="nameHelp" name="Harga" value="<?php echo "$row[Harga]"; ?>"></input>
          </div>
          <div class="form-group">     
              <label for="exampleInputName">Cluster</label>
              <select class="form-control" type="text" aria-describedby="nameHelp" name="Cluster">
                  <option value="<?php echo "$row[Cluster]"; ?>"><?php echo "$row[Cluster]"; ?></option>>
                  <?php if($row['Cluster']=='Minimalis'){
                  ?>
                  <option value="Classic">Classic</option>
                  <?php
                }else{
                ?>

                  <option value="Minimalis">Minimalis</option>
                  <?php
                }
                ?>
              </select>
          </div>
          <div class="form-group">     
              <label for="exampleInputName">Deskripsi</label>
              <pre><textarea class="form-control" type="textarea" aria-describedby="nameHelp" name="Deskripsi" value=""><?php echo "$row[Deskripsi]"; ?></textarea></pre>
          </div>
          <button name="Update" class="btn btn-primary btn-block">Update</button>
        </div>
        </div>  
      </div>
      </div>  
      </form>
      <?php 
  }
  }
  ?>
        </div>
        </div>
      </div>
      
    </div>
    <!-- /.container-fluid-->
