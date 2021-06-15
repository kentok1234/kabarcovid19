<style>
    .berita-content {
        max-height:320px;
    }

    .berita-content img {
        display:block;
    }

    .berita-title {
        display:inline;
    }
</style>

<nav class="navbar navbar-expand-xl navbar-light bg-light" id="navbarScroll">
    <a class="navbar-brand" href="<?= BASEURL; ?>public/home" style="font-size: 1.5em; font-family: Pacifico;">Kabar.Covid-19</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end mr-md-3" id="navbarNav" >
        <ul class="navbar-nav" style="font-size: 1em;">
            <li class="nav-item active">
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
                <a class="nav-link"href="<?= BASEURL; ?>public/logout">Logout</a>
            </li>
            <?php else:?>
            <li class="nav-item">
                <a class="nav-link"href="<?= BASEURL; ?>public/login">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= BASEURL; ?>public/register">Daftar</a>
            </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>

<div class="container">
    <div id="carouselExampleIndicators" class="carousel slide mt-4" data-ride="carousel">
        <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <?php for($i = 1; $i < 3; $i++): ?>
            <li data-target="#carouselExampleIndicators" data-slide-to="<?= $i; ?>"></li>
        <?php endfor; ?>
        </ol>

        <div class="carousel-inner">
            <div class="carousel-item active" style="background-image:url('<?php 
            if($data['berita']->articles[0]->urlToImage == "") {
                echo BASEURL . 'public/img/default-image.jpg';
            }
            else {
                echo $data['berita']->articles[0]->urlToImage;
            }
            ?>'); height:480px; background-size:cover; background-position:center">
                <div class="carousel-caption d-none d-md-block">
                    <h5><?= $data['berita']->articles[0]->title; ?></h5>
                    <p><?= $data['berita']->articles[0]->description; ?></p>
                </div>
            </div>
            <?php
            for ($i = 1; $i < 3; $i++):
            ?>
            <div class="carousel-item" style="background-image:url('<?php
            if(empty($data['berita']->articles[$i]->urlToImage)) {
                echo BASEURL . "public/img/default-image.jpg";
            }
            else {
                echo $data['berita']->articles[$i]->urlToImage;
            }
            // echo $data['berita']->articles[$i]->urlToImage;
             ?>'); height:480px; background-size:cover; background-position:center">
                <div class="carousel-caption d-none d-md-block">
                    <h5><?= $data['berita']->articles[$i]->title; ?></h5>
                    <p><?= $data['berita']->articles[$i]->description; ?></p>
                </div>
            </div>
            <?php endfor; ?>
        </div>
    </div>

    <div class="jumbotron">
        <p class="lead">Ketika harapan tampak tidak ada harapan, teruslah berjuang. Ini adalah masa-masa sulit. Saat kita keluar bersama, kita akan memiliki dunia yang lebih baik dan hati yang lebih bersih</p>
    </div>

    <section id="berita">
        <h2>Berita</h2>
        <?php $limit = 9; ?>
        <hr>
        <?php for($i = 3; $i < $limit; $i++): ?>
        <div class="berita-content">
            <img src="<?php 
            if(empty($data['berita']->articles[$i]->urlToImage)) {
                echo BASEURL . "public/img/default-image.jpg";
            }
            else {
                echo $data['berita']->articles[$i]->urlToImage;
            }
            ?>" alt="" width=280>
            <h3 class="berita-title"><a href="<?= $data['berita']->articles[$i]->url; ?>"><?= $data['berita']->articles[$i]->title; ?></a></h3>
            <p class="berita-desc"><?= $data['berita']->articles[$i]->description; ?></p>
        </div>
        <?php endfor; ?>
    </section>

</div>