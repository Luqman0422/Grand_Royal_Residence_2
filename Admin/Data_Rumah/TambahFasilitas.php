      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Data Perum</a>
        </li>
      </ol>
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">Tambah Data</li>
        <li class="breadcrumb-item">
        <a href="index.php?mod=tambahrumah"> Tambah data Rumah </a>
        </li>
      </ol>
      <!-- Example DataTables Card-->
      <form action="Data_Rumah/tmbhfas.php" method="post" enctype="multipart/form-data">    
      <div class="card card-register mx-auto mt-5">
      <div class="card-header">Tambah data Fasilitas</div>
      <div class="card-body">
          <div class="form-group">
             <div class="card-body">
               <img id="blah" src= alt="your image" width="100px" height="100px"><br>
               <input type="file" name="FotoFas"></input>
             </div>
          </div>
          <div class="form-group">     
              <label for="exampleInputName">Nama Fasilitas</label>
              <input class="form-control" type="text" aria-describedby="nameHelp" name="NamaFas"></input>
          </div>
          <div class="form-group">     
              <label for="exampleInputName">Keterangan</label>
              <textarea class="form-control" type="textarea" aria-describedby="nameHelp" name="Keterangan"></textarea>
          </div>
          <button name="Tambah" class="btn btn-primary btn-block">Tambah</button>
        </div>
        </div>  
      </div>
      </div>  
      </form>
        </div>
        </div>
      </div>
      
    </div>
