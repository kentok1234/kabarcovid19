<nav class="navbar navbar-expand-xl navbar-dark" id="navbarScroll">
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
                <a class="nav-link"href="<?= BASEURL; ?>public/logout">Logout</a>
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

<!-- end nav -->

<?php
$confirmed = $data['covid']->confirmed;
$recovered = $data['covid']->recovered;
$deaths = $data['covid']->deaths;
$last_update = $data['covid']->lastUpdate;

$data_json_rs = file_get_contents('https://dekontaminasi.com/api/id/covid19/hospitals');
$dataRumahSakit = json_decode($data_json_rs, true);
?>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Data covid Indonesia</h1>
    <div class="container">
        <div class="row">
            <div class="col data-covid lead">
                <h2>Terkonfirmasi</h2>
                <p><?= $confirmed->value; ?></p>
            </div>
            <div class="col data-covid lead">
                <h2>Telah pulih</h2>
                <p><?= $recovered->value; ?></p>
            </div>
            <div class="w-100"></div>
            <div class="col data-covid lead">
                <h2>Korban jiwa</h2>
                <p><?= $deaths->value; ?></p>
            </div>
            <div class="col data-covid lead">
                <h2>Terakhir update</h2>
                <p><?= $last_update; ?></p>
            </div>
        </div>
    </div>
  </div>
</div>

<div class="jumbotron-md-0 jumbotron-fluid bg-transparent md-0" style="margin-bottom: 0;">
  <div class="container">
    <h1 class="display-4" style="margin-bottom: 0.2em;">Data Rumah Sakit</h1>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr style="text-align: center;">
                <th scope="col">No</th>
                <th scope="col">Nama Rumah Sakit</th>
                <th scope="col">Provinsi</th>
                <th scope="col">Alamat</th>
                <th scope="col">No Telpon</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $i = 1;
                foreach($dataRumahSakit as $row): ?>
                <tr>
                    <th scope="row" style="text-align: center;"><?= $i; ?></th>
                    <td><?= $row["name"]; ?></td>
                    <td style="text-align: center;"><?= $row["province"]; ?></td>
                    <td><?= $row["address"]; ?></td>
                    <td><?= $row["phone"]; ?></td>
                </tr>
                <?php 
                    $i++;
                    endforeach; 
                ?>
            </tbody>
        </table>
    </div>
  </div>
</div>