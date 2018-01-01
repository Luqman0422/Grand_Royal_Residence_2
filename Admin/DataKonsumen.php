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
                require("../connectdb.php");

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
                  ?>
                  <td><a href="approvement.php?stat=terima&nik=<?php echo "$data[nik]";?>">terima</a></td>
                  <td><a href="approvement.php?stat=tolak&nik=<?php echo "$data[nik]";?>">tolak</a></td>
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
            <button>Terima</button>
            <button>Hapus</button>
          </div>
        </div>
        <div class="card-footer small text-muted">
          <b>kirim Persyaratan</b><br>
          <textarea name="Persyaratan" cols="30" rows="6"></textarea>
          <br>
          <input type="submit" name="kirim" value="kirim">
        </div>
      </div>
    </div>
