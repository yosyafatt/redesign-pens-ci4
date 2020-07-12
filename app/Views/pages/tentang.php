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
                <div class="col-md-4">
                    <aside class="sidebar">
                        <h5 class="heading">Tentang PENS</h5>
                        <ul>
                            <li><a href="">Sejarah PENS</a></li>
                            <li><a href="">Hymne PENS</a></li>
                            <li><a href="">Visi dan Misi</a></li>
                            <li><a href="">Struktur Organisasi</a></li>
                            <li><a href="">Peraturan Akademik</a></li>
                            <li><a href="">Kalender Akademik</a></li>
                            <li><a href="">Akses Menuju Kampus</a></li>
                            <li><a href="">Pedoman Sistem Identitas</a></li>
                        </ul>
                    </aside>
                </div>
                <div class="col-md-8">
                    <!-- <h3 class="berita-title heading text-center">Sejarah PENS</h3> -->

                    <div class="berita-content">
                        <figure class="figure">
                            <img src="<?= base_url(); ?>/public/img/tentang-pens.jpg" class="figure-img img-fluid" alt="...">
                            <figcaption class="figure-caption text-right">Gedung D4 PENS</figcaption>
                        </figure>
                        <p>Awal sejarah PENS dimulai pada tahun 1985. Saat itu, tim studi awal Japan International Cooperation Agency (JICA) untuk bantuan dan kerjasama teknik yang dikepalai oleh Prof. Y. Naito dari Tokyo Institute of Technology, datang ke politeknik ini. Setelah melakukan pengamatan dan studi kelayakan di tahun 1986, JICA menyetujui untuk memulai kerjasama teknik di tahun 1987 dengan mengirim 5 orang pengajar Indonesia ke perguruan tinggi teknologi di Jepang...
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?= $this->endSection(); ?>