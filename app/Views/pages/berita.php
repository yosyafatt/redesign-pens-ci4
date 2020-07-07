<?= $this->extend('templates/base'); ?>

<?= $this->section('content'); ?>

<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h1 class="heading text-white">
                    Berita
                </h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="#">Berita</a></li>
                </ol>
            </div>
            <div class="col-md-8">
                <div class="carousel slide" id="carouselBerita" data-ride="carousel">
                    <div class="carousel-inner">
                        <ol class="carousel-indicators">
                            <?php for ($i = 0; $i < 5; $i++) : ?>
                                <li data-target="#carouselBerita" data-slide-to="<?= $i; ?>" class="<?= $i == 0 ? 'active' : ''; ?>"></li>
                            <?php endfor; ?>
                        </ol>
                        <?php
                        $i = 0;
                        foreach ($berita as $b) : ?>
                            <?php if ($i < 5) : ?>
                                <div class="carousel-item <?= $i == 0 ? 'active' : ''; ?>" data-interval="5000">
                                    <img src="<?= base_url(); ?>/uploads/<?= $b['img']; ?>" alt="" class="d-block">
                                </div>
                            <?php
                                $i++;
                            endif;
                            ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<main class="main-content berita">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-8">
                <section>
                    <h3 class="heading mb-4">Berita Terkini</h3>
                    <div class="row row-cols-3">
                        <?php $i = 0;
                        foreach ($berita as $b) : ?>
                            <?php if ($i < 6) : ?>
                                <div class="col mb-4">
                                    <div class="card">
                                        <img src="<?= base_url(); ?>/uploads/<?= $b['img']; ?>" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <a href="" class="text-decoration-none">
                                                <h6 class="heading card-title"><?= $b['title']; ?></h5>
                                            </a>
                                            <p class="card-text">
                                                <small class="text-muted"><?= $b['created_at']; ?></small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php $i++;
                            endif; ?>
                        <?php endforeach; ?>
                    </div>
                </section>
                <section class="mt-5">
                    <h3 class="heading mb-4">PENS TV</h3>
                    <div class="container">
                        <div class="row">
                            <iframe width="1079" height="608" src="https://www.youtube.com/embed/Pn6NyAUHjmE?list=PL2UaUoZhoS4UKDhjuGZ3sLGQ7Va7ZmNjc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </section>
            </div>

            <div class="col-md-4 pr-0">
                <section class="mb-4">
                    <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active heading" id="agenda-tab" data-toggle="tab" href="#agenda-tab-content" role="tab" aria-controls="agenda-tap-content" aria-selected="true">Agenda</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link heading" id="pengumuman-tab" data-toggle="tab" href="#pengumuman-tab-content" role="tab" aria-controls="pengumuman-tab-content" aria-selected="false">Pengumuman</a>
                        </li>
                    </ul>
                    <div class="tab-content text-white text-center" id="myTabContent">
                        <div class="tab-pane fade show active" id="agenda-tab-content" role="tabpanel" aria-labelledby="agenda-tab">
                            <p class="pt-5">Tidak ada agenda</p>
                        </div>
                        <div class="tab-pane fade" id="pengumuman-tab-content" role="tabpanel" aria-labelledby="pengumuman-tab">
                            <p class="pt-5">Tidak ada pengumuman</p>
                        </div>
                    </div>
                </section>
                <section class="berita arsip-berita">
                    <h4 class="heading">Arsip Berita</h4>
                    <ul class="list-group list-group-flush">
                        <a href="#" class="list-group-item list-group-item-action">
                            Juni 2020 <span class="badge badge-pill">9</span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            Mei 2020 <span class="badge badge-pill">14</span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            April 2020 <span class="badge badge-pill">11</span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            Maret 2020 <span class="badge badge-pill">8</span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            Februari 2020 <span class="badge badge-pill">18</span>
                        </a>
                    </ul>
                </section>
                <section class="berita listberita mt-4">
                    <h4 class="heading mb-3">Berita Terkini</h4>
                    <ul class="list-unstyled">
                        <?php $i = 0; ?>
                        <?php foreach ($berita as $b) : ?>
                            <?php if ($i++ == 4) break; ?>
                            <li class="media my-3">
                                <img src="<?= base_url(); ?>/uploads/<?= $b['img']; ?>" class="mr-3" alt="...">
                                <div class="media-body">
                                    <a href="" class="text-decoration-none">
                                        <h6 class="heading mt-0 mb-1"><?= $b['title']; ?></h5>
                                    </a>
                                    <small><?= $b['created_at']; ?> / <?= $b['author']; ?></small>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </section>
            </div>
        </div>
    </div>
</main>

<?= $this->endSection(); ?>