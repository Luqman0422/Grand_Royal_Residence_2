      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Data Perum</a>
        </li>
        <li class="breadcrumb-item active">Edit Data Rumah</li>
        <li style="padding-left: 550px;">
        <a href="editfas.php"> Edit Data Fasilitas </a>
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

                $SQL = "select Type, Harga, Cluster, Deskripsi, Foto, Denah from data_rumah";
                $result = mysqli_query($conn, $SQL);
                $num = mysqli_num_rows($result);

                if($num > 0) {
              ?>
              
              <thead>
                <tr>
                  <th>Foto</th>
                  <th>Denah</th>
                  <th>Tipe</th>
                  <th>Harga</th>
                  <th>Cluster</th>
                  <th>Deskripsi</th>
                  <th>Edit</th>
                  <th>Hapus</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Foto</th>
                  <th>Denah</th>
                  <th>Tipe</th>
                  <th>Harga</th>
                  <th>Cluster</th>
                  <th>Deskripsi</th>
                  <th>Edit</th>
                  <th>Hapus</th>
                </tr>
              </tfoot>
              <tbody>
              <?php
                while ($data = mysqli_fetch_array($result)) {
            
              ?>                                                          
                <tr>
                  <td width="20%"><img src="../images/<?php echo "$data[Foto]"; ?>" width='100%' height='20px'></td>
                  <td width="20%"><img src="../Denah/<?php echo "$data[Denah]"; ?>" width='100%' height='20px'></td>
                  <td><?php echo "$data[Type]"; ?></td>
                  <td><?php echo "$data[Harga]"; ?></td>
                  <td><?php echo "$data[Cluster]"; ?></td>
                  <td><?php echo "$data[Deskripsi]"; ?></td>
                  <td><a href="index.php?mod=editrumah&mode=update&dat=<?php echo "$data[Type]"; ?>"><img src="../Foto/edit.png" width="20" height="20"></a></td>
                  <td><a href="hpsdt.php?mode=delete&dat=<?php echo "$data[Type]"; ?>"><img src="../Foto/delete.png" width="20" height="20"></td>
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
