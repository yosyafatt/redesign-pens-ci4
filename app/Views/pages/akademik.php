<?= $this->extend('templates/base'); ?>

<?= $this->section('content'); ?>
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h1 class="heading text-white">
                    Akademik
                </h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Beranda</a></li>
                    <li class="breadcrumb-item active"><a href="<?= base_url(); ?>/pages/akademik">Akademik</a></li>
                </ol>
            </div>
            <div class="col-md-8">
                <img src="<?= base_url(); ?>/img/mhs2.jpg" style="object-position: bottom;" alt="">
            </div>
        </div>
    </div>
</section>

<main class="main-content akademik-page">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h3 class="heading card-title">Diploma III</h3>
                        <p class="card-text">Lulusannya dari jenjang D3 akan memiliki gelar A.Md atau Ahli Madya dengan menempuh pendidikan selama 3 tahun atau setidaknya 112 SKS.</p>
                        <div>
                            <a href="#" class="btn shadow-sm btn-custom">Selengkapnya <span class="ml-4"><i class="fas fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h3 class="heading card-title">Sarjana Terapan</h3>
                        <p class="card-text"> Sarjana Terapan kerap disebut juga Diploma 4. Bedanya Sarjana Terapan lebih mempelajari ilmu-ilmu praktik atau ilmu-ilmu terapan. Lulusannya akan mendapat gelar S.Tr.Kom.</p>
                        <div>
                            <a href="#" class="btn shadow-sm btn-custom">Selengkapnya <span class="ml-4"><i class="fas fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h3 class="heading card-title">Pascasarjana</h3>
                        <p class="card-text">Menjadi politeknik yang memulai program Pascasarjana Terapan pertama di Indonesia. PENS, sebagai awalannya membuka Progam Studi Teknik Elektro serta Teknik Informatika dan Komputer</p>
                        <div>
                            <a href="#" class="btn shadow-sm btn-custom">Selengkapnya <span class="ml-4"><i class="fas fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<section class="sub-section my-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col text-center">
                <h2 class="heading text-white mb-3">Jurusan</h2>
                <div class="jurusan-carousel owl-carousel owl-theme ">
                    <div class="jurusan-carousel-item rounded-pill">
                        <p>Teknik Elektronika</p>
                    </div>
                    <div class="jurusan-carousel-item rounded-pill">
                        <p>Teknik Telekomunikasi</p>
                    </div>
                    <div class="jurusan-carousel-item rounded-pill">
                        <p>Teknik Elektro Industri</p>
                    </div>
                    <div class="jurusan-carousel-item rounded-pill">
                        <p>Teknik Informatika</p>
                    </div>
                    <div class="jurusan-carousel-item rounded-pill">
                        <p>Teknik Komputer</p>
                    </div>
                    <div class="jurusan-carousel-item rounded-pill">
                        <p>Teknik Mekatronika</p>
                    </div>
                    <div class="jurusan-carousel-item rounded-pill">
                        <p>Sistem Pembangkit Energi</p>
                    </div>
                    <div class="jurusan-carousel-item rounded-pill">
                        <p>Teknologi Multimedia dan Broadcasting</p>
                    </div>
                    <div class="jurusan-carousel-item rounded-pill">
                        <p>Teknologi Game</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<main class="akademik-page akademik-program-lain mb-5">
    <div class="container">
        <h2 class="heading text-center mb-3">Program Akademik Lain</h2>
        <div class="row justify-content-center">
            <div class="col-5">
                <div class="list-group">
                    <a href="" class="list-group-item">D3 Kerjasama PLN</a>
                    <a href="" class="list-group-item">D4 Ikatan Dinas PLN</a>
                    <a href="" class="list-group-item">D4 Lanjut Jenjang (LJ) Teknik Elektro</a>
                    <a href="" class="list-group-item">D4 Lanjut Jenjang (LJ) Teknik Telekomunikasi</a>
                    <a href="" class="list-group-item">D4 Lanjut Jenjang (LJ) Teknik Elektro Industri</a>
                    <a href="" class="list-group-item">D4 Lanjut Jenjang (LJ) Teknik Informatika</a>
                </div>
            </div>
            <div class="col-5">
                <div class="list-group">
                    <a href="" class="list-group-item">D3 PSDKU PJJ Teknik Informatika</a>
                    <a href="" class="list-group-item">D3 PSDKU PJJ Teknologi Multimedia Broadcasting</a>
                    <a href="" class="list-group-item">D4 LJ PJJ Teknik Telekomunikasi - Poltekbang</a>
                    <a href="" class="list-group-item">D3 PJJ Teknik Informatika</a>
                    <a href="" class="list-group-item">D4 PJJ Teknik Telekomunikasi</a>
                    <a href="" class="list-group-item">D3 PJJ Teknik Informatika - SEAMEO</a>
                    <a href="" class="list-group-item">D3 LJ PJJ Teknik Informatika dari D2 Akademi Komunitas</a>
                </div>
            </div>
        </div>
    </div>
</main>
<?= $this->endSection(); ?>