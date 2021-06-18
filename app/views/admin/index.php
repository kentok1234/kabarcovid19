<div class="container-fluid">
    <div class="row vh-100">
            <div class="col-sm shadow-sm" style="background-color:#007bff; Max-width: 20%;">
                <h4 style="margin-top: 10%; margin-bottom: 20%; text-align: center; font-family: Pacifico; color:white;">Admin Kabar Covid-9</h4>
                <img class="mx-auto d-block" src="<?= 'data:image/jpeg;base64, ' . base64_encode($data['admin']['foto_profil']); ?>" alt="" style=" justify-content: center; border-radius: 50%; margin-bottom: 20%;" width="50%;">
            </div>
            <div class="col-xl" style="Max-width: 80%; padding: 0%;">
                <nav class="navbar navbar-expand-xl navbar-light bg-light shadow-sm" id="navbarScroll" >
                    <a class="navbar-brand" href="#" style="font-size: 1.5em; font-family: Pacifico; color:transparent;">Kabar.Covid-19</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end mr-md-3" id="navbarNav" >
                        <ul class="navbar-nav" style="font-size: 1em;">
                            <li class="nav-item">
                                <a class="btn nav-link" href="<?= BASEURL . 'public/logout' ?>">LogOut</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="jumbotron-md-0 jumbotron-fluid bg-transparent md-0" style="margin-bottom: 0;">
                    <div class="container">
                        <h2 class="display-4" style="margin-bottom: 0.2em;">Data User</h2>
                        <div class="container">
                            <div class="row">
                            <?php Flasher::flash(); ?>
                            </div>
                        <table class="table table-striped">
                            <thead>
                                <tr style="text-align: center;">
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Usia</th>
                                    <th scope="col">Asal Provinsi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $no = 1;
                                    foreach($data['user'] as $user):
                                ?>
                                <tr>
                                    <th scope="row" style="text-align: center;"><?= $no; ?></th>
                                    <td style="text-align: center;"><?= $user['username']; ?></td>
                                    <td style="text-align: center;"><?= $user['usia']; ?></td>
                                    <td style="text-align: center;"><?= $user['provinsi']; ?></td>
                                    <td style="text-align: center;"><a class="badge badge-pill badge-danger" href="<?= BASEURL . 'public/admin/deleteDataUser/' . $user['userid']; ?>" onclick="return confirm('Apakah ingin menghapus data tersebut?')">Hapus</a></td>
                                </tr>
                                <?php 
                                    $no++;
                                    endforeach; 
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="jumbotron-md-0 jumbotron-fluid bg-transparent md-0" style="margin-bottom: 0;">
                    <div class="container">
                        <h2 class="display-4" style="margin-bottom: 0.2em;">Data Feedback</h2>
                        <div class="container">
                            <table class="table table-striped">
                                <thead>
                                    <tr style="text-align: center;">
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Feedback</th>
                                    <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $i = 1;
                                        foreach($data['feedback'] as $feedback):
                                    ?>
                                    <tr>
                                        <th scope="row" style="text-align: center;"><?= $i; ?></th>
                                        <td style="text-align: center;"><?= $feedback['username']; ?></td>
                                        <td style="text-align: center;"><?= $feedback['pesan'] ?></td>
                                        <td style="text-align: center;"><a class="badge badge-pill badge-danger" href="<?= BASEURL . 'public/admin/deleteDataFeedback/' . $feedback['fedid']; ?>" onclick="return confirm('Apakah ingin menghapus data tersebut?')"">Hapus</a></td>
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
            </div>
        </div>
    </div>
</div>
