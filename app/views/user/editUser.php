<div class="shadow mb-5 bg-body rounded" style="margin:2%; padding:0%;">
        <div class="container-fluid">
            <div class="row vh-100">
                <div class="col-sm shadow-sm" style="background-color:#007bff; Max-width: 20%;">
                    <h4 style="margin-top: 10%; margin-bottom: 20%; text-align: center; font-family: Pacifico; color:white;">Profil User</h4>
                    <img class="mx-auto d-block" src="foto.jpg" alt="" style=" justify-content: center; border-radius: 50%; margin-bottom: 20%;" width="50%;">
                    <p style="text-align: center;">Nama</p>
                </div>
                <div class="col-xl" style="Max-width: 80%; padding: 0%;">
                    <div class="jumbotron-md-0 jumbotron-fluid bg-transparent md-0" style="margin-bottom: 0;">
                        <div class="container">
                        <form class="w-100  align-self-center" action="" method="POST">
                            <h3>Profile Settings</h3>
                            <div class="form-group">
                                <label for="exampleInputUsername">Username</label>
                                    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" required>
                                <input type="text" class="form-control is-invalid" name="username" aria-describedby="emailHelp">
                                <div class="invalid-feedback">
                                    Username tidak boleh kosong!
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsia">Usia</label>
                                    <input type="text" class="form-control" id="Usia" name="Usia" required>
                                <input type="text" class="form-control is-invalid" name="Usia" required>
                                <div class="invalid-feedback">
                                    Usia tidak boleh kosong!
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputAsalProvinsi">Asal Provinsi</label>
                                    <input type="text" class="form-control" id="AsalProvinsi" name="AsalProvinsi" required>
                                <input type="text" class="form-control is-invalid" name="AsalProvinsi" required>
                                <div class="invalid-feedback">
                                    Asal Provinsi tidak boleh kosong!
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" name="password" id="password" required>
                                <input type="password" class="form-control is-invalid" name="password" id="password">
                                <div class="invalid-feedback">
                                    Password tidak boleh kosong!
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputKonfirmasiPassword1">Konfirmasi Password</label>
                                <input type="password" class="form-control" name="konfirmasiPassword" id="konfirmasiPassword" required>
                                <input type="password" class="form-control is-invalid" name="konfirmasiPassword" id="konfirmasiPassword">
                                <div class="invalid-feedback">
                                    Konfirmasi Password tidak boleh kosong!
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="fotoProfil">Foto Profil</label>
                                <input type="file" class="form-control-file" name="fotoProfil" id="fotoProfil">
                            </div>
                            <button type="submit" name="register" class="btn btn-primary">Simpan</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
