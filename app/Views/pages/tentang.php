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
            <div class="row justify-content-center">
                <div class="col-5 text-center">
                    <!-- <img width='320' src="/public/img/corp-logo/primary-logo.svg" alt=""> -->
                    <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=112.79214620590211%2C-7.278054046179066%2C112.79625535011293%2C-7.274797461720949&amp;layer=mapnik&amp;marker=-7.276425756904272%2C112.79420077800751" style="border: 1px solid black"></iframe><br /><small><a href="https://www.openstreetmap.org/?mlat=-7.27643&amp;mlon=112.79420#map=18/-7.27643/112.79420">Lihat peta lebih besar</a></small>
                </div>
            </div>
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