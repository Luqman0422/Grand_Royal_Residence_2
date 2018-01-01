      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">User</a>
        </li>
        <li class="breadcrumb-item active">Edit User</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data User</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <?php 
                require("connectdb.php");

                $SQL = "select NIP, Username, Password, NamaDepan, NamaBelakang from admin";
                $result = mysqli_query($conn, $SQL);
                $num = mysqli_num_rows($result);

                if($num > 0) {
              ?>
              <thead>
                <tr>
                  <th>NIP</th>
                  <th>Nama Depan</th>
                  <th>Nama Belakang</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Edit</th>
                  <th>Hapus</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>NIP</th>
                  <th>Nama Depan</th>
                  <th>Nama Belakang</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Edit</th>
                  <th>Hapus</th>
                </tr>
              </tfoot>
              <tbody>
              <?php
                while ($row = mysqli_fetch_array($result)) {
            
                $NIP = $row[0];
                $Username = $row[1];
                $Password = $row[2];
                $NamaDepan = $row[3];
                $NamaBelakang = $row[4];
              ?>                                                                                
                <tr>
                  <td><?php echo "$NIP"; ?></td>
                  <td><?php echo "$NamaDepan"; ?></td>
                  <td><?php echo "$NamaBelakang"; ?></td>
                  <td><?php echo "$Username"; ?></td>
                  <td><?php echo "$Password"; ?></td>
                  <td><a href="index.php?mod=edituser&mode=update&dat=<?php echo "$NIP"; ?>"><img src="Foto/edit.png" width="20" height="20"></a></td>
                  <td><a href="User/Delete.php?mode=delete&dat=<?php echo "$NIP"; ?>"><img src="Foto/delete.png" width="20" height="20"></td>
                </tr>
                <?php
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
    </div>
