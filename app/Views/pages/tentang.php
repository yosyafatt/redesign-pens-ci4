<?= $this->extend('templates/base'); ?>

<?= $this->section('content'); ?>

<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h1 class="heading text-white">
                    Tentang <br /> PENS
                </h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Beranda</a></li>
                    <li class="breadcrumb-item active"><a href="#">Tentang PENS</a></li>
                </ol>
            </div>
            <div class="col-md-8">
                <img src="<?= base_url(); ?>/public/img/carousel/3.jpg" alt="">
            </div>
        </div>
    </div>
</section>

<main class="main-content">
    <section>
        <div class="container">

            <div class="row">
                <div class="col">
                    <figure class="figure">
                        <img src="<?= base_url(); ?>/public/img/tentang-pens.jpg" class="figure-img img-fluid" alt="...">
                        <figcaption class="figure-caption text-right">Gedung D4 PENS</figcaption>
                    </figure>
                </div>
                <div class="col">
                    <h1 class="heading mb-3">Selayang Pandang</h1>
                    <p>Awal sejarah PENS dimulai pada tahun 1985. Saat itu, tim studi awal Japan International Cooperation Agency (JICA) untuk bantuan dan kerjasama teknik yang dikepalai oleh Prof. Y. Naito dari Tokyo Institute of Technology, datang ke politeknik ini. Setelah melakukan pengamatan dan studi kelayakan di tahun 1986, JICA menyetujui untuk memulai kerjasama teknik di tahun 1987 dengan mengirim 5 orang pengajar Indonesia ke perguruan tinggi teknologi di Jepang.</p>
                    <div class="float-right">
                        <a href="<?= current_url(); ?>/sejarah-pens" class="btn shadow-sm btn-custom">Selengkapnya <span class="ml-4"><i class="fas fa-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?= $this->endSection(); ?>