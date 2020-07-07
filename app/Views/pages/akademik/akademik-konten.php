<?= $this->extend('templates/base'); ?>

<?= $this->section('content'); ?>
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h1 class="heading text-white">
                    Diploma III
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
                                <li><a href="#">Teknik Elektronika</a></li>
                                <li><a href="#">Teknik Telekomunikasi</a></li>
                                <li><a href="#">Teknik Elektro Industri</a></li>
                                <li><a href="">Teknik Informatika</a></li>
                                <li><a href="">Teknik Mekatronika</a></li>
                                <li><a href="">Teknik Komputer</a></li>
                                <li><a href="">Teknologi Multimedia Broadcasting</a></li>
                                <li><a href="">Sistem Pembangkitan Energi</a></li>
                                <li><a href="">Teknologi Game</a></li>

                            </ul>
                        </ul>
                        <ul class="accordionParent">
                            <li class="accordionParentItem" role="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                Program Studi <i class="fas fa-sort-down float-right"></i>
                            </li>
                            <ul id="collapseTwo" class="collapse accordionChild show" data-parent="#accordion">
                                <li><a href="#">Diploma III</a></li>
                                <li><a href="#">Sarjana Terapan</a></li>
                                <li><a href="#">Pascasarjana</a></li>
                            </ul>
                        </ul>
                        <ul class="accordionParent">
                            <li class="accordionParentItem" role="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                Jalur Penerimaan <i class="fas fa-sort-down float-right"></i>
                            </li>
                            <ul id="collapseThree" class="collapse accordionChild" data-parent="#accordion">
                                <li><a href="#">SNMPN</a></li>
                                <li><a href="#">SBMPN</a></li>
                                <li><a href="#">SIMANDIRI</a></li>
                                <li><a href="#">Pascasarjana</a></li>
                                <li><a href="#">Pendidikan Jarak Jauh</a></li>
                                <li><a href="#">Kerjasama Dinas PLN</a></li>
                                <li><a href="#">Kerjasama Dinas GMF</a></li>
                            </ul>
                        </ul>
                        <ul class="accordionParent">
                            <li class="accordionParentItem" role="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                Departemen <i class="fas fa-sort-down float-right"></i>
                            </li>
                            <ul id="collapseFour" class="collapse accordionChild" data-parent="#accordion">
                                <li><a href="">Dep. Teknik Elektro</a></li>
                                <li><a href="">Dep. Teknik Informatika dan Komputer</a></li>
                                <li><a href="">Dep. Teknik Mekanika dan Energi</a></li>
                                <li><a href="">Dep. Teknologi Multimedia Kreatif</a></li>
                                <li><a href="<?= site_url(); ?>">Pascasarjana</a></li>
                            </ul>
                        </ul>
                    </div>
                </aside>
            </div>
            <div class="col-md-8">
                <div class="berita-content">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus vitae quibusdam iste, qui, beatae fugiat sit repudiandae voluptates quas architecto aliquid nam dolor laudantium at, molestiae cum ipsa maiores quidem excepturi sed? Ut commodi nulla suscipit consequatur, eveniet est, necessitatibus praesentium labore aperiam tenetur earum ratione illum repudiandae inventore. Veritatis.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum animi voluptates est autem alias aspernatur repellat accusamus repudiandae laborum molestiae ex eligendi, nam rerum voluptatem ea culpa magnam. Nulla officiis temporibus repellat. Laboriosam, consequatur perspiciatis quod mollitia vero earum iusto sapiente architecto ex laborum sit rem ullam? Dolor, ad neque?</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum animi voluptates est autem alias aspernatur repellat accusamus repudiandae laborum molestiae ex eligendi, nam rerum voluptatem ea culpa magnam. Nulla officiis temporibus repellat. Laboriosam, consequatur perspiciatis quod mollitia vero earum iusto sapiente architecto ex laborum sit rem ullam? Dolor, ad neque?</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum animi voluptates est autem alias aspernatur repellat accusamus repudiandae laborum molestiae ex eligendi, nam rerum voluptatem ea culpa magnam. Nulla officiis temporibus repellat. Laboriosam, consequatur perspiciatis quod mollitia vero earum iusto sapiente architecto ex laborum sit rem ullam? Dolor, ad neque?</p>
                </div>
            </div>
        </div>
    </div>
</main>
<?= $this->endSection(); ?>