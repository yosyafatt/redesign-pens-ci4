<?= $this->extend('templates/base'); ?>
<?= $this->section('content'); ?>
<main class="main-content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url(); ?>/pages/berita">Berita</a></li>
                    <li class="breadcrumb-item active"><a href="<?= current_url(); ?>"><?= $berita['title']; ?></a></li>
                </ol>
                <h3 class="berita-title heading"><?= $berita['title']; ?></h3>
                <ul class="berita-meta list-inline">
                    <li class="berita-created list-inline-item"><?= $berita['created_at']; ?></li>
                    <li class="berita-author list-inline-item">Oleh : <?= $berita['author']; ?></li>
                    <li class="berita-seen list-inline-item">Dilihat : 27</li>
                </ul>
                <div class="berita-content">
                    <figure class="figure">
                        <img src="<?= base_url(); ?>/public/uploads/<?= $berita['img']; ?>" class="figure-img img-fluid" alt="...">
                        <figcaption class="figure-caption text-right"><?= $berita['slug']; ?></figcaption>
                    </figure>
                    <?= $berita['content']; ?>
                </div>

            </div>
        </div>
    </div>
</main>
<!-- end of MAIN CONTENT -->
<?= $this->endSection(); ?>