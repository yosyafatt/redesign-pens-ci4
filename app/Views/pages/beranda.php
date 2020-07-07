<?= $this->extend('templates/base'); ?>

<?= $this->section('content'); ?>
<!-- CAROUSEL -->
<div class="carousel slide" id="mainCarousel" data-ride="carousel">
    <div class="carousel-inner">
        <ol class="carousel-indicators">
            <li data-target="#mainCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#mainCarousel" data-slide-to="1"></li>
            <li data-target="#mainCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-item active" data-interval="5000">
            <img src="<?= base_url(); ?>/public/img/carousel/3.jpg" alt="" class="d-block">
        </div>
        <div class="carousel-item" data-interval="3000">
            <img src="<?= base_url(); ?>/public/img/carousel/1.jpg" alt="" class="d-block">
        </div>
        <div class="carousel-item" data-interval="3000">
            <img src="<?= base_url(); ?>/public/img/carousel/2.jpg" alt="" class="d-block">
        </div>
    </div>
</div>
<!-- end of CAROUSEL -->

<!-- SECTIONS -->
<!-- Sub-section : Penerimaan Mhs Baru -->
<div class="sub-section" id="penerimaan">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="heading text-white">Penerimaan<br>Mahasiswa Baru</h1>
            </div>
            <div class="col my-auto">
                <a href="pmb.pens.ac.id" class="btn btn-lg shadow-sm btn-custom" role="button">Lihat Selengkapnya<i class="fas fa-arrow-right ml-5"></i></a>
            </div>
        </div>

    </div>
</div>
<!-- end of Sub-section : Penerimaan Mhs Baru -->
<!-- #BERITA -->
<section class="beranda" id="berita">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1 class="heading mb-4">Pemberitahuan</h1>
                <div class="container berita-carousel owl-carousel owl-theme">
                    <?php foreach ($berita as $b) : ?><div class="item">
                            <div class="card mb-3">
                                <div class="row no-gutters">
                                    <div class="col-md-8">
                                        <img src="<?= base_url(); ?>/public/uploads/<?= $b['img']; ?>" class="card-img" alt="...">
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card-body">
                                            <h5 class="heading card-title"><?= $b['title']; ?></h5>
                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            <p class="card-text"><small class="text-muted"><?= $b['created_at']; ?></small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="listberita">
                    <h4 class="heading mb-3">Berita Terkini</h4>
                    <ul class="list-unstyled">
                        <?php foreach ($berita as $b) : ?>
                            <li class="media my-3">
                                <img src="<?= base_url(); ?>/public/uploads/<?= $b['img']; ?>" class="mr-3" alt="...">
                                <div class="media-body">
                                    <a href="" class="text-decoration-none">
                                        <h6 class="heading mt-0 mb-1"><?= $b['title']; ?></h5>
                                    </a>
                                    <small><?= $b['created_at']; ?> / <?= $b['author']; ?></small>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of #BERITA -->

<!-- Sub-section : Poster -->
<div class="sub-section text-center" id="poster">
    <div class="container mb-5">
        <h2 class="heading text-white">Poster</h2>
    </div>
    <div class="container poster-carousel owl-carousel owl-theme">
        <div class="item">
            <img src="<?= base_url(); ?>/public/img/poster/1.png" alt="">
        </div>
        <div class="item">
            <img src="<?= base_url(); ?>/public/img/poster/2.png" alt="">
        </div>
        <div class="item">
            <img src="<?= base_url(); ?>/public/img/poster/3.png" alt="">
        </div>
        <div class="item">
            <img src="<?= base_url(); ?>/public/img/poster/4.png" alt="">
        </div>
    </div>
</div>
<!-- end of Sub-section : Penerimaan Mhs Baru -->

<!-- #AKADEMIK -->
<section class="beranda akademik" id="akademik">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="<?= base_url(); ?>/public/img/mhs2.jpg" class="mb-5" alt="">
                <h1 class="heading">Program Studi</h1>
                <div class="row">
                    <div class="col-10">
                        <p class="text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat ab quisquam incidunt labore laboriosam iusto commodi itaque at ad facere! Voluptatum delectus harum vero obcaecati velit! Animi consequatur maxime laudantium.</p>
                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <h4 class="heading card-title">Diploma III</h4>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <h4 class="heading card-title">Sarjana Terapan</h4>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="heading card-title">Pascasarjana</h4>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of #AKADEMIK -->

<!-- Sub-section : StayConnected -->
<div class="sub-section" id="stayconnected">
    <div class="container">
        <div class="row">
            <div class="col my-auto">
                <h1 class="heading"><span class="heading text-white">#</span>StayConnected</h1>
            </div>
            <div class="d-flex col my-auto justify-content-end">
                <a href="" class="btn btn-lg text-white"><span class="fab fa-youtube"></span></a>
                <a href="" class="btn btn-lg text-white"><span class="fab fa-twitter"></span></a>
                <a href="" class="btn btn-lg text-white"><span class="fab fa-facebook-square"></span></a>
                <a href="" class="btn btn-lg text-white"><span class="fab fa-instagram"></span></a>
            </div>
        </div>

    </div>
</div>
<!-- end of Sub-section : StayConnected -->

<!-- #Agenda -->
<section class="beranda agenda" id="agenda">
    <div class="container">
        <h1 class="heading">Agenda</h1>
        <div class="row">
            <div class="col">

            </div>
        </div>
    </div>
</section>
<!-- end of #Agenda -->

<!-- end of SECTIONS -->
<?= $this->endSection(); ?>