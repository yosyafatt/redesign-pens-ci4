<?= $this->extend('templates/base'); ?>

<?= $this->section('content'); ?>
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h1 class="heading text-white">
                    Departemen Teknik Mekanika dan Energi
                </h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url(); ?>/pages/akademik">Akademik</a></li>
                    <li class="breadcrumb-item active"><a href="<?= base_url(); ?>/pages/akademik">Program Akademik</a></li>
                </ol>
            </div>
            <div class="col-md-8">
                <img src="<?= base_url(); ?>/public/img/mhs2.jpg" style="object-position: bottom;" alt="">
            </div>
        </div>
    </div>
</section>

<main class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-4 order-last">
                <aside class="sidebar">
                    <h5 class="heading">Akademik</h5>
                    <div class="accordion" id="accordion">
                        <ul class="accordionParent">
                            <li class="accordionParentItem" role="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Jurusan <i class="fas fa-sort-down float-right"></i>
                            </li>
                            <ul id="collapseOne" class="collapse accordionChild show" data-parent="#accordion">
                                <li><a href="<?= base_url(); ?>/pages/akademik/jurusan-elka">Teknik Elektronika</a></li>
                                <li><a href="<?= base_url(); ?>/pages/akademik/jurusan-telkom">Teknik Telekomunikasi</a></li>
                                <li><a href="<?= base_url(); ?>/pages/akademik/jurusan-elin">Teknik Elektro Industri</a></li>
                                <li><a href="<?= base_url(); ?>/pages/akademik/jurusan-it">Teknik Informatika</a></li>
                                <li><a href="<?= base_url(); ?>/pages/akademik/jurusan-meka">Teknik Mekatronika</a></li>
                                <li><a href="<?= base_url(); ?>/pages/akademik/jurusan-tekkom">Teknik Komputer</a></li>
                                <li><a href="<?= base_url(); ?>/pages/akademik/jurusan-mmb">Teknologi Multimedia Broadcasting</a></li>
                                <li><a href="<?= base_url(); ?>/pages/akademik/jurusan-spe">Sistem Pembangkitan Energi</a></li>
                                <li><a href="<?= base_url(); ?>/pages/akademik/jurusan-game">Teknologi Game</a></li>

                            </ul>
                        </ul>
                        <ul class="accordionParent">
                            <li class="accordionParentItem" role="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                Program Studi <i class="fas fa-sort-down float-right"></i>
                            </li>
                            <ul id="collapseTwo" class="collapse accordionChild show" data-parent="#accordion">
                                <li><a href="<?= base_url(); ?>/pages/akademik/prodi-d3">Diploma III</a></li>
                                <li><a href="<?= base_url(); ?>/pages/akademik/prodi-d4">Sarjana Terapan</a></li>
                                <li><a href="<?= base_url(); ?>/pages/akademik/prodi-s2">Pascasarjana</a></li>
                            </ul>
                        </ul>
                        <ul class="accordionParent">
                            <li class="accordionParentItem" role="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                Jalur Penerimaan <i class="fas fa-sort-down float-right"></i>
                            </li>
                            <ul id="collapseThree" class="collapse accordionChild" data-parent="#accordion">
                                <li><a href="https://pmb.pens.ac.id/index.php/snmpn">SNMPN</a></li>
                                <li><a href="https://pmb.pens.ac.id/index.php/sbmpn">SBMPN</a></li>
                                <li><a href="https://pmb.pens.ac.id/index.php/simandiri">SIMANDIRI</a></li>
                                <li><a href="https://pmb.pens.ac.id/index.php/pascasarjana">Pascasarjana</a></li>
                                <li><a href="https://pmb.pens.ac.id/index.php/pjj">Pendidikan Jarak Jauh (PJJ)</a></li>
                                <li><a href="https://pmb.pens.ac.id/index.php/psdku-pjj-pens">Program Studi Di Luar Kampus Utama (PSDKU - PJJ)</a></li>
                                <li><a href="https://pmb.pens.ac.id/index.php/lanjut-jenjang-d4">Lanjut Jenjang D4</a></li>
                                <li><a href="https://pmb.pens.ac.id/index.php/kerjasama-pln">Kerjasama Dinas PLN</a></li>
                            </ul>
                        </ul>
                        <ul class="accordionParent">
                            <li class="accordionParentItem" role="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                Departemen <i class="fas fa-sort-down float-right"></i>
                            </li>
                            <ul id="collapseFour" class="collapse accordionChild" data-parent="#accordion">
                                <li><a href="<?= base_url(); ?>/pages/akademik/dept-elektro">Dep. Teknik Elektro</a></li>
                                <li><a href="<?= base_url(); ?>/pages/akademik/dept-tik">Dep. Teknik Informatika dan Komputer</a></li>
                                <li><a href="<?= base_url(); ?>/pages/akademik/dept-mekanergi">Dep. Teknik Mekanika dan Energi</a></li>
                                <li><a href="<?= base_url(); ?>/pages/akademik/dept-multimedia">Dep. Teknologi Multimedia Kreatif</a></li>
                                <li><a href="https://pascasarjana.pens.ac.id/">Pascasarjana</a></li>
                            </ul>
                        </ul>
                    </div>
                </aside>
            </div>
            <div class="col-md-8">
                <div class="akademik-content">
                    Departemen Teknik Mekanika Energi (DTME) merupakan departemen yang terdiri dari dua program studi, yaitu Sarjana Terapan Teknik Mekatronika dan Sarjana Terapan Sistem Pembangkit Energi. Departemen ini telah ada sejak tahun 2011. Mahasiswa program studi ini telah menorehkan banyak prestasi salah satunya yakni sebagai perwakilan Indonesia di ajang World Skill Competition yang terlaksana di Abu Dhabi, Uni Emirat Arab. Teknik Mekatronika dapat dikatakan sebagai sinergis IPTEK teknik mesin, teknik elektronika, Teknik informatika dan teknik pengaturan (atau teknik kendali) untuk merancang, membuat atau memproduksi, mengoperasikan dan memelihara sebuah sistem untuk mencapai tujuan yang diinginkan. Sedangkan Sistem Pembangkit Energi merupakan suatu program studi yang mempelajari bagaimana caranya mempertahankan dan mencari energi.
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="heading">Jurusan</h5>
                                    <ul class="list-unstyled ml-2">
                                        <li><a href="<?= base_url(); ?>/pages/akademik/jurusan-meka" class="card-link">Teknik Mekatronika</a></li>
                                        <li><a href="<?= base_url(); ?>/pages/akademik/jurusan-spe" class="card-link">Sistem Pembangkit Energi</a></li>
                                    </ul>
                                </div>
                                <div class="col"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?= $this->endSection(); ?>