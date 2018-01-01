<ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">User</a>
        </li>
        <li class="breadcrumb-item active">Tambah User</li>
  </ol>    
  <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register Akun User</div>
      <div class="card-body">
        <form action="User/do_register.php" method="post">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">Nama Depan</label>
                <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter first name" name="nama_depan">
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">Nama Belakang</label>
                <input class="form-control" id="exampleInputLastName" type="text" aria-describedby="nameHelp" placeholder="Enter last name" name="nama_belakang">
              </div>
            </div>
          </div>
           <div class="form-group">
            <label for="exampleInputNIP">NIP</label>
            <input class="form-control" id="exampleInputNIP" type="text" aria-describedby="NIPHelp" placeholder="Enter NIP" name="NIP">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input class="form-control" id="exampleInputUsername1" type="text" aria-describedby="UsernameHelp" placeholder="Enter Username" name="Username">
          </div>
          <div class="form-group">
            <div class="form-row">
                <label for="exampleInputPassword1">Password</label>
                <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password" name="Password">
              </div>
          </div>
          <button name="daftar" class="btn btn-primary btn-block">Register</button>
        </form>
        </div>  
      </div>
    </div>