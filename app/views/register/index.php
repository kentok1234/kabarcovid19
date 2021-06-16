<div class="container-fluid">
    <div class="row">
        <div class="col p-3 bg-primary text-white">
            <div class="container vh-100 d-flex ">
                <div class="w-100  align-self-center">
                    <h1 style="font-size: 4.5em; font-family: Pacifico; text-align:center;">Kabar.Covid-19</h1>
                    <p style="text-align:center;font-size: 1.5em;">Website Information About Coronavirus</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="container vh-100 d-flex ">
                <form class="w-100  align-self-center" action="" method="POST" enctype="multipart/form-data">
                    <h3>Halaman Registrasi</h3>
                    <div class="form-group">
                        <label for="exampleInputUsername">Username</label>
                        <?php if (!($data['error'])): ?>
                            <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" required>
                        <?php endif; ?>

                        <?php if ($data['error']): ?>
                        <input type="text" class="form-control is-invalid" name="username" aria-describedby="emailHelp">
                        <div class="invalid-feedback">
                            Username tidak boleh kosong!
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsia">Usia</label>
                        <?php if (!($data['error'])): ?>
                            <input type="number" class="form-control" id="usia" name="usia" required>
                        <?php endif; ?>
                        <?php if ($data['error']): ?>
                        <input type="number" class="form-control is-invalid" name="usia" required>
                        <div class="invalid-feedback">
                            Usia tidak boleh kosong!
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputAsalProvinsi">Asal Provinsi</label>
                        <?php if (!($data['error'])): ?>
                            <input type="text" class="form-control" id="asalprovinsi" name="asalprovinsi" required>
                        <?php endif; ?>
                        <?php if ($data['error']): ?>
                        <input type="text" class="form-control is-invalid" name="asalprovinsi" required>
                        <div class="invalid-feedback">
                            Asal Provinsi tidak boleh kosong!
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>

                        <?php if (!($data['error'])): ?>
                        <input type="password" class="form-control" name="password" id="password" required>
                        <?php endif; ?>
                        
                        <?php if ($data['error']): ?>
                        <input type="password" class="form-control is-invalid" name="password" id="password">
                        <div class="invalid-feedback">
                            Password tidak boleh kosong!
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputKonfirmasiPassword1">Konfirmasi Password</label>
                        
                        <?php if (!($data['error'])): ?>
                        <input type="password" class="form-control" name="konfirmasiPassword" id="konfirmasiPassword" required>
                        <?php endif; ?>
                        
                        <?php if ($data['error']): ?>
                        <input type="password" class="form-control is-invalid" name="konfirmasiPassword" id="konfirmasiPassword">
                        <div class="invalid-feedback">
                            Konfirmasi Password tidak boleh kosong!
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="fotoProfil">Foto Profil</label>
                        <input type="file" class="form-control-file" name="fotoProfil" id="fotoProfil" accept="image/png, image/jpeg">
                        <!-- <input type="file" class="form-control-file is-invalid" name="fotoProfil" id="fotoProfil">
                        <div class="invalid-feedback">
                            Foto profil tidak boleh kosong!
                        </div> -->
                    </div>
                    <button type="submit" name="register" class="btn btn-primary">Registrasi</button>
                </form>
            </div>  
        </div>
    </div>
</div>
