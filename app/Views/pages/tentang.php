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
    <section class="mb-5">
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
    <section class="sub-section text-white">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1 class="heading-secondary">Visi</h1>
                    <p class="lead">Menjadi pusat unggulan pendidikan teknologi rekayasa di bidang emerging technology dalam skala nasional maupun internasional.</p>
                </div>
                <div class="col">
                    <h1 class="heading-secondary text-center">Misi</h1>
                    <ul>
                        <li>Menyelenggarakan pendidikan dengan menyediakan lingkungan dan suasana akademik yang berkualitas untuk menghasilkan lulusan yang profesional, berpikiran terbuka, kreatif dan berjiwa pemimpin, yang siap bersaing di era global.</li>
                        <li>Sebagai sumber daya politeknik nasional, berperan aktif dalam pengembangan dan peningkatan sistem pendidikan politeknik di Indonesia.</li>
                        <li>Melaksanakan penelitian yang berorientasi penemuan, pengembangan, kombinasi, atau integrasi dari beberapa teknologi yang sudah ada sebelumnya, menjadi teknologi baru yang membawa kemaslahatan masyarakat.</li>
                        <li>Membangun dan mengimplementasikan nilai-nilai etika moral akademis dan sosial masyarakat.</li>
                    </ul>
                </div>
            </div>
            <div class="row justify-content-center">
                <a href="<?= current_url(); ?>/visi-misi" class="btn shadow-sm btn-custom mt-5">Selengkapnya <span class="ml-4"><i class="fas fa-arrow-right"></i></span></a>
            </div>
        </div>
    </section>
    <section class="text-center my-5">
        <h1 class="heading mb-4">Peta Kampus</h1>
        <iframe width="800" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=112.79214620590211%2C-7.278054046179066%2C112.79625535011293%2C-7.274797461720949&amp;layer=mapnik&amp;marker=-7.276425756904272%2C112.79420077800751" style="border: 1px solid black"></iframe><br /><small><a href="https://www.openstreetmap.org/?mlat=-7.27643&amp;mlon=112.79420#map=18/-7.27643/112.79420">Lihat peta lebih besar</a></small>
    </section>
</main>

<?= $this->endSection(); ?>