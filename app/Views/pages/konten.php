<?= $this->extend('templates/base'); ?>
<?= $this->section('content'); ?>
<main class="main-content">
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-4 order-last">
                    <aside class="sidebar">
                        <div class="accordion" id="accordion">
                            <h5 class="heading">Page Title</h5>
                            <ul class="accordionParent">
                                <li class="accordionParentItem" role="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><a href="#">Menu 1</a> <i class="fas fa-sort-down float-right"></i></li>
                                <ul id="collapseOne" class="collapse accordionChild show" data-parent="#accordion">
                                    <li><a href="#">Submenu 1</a></li>
                                    <li><a href="#">Submenu 2</a></li>
                                    <li><a href="#">Submenu 3</a></li>
                                </ul>
                                <li class="accordionParentItem collapsed" role="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><a href="#">Menu 2</a> <i class="fas fa-sort-down float-right"></i></li>
                                <ul id="collapseTwo" class="collapse accordionChild" data-parent="#accordion">
                                    <li><a href="#">Submenu 1</a></li>
                                    <li><a href="#">Submenu 2</a></li>
                                    <li><a href="#">Submenu 3</a></li>
                                </ul>
                                <li>Menu 3</li>
                                <li>Menu 4</li>
                            </ul>
                        </div>
                    </aside>
                </div>
                <div class="col-md-8">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                        <li class="breadcrumb-item"><a href="#">Berita</a></li>
                        <li class="breadcrumb-item active"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut pariatur reiciendis assumenda!</a></li>
                    </ol>
                    <h3 class="berita-title heading">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores, provident?</h3>
                    <ul class="berita-meta list-inline">
                        <li class="berita-created list-inline-item">Minggu, 21 Juni 1998</li>
                        <li class="berita-author list-inline-item">Oleh : Ilham</li>
                        <li class="berita-seen list-inline-item">Dilihat : 27</li>
                    </ul>
                    <div class="berita-content">
                        <figure class="figure">
                            <img src="<?php base_url(); ?>/public/img/test.jpeg" class="figure-img img-fluid" alt="...">
                            <figcaption class="figure-caption text-right">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, maxime?</figcaption>
                        </figure>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus vitae quibusdam iste, qui, beatae fugiat sit repudiandae voluptates quas architecto aliquid nam dolor laudantium at, molestiae cum ipsa maiores quidem excepturi sed? Ut commodi nulla suscipit consequatur, eveniet est, necessitatibus praesentium labore aperiam tenetur earum ratione illum repudiandae inventore. Veritatis.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum animi voluptates est autem alias aspernatur repellat accusamus repudiandae laborum molestiae ex eligendi, nam rerum voluptatem ea culpa magnam. Nulla officiis temporibus repellat. Laboriosam, consequatur perspiciatis quod mollitia vero earum iusto sapiente architecto ex laborum sit rem ullam? Dolor, ad neque?</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum animi voluptates est autem alias aspernatur repellat accusamus repudiandae laborum molestiae ex eligendi, nam rerum voluptatem ea culpa magnam. Nulla officiis temporibus repellat. Laboriosam, consequatur perspiciatis quod mollitia vero earum iusto sapiente architecto ex laborum sit rem ullam? Dolor, ad neque?</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum animi voluptates est autem alias aspernatur repellat accusamus repudiandae laborum molestiae ex eligendi, nam rerum voluptatem ea culpa magnam. Nulla officiis temporibus repellat. Laboriosam, consequatur perspiciatis quod mollitia vero earum iusto sapiente architecto ex laborum sit rem ullam? Dolor, ad neque?</p>
                    </div>

                </div>
            </div>
        </div>
    </section>
</main>
<!-- end of MAIN CONTENT -->
<?= $this->endSection(); ?>