<body style="background-color: #007bff; color:aliceblue;"> 
<div class="container">
    <div class="align-self-center" style="margin: 60px;">
        <h1 style="font-size: 4.5em; font-family: Pacifico; text-align:center;">Kabar.Covid-19</h1>
        <p style="text-align:center;font-size: 1.5em;">Website Information About Coronavirus</p>
    </div>
    <div class="d-flex justify-content-center">
        <form class="needs-validation w-50" action="" method="POST" style="width: 90%;">
            <?php if ($data['error']): ?>
            <div class="alert alert-danger" role="alert">Username dan password salah!</div>
            <?php endif; ?>
            <h1>Halaman Login</h1>
            <div class="form-group">
                <label for="exampleInputUsername">Username</label>
                <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password" id="password" required>
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
            <button type="submit" name="login" class="btn btn-light">Login</button>
        </form>
    </div>
</div>  
</body>
