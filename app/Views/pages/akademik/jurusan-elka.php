<?= $this->extend('templates/base'); ?>

<?= $this->section('content'); ?>
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h1 class="heading text-white">
                    Teknik Elektronika
                </h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url(); ?>/pages/akademik">Akademik</a></li>
                    <li class="breadcrumb-item active"><a href="<?= current_url(); ?>">Jurusan</a></li>
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
                                <li><a href="<?= base_url(); ?>/pages/akademik/dept-pasca">Pascasarjana</a></li>
                            </ul>
                        </ul>
                    </div>
                </aside>
            </div>
            <div class="col-md-8">
                <div class="akademik-content">
                    <h5 class="heading mb-3">Informasi Umum</h5>
                    <p>Politeknik Elektronika Negeri Surabaya didirikan pada tahun 1988, semula bernama Politeknik Elektronika dan Telekomunikasi dengan dua program pendidikan Diploma III yaitu jurusan Teknik Elektronika dan jurusan Teknik Telekomunikasi. Kemudian pada tahun 1992, namanya berubah menjadi Politeknik Elektronika Surabaya, dan berubah lagi menjadi Politeknik Elektronika Negeri Surabaya seperti sekarang ini sejak tahun 1996.Pada awal pendiriannya Jurusan Teknik Elektronika mencakup semua kompetensi bidang elektronika yang berupa penguasaan rekayasa elektronika, kontrol dan otomatisasi industri, bidang mekanik-robotika dan juga penguasaan keahlian power elektronik. Untuk meningkatkan profesionalitas, pada tahun 1992 jurusan Elektronika membentuk sebuah program studi Diploma III Teknik Listrik untuk mewadahi kualifikasi dan kompetensi power elektronik. Program studi baru ini memisahkan diri dari jurusan Elektronika dan membentuk jurusan baru Teknik Listrik pada tahun 1997.

                        Pada tahun 2004 Politeknik Elektronika Negeri Surabaya mendapatkan hibah dari pemerintah Jepang melalui lembaga Japan International Cooperation Agency (JICA) untuk menyelenggarakan program pendidikan Diploma IV. Maka berdirilah program studi Diploma IV Teknik Elektronika bersama dengan program – program studi Teknik Telekomunikasi, Teknik Listrik dan Teknik Informatika.Kemudian pada tahun 2006, jurusan Teknik Elektronika terbagi lagi dengan berdirinya program studi baru Teknik Mekatronika Diploma IV untuk mewadahi kualifikasi dan kompetensi di bidang mekanika-robotika.

                        Dan sekarang ini jurusan Teknik Elektronika terdiri atas Program Studi Diploma III Teknik Elektronika (masa studi 6 semester), Program Studi Diploma IV Teknik Elektronika (masa studi 8 semester) dan Program Studi Diploma IV Lanjut Jenjang Teknik Elektronika (masa studi 3 semester).

                        Ketiga Program studi ini menitikberatkan pada mutu lulusan yang kompeten dan memiliki kualifikasi di bidang rekayasa Elektronika dengan perbedaan pada taraf kemampuan analisa dan penyelesaian permasalahan yang lebih tinggi pada program Diploma IV dibandingkan Diploma III.</p>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="heading">Departemen</h5>
                                    <a href="<?= base_url(); ?>/pages/akademik/dept-elektro" class="card-link">Dept. Teknik Elektro</a>

                                    <h5 class="heading mt-2">Program Akademik</h5>
                                    <ul class="list-unstyled ml-2">
                                        <li><a href="<?= base_url(); ?>/pages/akademik/prodi-d3" class="card-link">Diploma III</a></li>
                                        <li><a href="<?= base_url(); ?>/pages/akademik/prodi-d4" class="card-link">Sarjana Terapan</a></li>
                                        <li><a href="https://pascasarjana.pens.ac.id" class="card-link">Pascasarjana</a></li>
                                    </ul>

                                    <h5 class="heading">Program Lainnya</h5>
                                    <ul class="list-unstyled ml-2">
                                        <li><a href="https://pmb.pens.ac.id/index.php/lanjut-jenjang-d4" class="card-link">D4 Lanjut Jenjang Teknik Elektronika</a></li>
                                    </ul>
                                </div>
                                <div class="col">
                                    <h5 class="heading">Situs Web</h5>
                                    <ul class="list-unstyled ml-2">
                                        <li><a href="https://elektronika.pens.ac.id" class="card-link">https://elektronika.pens.ac.id</a></li>
                                    </ul>
                                    <h5 class="heading">Himpunan Mahasiswa</h5>
                                    <ul class="list-unstyled ml-2">
                                        <li><a href="https://himaelka.pens.ac.id" class="card-link">Himaelka</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?= $this->endSection(); ?>