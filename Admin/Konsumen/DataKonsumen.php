      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Konsumen</a>
        </li>
        <li class="breadcrumb-item active">Data Masuk Konsumen</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Masuk Konsumen</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
             <?php 
                require("connectdb.php");

                $SQL = "select * from booking";
                $result = mysqli_query($conn, $SQL);
                $num = mysqli_num_rows($result);

                if($num > 0) {
              ?>
              
              <thead>
                <tr>
                  <th>Nama Lengkap</th>
                  <th>NIK</th>
                  <th>No_telp</th>
                  <th>Alamat</th>
                  <th>Pekerjaan</th>
                  <th>Type</th>
                  <th>DP</th>
                  <th>Block kavling</th>
                  <th>Gaji per bulan</th>
                  <th>Terima</th>
                  <th>Tolak</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Nama Lengkap</th>
                  <th>NIK</th>
                  <th>No_telp</th>
                  <th>Alamat</th>
                  <th>Pekerjaan</th>
                  <th>Type</th>
                  <th>DP</th>
                  <th>Block kavling</th>
                  <th>Gaji per bulan</th>
                  <th>Terima</th>
                  <th>Tolak</th>
                </tr>
              </tfoot>
              <tbody>
              <?php
                while ($data = mysqli_fetch_array($result)) {
            
              ?>                                                          
                <tr>
                  <td><?php echo "$data[Nama_Lengkap]"; ?></td>
                  <td><?php echo "$data[nik]"; ?></td>
                  <td><?php echo "$data[no_telp]"; ?></td>
                  <td><?php echo "$data[alamat]"; ?></td>
                  <td><?php echo "$data[pekerjaan]"; ?></td>
                  <td><?php echo "$data[type]"; ?></td>
                  <td><?php echo "$data[DP]"; ?></td>
                  <td><?php echo "$data[Block_No]"; ?></td>
                  <td><?php echo "$data[Gaji_per_bulan]"; ?></td>
                  <?php
                    if($data['verifikasi_order']>0){
                  ?>
                  <td colspan="2">
                    Sukses
                  </td>
                  <?php
                    }
                    else{
                  $quer = "SELECT * FROM akun where id_booking = '$data[id_booking]'";
                    $res = mysqli_query($conn, $quer);
                    $has = mysqli_fetch_array($res);
                  ?>
                  <td><a href="index.php?mod=listpersyaratan&nik=<?php echo "$data[nik]";?>&id_akun=<?php echo "$has[id_akun]";?>">terima</a></td>
                  <td><a href="Konsumen/approvement.php?stat=tolak&nik=<?php echo "$data[nik]";?>">tolak</a></td>
                  <?php
                    }
                  ?>
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
