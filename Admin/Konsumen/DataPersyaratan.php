      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Konsumen</a>
        </li>
        <li class="breadcrumb-item active">Data Pemesanan Konsumen</li>
      </ol>
      <!-- Example DataTables Card-->
      <?php
      function bytesToSize($bytes, $precision = 2){  
        $kilobyte = 1024;
        $megabyte = $kilobyte * 1024;
        $gigabyte = $megabyte * 1024;
        $terabyte = $gigabyte * 1024;
       
        if (($bytes >= 0) && ($bytes < $kilobyte)) {
          return $bytes . ' B';
        } elseif (($bytes >= $kilobyte) && ($bytes < $megabyte)) {
          return round($bytes / $kilobyte, $precision) . ' KB';
        } elseif (($bytes >= $megabyte) && ($bytes < $gigabyte)) {
          return round($bytes / $megabyte, $precision) . ' MB';
        } elseif (($bytes >= $gigabyte) && ($bytes < $terabyte)) {
          return round($bytes / $gigabyte, $precision) . ' GB';
        } elseif ($bytes >= $terabyte) {
          return round($bytes / $terabyte, $precision) . ' TB';
        } else {
          return $bytes . ' B';
        }
      }
    ?>
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Persyaratan Konsumen</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama</th>
                  <th>Size</th>
                  <th>Type</th>
                  <th>DOWNLOAD</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>No.</th>
                  <th>Nama</th>
                  <th>Size</th>
                  <th>Type</th>
                  <th>DOWNLOAD</th>
                </tr>
              </tfoot>
              <tbody>
                 <?php
      $sql = $conn->query("SELECT * FROM persyaratan ORDER BY id_persyaratan DESC");

      if($sql->num_rows > 0){
        $no = 1;
        while($row = $sql->fetch_array()){
          $sql1 = $conn->query("SELECT * FROM akun where id_akun = '$row[id_akun]'");
          $row1 = $sql1->fetch_array();  
          echo '
          <tr>
            <td>'.$no.'</td>
            <td>'.$row1['User'].'</td>
            <td>'.bytesToSize($row['file_size']).'</td>
            <td>'.$row['file_type'].'</td>
            <td><a href="upload/'.$row['file_name'].'" class="btn btn-primary btn-sm">Download</a></td>
          </tr>
          ';
          $no++;
        }
      }else{
        echo '<tr><td colspan="5">Tidak ada data</td></tr>';
      }

      ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
