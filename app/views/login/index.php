<div class="container vh-100 d-flex justify-content-center">
    <form class="needs-validation w-50  align-self-center" action="" method="POST" style="width: 90%;">
        <?php if ($data['error']): ?>
        <div class="alert alert-danger" role="alert">Username dan password salah!</div>
        <?php endif; ?>
        <h1>Halaman Login</h1>
        <div class="form-group">
            <label for="exampleInputUsername">Username</label>
            <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" required>
            <!-- <input type="text" class="form-control is-invalid" name="username" aria-describedby="emailHelp">
            <div class="invalid-feedback">
                Username tidak boleh kosong!
            </div> -->
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="password" id="password" required>
            <!-- <input type="password" class="form-control is-invalid" name="password" id="password"> -->
            <!-- <div class="invalid-feedback">
                Password tidak boleh kosong!
            </div> -->
        </div>
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" name="remember">
                <label class="form-check-label" for="remember">
                    Remember me
                </label>
            </div>
        </div>
        <p>Belum mempunyai akun? <a href="<?= BASEURL ?>public/register" style="color: blue;">registrasi</a></p>
        <!-- <div class="alert alert-danger" role="alert">
            Username atau password salah!
        </div> -->
        <button type="submit" name="login" class="btn btn-primary">Login</button>
    </form>
</div>  