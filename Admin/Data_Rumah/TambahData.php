<ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Data Perum</a>
        </li>
        </ol>
        <ol class="breadcrumb">
        <li class="breadcrumb-item active">Tambah Data</li>
        <li class="breadcrumb-item">
        <a href="index.php?mod=tambahfasilitas"> Tambah data Fasilitas </a>
        </li>
      </ol>
      <!-- Example DataTables Card-->
      <form action="Data_Rumah/do_tambah.php" method="post" enctype="multipart/form-data">    
      <div class="card card-register mx-auto mt-5">
      <div class="card-header">Tambah data Rumah</div>
      <div class="card-body">
          <div class="form-group">
             <div class="card-body">
               <img id="blah" src="" alt="Foto Rumah" width="100px" height="100px"><br>
               <input type="file" name="Foto[]"></input>
             </div>
             <div class="card-body">
               <img id="blah" src="" alt="Denah Rumah" width="100px" height="100px"><br>
               <input type="file" name="Foto[]"></input>
             </div>
          </div>
          <div class="form-group">     
              <label for="exampleInputName">Type Rumah</label>
              <input class="form-control" type="text" aria-describedby="nameHelp" name="Tipe"></input>
          </div>
              
          <div class="form-group">     
              <label for="exampleInputName">Harga</label>
              <input class="form-control" type="text" aria-describedby="nameHelp" name="Harga"></input>
          </div>
          <div class="form-group">     
              <label for="exampleInputName">Cluster</label>
              <select class="form-control" type="text" aria-describedby="nameHelp" name="Cluster">
                   <option value="#">Pilih Cluster</option>>
                  <option value="Classic">Classic</option>
                  <option value="Minimalis">Minimalis</option>
              </select>
          </div>
          <div class="form-group">     
              <label for="exampleInputName">Deskripsi</label>
              <textarea class="form-control" type="textarea" aria-describedby="nameHelp" name="Deskripsi"></textarea>
          </div>
          <button name="Tambah" class="btn btn-primary btn-block">Tambah</button>
        </div>
        </div>  
      </div>
      </div>  
      </form>