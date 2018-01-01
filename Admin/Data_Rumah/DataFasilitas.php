
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Data Perum</a>
        </li>
      </ol>
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">Edit Data Fasilitas</li>
        <li class="breadcrumb-item">
        <a href="index.php?mod=datarumah"> Edit Data Rumah </a>
        </li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>Edit Data</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <?php 
                require("connectdb.php");

                $SQL = "select * from fasilitas";
                $result = mysqli_query($conn, $SQL);
                $num = mysqli_num_rows($result);

                if($num > 0) {
              ?>
              
              <thead>
                <tr>
                  <th>Edit</th>
                  <th>Hapus</th>
                  <th>Foto</th>
                  <th>Nama</th>
                  <th>Keterangan</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Edit</th>
                  <th>Hapus</th>
                  <th>Foto</th>
                  <th>Nama</th>
                  <th>Keterangan</th>
                </tr>
              </tfoot>
              <tbody>
              <?php
                while ($data = mysqli_fetch_array($result)) {
            
              ?>                                                          
                <tr>
                  <td><a href="index.php?mod=editfasilitas&mode=update&dat=<?php echo "$data[ID_Fasilitas]"; ?>"><img src="Foto/edit.png" width="20" height="20"></a></td>
                  <td><a href="Data_Rumah/hpsfas.php?mode=delete&dat=<?php echo "$data[ID_Fasilitas]"; ?>"><img src="Foto/delete.png" width="20" height="20"></td>
                  <td width="20%"><img src="Foto_Fasilitas/<?php echo "$data[Foto_Fasilitas]"; ?>" width='80%' height='80px'></td>
                  <td><?php echo "$data[Nama_Fasilitas]"; ?></td>
                  <td><?php echo "$data[Keterangan]"; ?></td>
                </tr><?php
              }
                ?>
              </tbody>
            <?php 
            }
            else{
              echo "Data Masih Kosong";
            }
            ?>
            </table>
          </div>
        </div>
      </div>
    </div>
