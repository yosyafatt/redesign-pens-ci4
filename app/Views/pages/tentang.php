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
                <img src="<?= base_url(); ?>/img/carousel/3.jpg" alt="">
            </div>
        </div>
    </div>
</section>

<main class="main-content">
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6" style="background-color: aqua;"></div>
                <div class="col-5 d-flex">
                    <img class="align-middle" width='320' src="<?= base_url(); ?>/img/corp-logo/primary-logo.svg" alt="">
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
                            <img src="<?= base_url(); ?>/img/tentang-pens.jpg" class="figure-img img-fluid" alt="...">
                            <figcaption class="figure-caption text-right">Gedung D4 PENS</figcaption>
                        </figure>
                        <p>Awal sejarah PENS dimulai pada tahun 1985. Saat itu, tim studi awal Japan International Cooperation Agency (JICA) untuk bantuan dan kerjasama teknik yang dikepalai oleh Prof. Y. Naito dari Tokyo Institute of Technology, datang ke politeknik ini. Setelah melakukan pengamatan dan studi kelayakan di tahun 1986, JICA menyetujui untuk memulai kerjasama teknik di tahun 1987 dengan mengirim 5 orang pengajar Indonesia ke perguruan tinggi teknologi di Jepang.
                        </p>
                        <p>
                            <strong>Politeknik Elektronika & Telekomunikasi (PET) 1988 – 1992</strong><br />
                            Pada tanggal 15 Maret 1988, Pemerintah Jepang, melalui JICA secara resmi memberikan gedung kampus kepada pemerintah Indonesia lengkap dengan berbagai peralatan pendidikan. Selanjutnya pada tanggal 2 Juni 1988 Politeknik ini diresmikan dengan nama “Politeknik Elektronika & Telekomunikasi (PET)” dan sejak saat itulah tahun ajaran dimulai. Kerjasama dengan JICA pun berlanjut dengan banyaknya pengajar politeknik yang dikirim ke berbagai perguruan tinggi teknologi di Jepang dan sebaliknya, pengiriman beberapa ahli dari Jepang ke politeknik ini.
                        </p>
                        <p>
                            <strong>Politeknik Elektronik Surabaya (PES) 1992 – 1996</strong><br />
                            Pada bulan Juni 1991, Menteri Pendidikan dan Kebudayaan menata ulang keberadaan seluruh Politeknik, Institut dan sebagian Universitas di Indonesia. Pada saat itu politeknik ini pun berubah nama menjadi “Politeknik Elektronika Surabaya (PES)” yang merupakan bagian dari Institut Teknologi Sepuluh Nopember Surabaya (ITS).
                        </p>
                        <p>
                            <strong>Politeknik Elektronika Negeri Surabaya (PENS) 1996 hingga sekarang</strong><br>
                            Pada tahun 1996, nama politeknik ini kembali diubah oleh Menteri Pendidikan dan Kebudayaan menjadi “Politeknik Elektronika Negeri Surabaya (PENS)”. Nama itulah yang kemudian tetap bertahan hingga kini.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?= $this->endSection(); ?>