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

<div class="jumbotron jumbotron-fluid">
    <div class="container">
    <h1 class="display-4">Kabar.Covid-19</h1>
        <div class="container">
            <div class="row">
                <div class="col">
                    <p style="text-align: justify;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente praesentium quidem cupiditate culpa id fugit quis ea nihil voluptates ut accusantium quisquam molestias obcaecati rerum corrupti excepturi, architecto possimus dolore sed voluptatum animi! Porro assumenda eius quod sequi rem, ad dolorum quisquam ipsa facere veritatis adipisci omnis neque dolores, impedit officia. Provident pariatur, earum, quis dicta ipsa adipisci reiciendis et consequatur dolore quasi iste voluptas illo eius maiores minima quam, enim similique quidem! Corrupti distinctio suscipit, rem quia odit voluptatem cumque! Nulla maxime ut nesciunt odit, illo ducimus repudiandae recusandae iusto officia rerum, nam voluptates deserunt maiores id impedit in atque. Quos nisi ad, consequuntur ipsa suscipit esse, distinctio error voluptas impedit quo, labore et veniam. Quas veritatis dignissimos earum sunt reiciendis at natus soluta et provident? Expedita recusandae necessitatibus dolor assumenda eligendi, odit obcaecati sed quidem, optio quia cupiditate nemo architecto quis placeat corporis dolorem minus quaerat maiores repellendus esse veniam deserunt dicta. Soluta, praesentium. Porro rerum natus necessitatibus inventore nobis, culpa ullam a doloremque quaerat commodi. Incidunt voluptas totam sequi atque magnam, iste dignissimos quam vero vitae officia dolorem commodi deserunt sint tempora enim ut laboriosam praesentium, nisi eum! Possimus velit pariatur harum quod vel. A veritatis suscipit pariatur recusandae, magnam, incidunt iusto architecto id optio nemo placeat ullam explicabo quibusdam earum repellat exercitationem asperiores! Fugiat eligendi enim impedit quam architecto reiciendis eius quibusdam ex officiis iste culpa repellendus quas porro iusto non tenetur, veritatis, dignissimos excepturi? Corrupti necessitatibus cum nesciunt sit, dolor odit commodi consectetur optio quae! Delectus voluptatem quis id inventore!</p>
                </div>
            </div>
        </div>
    </div>
</div>