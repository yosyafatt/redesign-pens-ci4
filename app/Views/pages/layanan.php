<?= $this->extend('templates/base'); ?>

<?= $this->section('content'); ?>

<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h1 class="heading text-white">
                    Layanan
                </h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Beranda</a></li>
                    <li class="breadcrumb-item active"><a href="#">Layanan</a></li>
                </ol>
            </div>
            <div class="col-md-8">
                <img src="<?= base_url(); ?>/public/img/gedungd4.jpg" alt="">
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
                        <h5 class="heading">Layanan</h5>
                        <div class="accordion" id="accordion">
                            <ul class="accordionParent">
                                <li class="accordionParentItem" role="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Mahasiswa <i class="fas fa-sort-down float-right"></i>
                                </li>
                                <ul id="collapseOne" class="collapse accordionChild show" data-parent="#accordion">
                                    <li><a href="#">Portal Mahasiswa</a></li>
                                    <li><a href="#">Online MIS</a></li>
                                    <li><a href="#">E-Learning</a></li>
                                    <li><a href="#">Form Kelengkapan Tugas Akhir</a></li>
                                    <li><a href="#">Form Kelengkapan Bebas Pinjam Lab dan Perpustakaan</a></li>
                                    <li><a href="#">Job Arrangement System</a></li>
                                    <li><a href="#">Himpunan Mahasiswa</a></li>
                                </ul>
                            </ul>
                            <ul class="accordionParent">
                                <li class="accordionParentItem" role="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    Dosen <i class="fas fa-sort-down float-right"></i>
                                </li>
                                <ul id="collapseTwo" class="collapse accordionChild" data-parent="#accordion">
                                    <li><a href="#">Portal Dosen</a></li>
                                    <li><a href="#">Dosen Jaga</a></li>
                                    <li><a href="#">ETHOL</a></li>
                                </ul>
                            </ul>
                            <ul class="accordionParent">
                                <li class="accordionParentItem" role="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                    Unit <i class="fas fa-sort-down float-right"></i>
                                </li>
                                <ul id="collapseThree" class="collapse accordionChild" data-parent="#accordion">
                                    <li><a href="#">Badan Eksekutif Mahasiswa</a></li>
                                    <li><a href="#">Pusat Jaminan Mutu</a></li>
                                    <li><a href="#">Pusat Perencanaan dan Pengembangan</a></li>
                                    <li><a href="#">Kemahasiswaan</a></li>
                                    <li><a href="#">P3M</a></li>
                                    <li><a href="#">Pusat Bahasa (PLCC)</a></li>
                                    <li><a href="#">Jaringan Komputer (NOC)</a></li>
                                    <li><a href="#">Electronic Data Processing (EDP)</a></li>
                                    <li><a href="#">PENS International Cooperation Office (PICO)</a></li>
                                    <li><a href="#">Inkubator Bisnis - PENS Sky Venture</a></li>
                                    <li><a href="#">Koperasi KDH</a></li>
                                    <li><a href="#">Redaksiana PENS</a></li>
                                </ul>
                            </ul>
                        </div>
                        <ul>
                            <li><a href="">PENS Information System</a></li>
                            <li><a href="">Industrial Electronics Seminar (IES)</a></li>
                            <li><a href="">Repositori PENS</a></li>
                            <li><a href="">EMITTER Int. Journal of Eng. Tech.</a></li>
                            <li><a href="">Surat Menteri PAN RB RI</a></li>
                        </ul>
                    </aside>
                </div>
                <div class="col-md-8">
                    <h3 class="berita-title heading text-center">Layanan</h3>

                </div>
            </div>
        </div>
    </section>
</main>

<?= $this->endSection(); ?>