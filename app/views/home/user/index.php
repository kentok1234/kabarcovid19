<nav class="navbar sticky-top navbar-expand-xl navbar-dark" id="navbarScroll">
    <a class="navbar-brand" href="<?= BASEURL; ?>public/home" style="font-size: 1.5em; font-family: Pacifico;">Kabar.Covid-19</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end mr-md-3" id="navbarNav" >
        <ul class="navbar-nav" style="font-size: 1em;">
            <li class="nav-item">
                <a class="nav-link" href="<?= BASEURL; ?>public/home">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= BASEURL; ?>public/home/datacovid">Data Covid</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= BASEURL; ?>public/home/berita">Berita</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= BASEURL; ?>public/home/tentang">Tentang</a>
            </li>
            <?php if(isset($data['logout'])): ?>
            <li class="nav-item">
                <a class="nav-link" href="<?= BASEURL; ?>public/home/user/">Profil</a>
            </li>
            <li class="nav-item ml-2">
                <a class="btn"href="<?= BASEURL; ?>public/logout">Logout</a>
            </li>
            <?php else:?>
            <li class="nav-item">
                <a class="nav-link"href="<?= BASEURL; ?>public/login">Login</a>
            </li>
            <li class="nav-item ml-2">
                <a class="btn" href="<?= BASEURL; ?>public/register">Daftar</a>
            </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>

<div class="shadow mb-2 bg-body rounded" style="margin:2%; padding:0%;">
    <div class="container-fluid">
        <div class="row">
            <div class="profile">
                    <h4 style="margin-top: 10%; margin-bottom: 10%; text-align: center; font-family: Pacifico; color:white;">Profil User</h4>
                    <img class="mx-auto d-block" src="<?= 'data:image/jpeg;base64, ' . base64_encode($data['user']['foto_profil']); ?>" alt="" style=" justify-content: center; border-radius: 50%; margin-bottom: 10%;" width="50%;">
                    <div class="nav-profile">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link" id="v-pills-home-tab" href="<?= BASEURL; ?>public/home/user/" role="tab" aria-controls="v-pills-home" aria-selected="true">Profile</a>
                            <a class="nav-link editprofil" id="v-pills-profile-tab" role="tab" aria-controls="v-pills-profile" aria-selected="false" data-toggle="modal" data-target="#exampleModal" data-id="<?= $_SESSION['id'] ?>">Edit Profile</a>
                        </div>
                    </div>
            </div>
            <div class="col-xl" style="Max-width: 80%; padding: 0%;">
                <div class="container d-flex h-100">
                    <div class="row justify-content-center align-self-center" style="font-size: 1.5em;">
                        <div class="col">
                            <?php Flasher::flash(); ?>
                        </div>   
                        <div class="w-100"></div> 
                        <div class="col" style="margin-bottom: 3%;"><b>Nama</b></div>
                        <div class="col"><?= $data['user']['username']; ?></div>
                        <div class="w-100"></div>
                        <div class="col" style="margin-bottom: 3%;"><b>Usia</b></div>
                        <div class="col"><?= $data['user']['usia']; ?></div>
                        <div class="w-100"></div>
                        <div class="col" style="margin-bottom: 3%;"><b>Asal Provinsi</b></div>
                        <div class="col"><?= $data['user']['provinsi']; ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal" class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Profile Settings</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="w-100  align-self-center" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputUsername">Username</label>
                    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" value="<?= $data['user']['username'] ?>" required>
                <!-- <input type="text" class="form-control is-invalid" name="username" aria-describedby="emailHelp">
                <div class="invalid-feedback">
                    Username tidak boleh kosong!
                </div> -->
            </div>
            <div class="form-group">
                <label for="exampleInputUsia">Usia</label>
                    <input type="text" class="form-control" id="Usia" name="usia" value="<?= $data['user']['usia'] ?>" required>
                <!-- <input type="text" class="form-control is-invalid" name="Usia" required>
                <div class="invalid-feedback">
                    Usia tidak boleh kosong!
                </div> -->
            </div>
            <div class="form-group">
                <label for="exampleInputAsalProvinsi">Asal Provinsi</label>
                    <input type="text" class="form-control" id="AsalProvinsi" name="asalprovinsi" value="<?= $data['user']['provinsi'] ?>" required>
                <!-- <input type="text" class="form-control is-invalid" name="AsalProvinsi" required>
                <div class="invalid-feedback">
                    Asal Provinsi tidak boleh kosong!
                </div> -->
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password" id="password" value="<?= $data['user']['password'] ?>" required>
                <!-- <input type="password" class="form-control is-invalid" name="password" id="password">
                <div class="invalid-feedback">
                    Password tidak boleh kosong!
                </div> -->
            </div>
            <div class="form-group">
                <label for="exampleInputKonfirmasiPassword1">Konfirmasi Password</label>
                <input type="password" class="form-control" name="konfirmasiPassword" id="konfirmasiPassword" required>
                <!-- <input type="password" class="form-control is-invalid" name="konfirmasiPassword" id="konfirmasiPassword">
                <div class="invalid-feedback">
                    Konfirmasi Password tidak boleh kosong!
                </div> -->
            </div>
            <div class="form-group">
                <label for="fotoProfil">Foto Profil</label>
                <input type="file" class="form-control-file" name="fotoProfil" id="fotoProfil">
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name='update'>Ubah profil</button>
      </div>
      </form>
    </div>
  </div>
</div>
