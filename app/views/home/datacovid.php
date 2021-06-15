<!-- Nav start -->

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

<!-- end nav -->

<?php
$confirmed = $data['covid']->confirmed;
$recovered = $data['covid']->recovered;
$deaths = $data['covid']->deaths;
$last_update = $data['covid']->lastUpdate;
?>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Data covid Indonesia</h1>
    <div class="data-covid lead">
        <h2>Terkonfirmasi</h2>
        <p><?= $confirmed->value; ?></p>
    </div>
    <div class="data-covid lead">
        <h2>Telah pulih</h2>
        <p><?= $recovered->value; ?></p>
    </div>
    <div class="data-covid lead">
        <h2>Korban jiwa</h2>
        <p><?= $deaths->value; ?></p>
    </div>
    <div class="data-covid lead">
        <h2>Terakhir update</h2>
        <p><?= $last_update; ?></p>
    </div>
  </div>
</div>

