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
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" style="width:100%;">
        <div class="carousel-item active">
            <img class="d-block w-100" src="<?= BASEURL; ?>public/img/wap1.png" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?= BASEURL; ?>public/img/wap2.png" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?= BASEURL; ?>public/img/wap3.png" alt="Third slide">
        </div>
    </div>
</div>

<section class="social" id="social" style="margin-bottom: 2%;">
    <div class="container">
        <div class="row pt-4 mb-4">
        <div class="col text-center">
            <h2 style="color:#0066ff;font-size:2.5em;"><b>VIDEO EDUKASI COVID-19</b></h2>
        </div>
        </div>

        <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="row mt-1 pb-3">
            <div class="col">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/rg0W5baVWC0?rel=0" allowfullscreen></iframe>
            </div>
            </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="row mt-3 pb-3">
            <div class="col">
                <h2 class="text-justify">Awareness Raising COVID-19 yang Berkesetaraan Gender dan Inklusif</h2>
                <hr size="70" noshade>
                <p class="text-justify">Video Awareness Raising COVID-19 yang Berkesetaraan Gender dan Inklusif - Yayasan Plan International Indonesia dan Kementerian Kesehatan</p>
            </div>
            </div>
        </div>
</section>

<section class="social bg-light" id="social" style="margin-bottom: 2%;">
    <div class="container">
        <div class="row pt-4 mb-4">
        <div class="col text-center" style="color:#0066ff; margin:0;">
            <h2 style="margin-bottom: 0; font-size:2.5em;"><b>PENCEGAHAN</b></h2>
            <h4 style="font-size:1.2em;">CORONAVIRUS COVID-19</h4>
        </div>
        </div>

        <div class="row justify-content-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-2 offset-md-0"><img src="<?= BASEURL; ?>public/img/Asset 1.png" class="center"><p>Memakai Masker</p></div>
                    <div class="col-md-2 offset-md-2"><img src="<?= BASEURL; ?>public/img/Asset 4.png" class="center"><p>Tidak Berkerumun</p></div>
                    <div class="col-md-2 offset-md-2"><img src="<?= BASEURL; ?>public/img/Asset 3.png" class="center"><p>Menggunakan Sabun</p></div>
                    <div class="w-100"></div>
                    <div class="col-md-2 offset-md-0"><img src="<?= BASEURL; ?>public/img/Asset 5.png" class="center"><p>Menggunakan Handsinitizer</p></div>
                    <div class="col-md-2 offset-md-2"><img src="<?= BASEURL; ?>public/img/Asset 6.png" class="center"><p>Tidak Bersalaman</p></div>
                    <div class="col-md-2 offset-md-2"><img src="<?= BASEURL; ?>public/img/Asset 7.png" class="center"><p>Mencuci Tangan</p></div>
                </div>
            </div>
        </div>
        
    </div>
</section>
<section class="mt-4 mb-4" id="feedbackcovid">
    <div class="container">
        <div class="col text-center" style="color:#0066ff; margin:0;">
            <h2 style="color:#0066ff;font-size:2.5em;"><b>FEEDBACK</b></h2>
            <h4 style="font-size:1.2em;">PENGGUNA TENTANG COVID-19</h4>
        </div>
        <div class="card-deck">
            <div class="row row-cols-3 row-cols-md-2">
            <?php if(isset($data['feedback'])): ?>
                <?php foreach($data['feedback'] as $feedback): ?>
                <div class="col mb-4">
                    <div class="card">
                        <img src="<?= 'data:image/jpeg;base64, ' . base64_encode($feedback['foto_profil']); ?>" class="mx-auto d-block" alt="..." style="width:100px; height:100px; border-radius: 50%; margin:2%;">
                        <div class="card-body">
                            <h5 class="text-center"><?= $feedback['username']; ?></h5>
                            <p class="text-justify"><?= $feedback['pesan'] ?></p>
                            <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col mb-4">
                    <p>Masih belum ada feedback nih.</p>
                </div>
            <?php endif;?>
                    <!-- <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div> -->
            </div>
        </div>
        <div class="feedback-footer mt-4">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Beri kesanmu disini!
            </button>
        </div>
    </div>
</section>




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Feedback tentang covid-19</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <?php if(isset($_SESSION['login'])): ?>
        <form method="POST">
            <div class="form-group">
                <label for="pesanfeedback">Pesan atau kesan</label>
                </br>
                <textarea name="pesanfeedback" id="pesanfeedback" cols="50" rows="10" maxlength="255" required ></textarea>
                <small id="pesanHelp" class="form-text text-muted">Beri tahu kepada mereka keluh kesahmu atau pesan tentang covid-19</small>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <input type="submit" class="btn btn-primary" name='kirimpesan' value="Kirim feedbackmu">
      </div>
      </form>
      <?php else: ?>
        <p>Harap login terlebih dahulu jika ingin memberi pesan</p>
      <?php endif; ?>
    </div>
  </div>
</div>
