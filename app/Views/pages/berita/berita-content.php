<?= $this->extend('templates/base'); ?>
<?= $this->section('content'); ?>
<main class="main-content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url(); ?>/pages/berita">Berita</a></li>
                    <li class="breadcrumb-item active"><a href="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut pariatur reiciendis assumenda!</a></li>
                </ol>
                <h3 class="berita-title heading">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores, provident?</h3>
                <ul class="berita-meta list-inline">
                    <li class="berita-created list-inline-item">Minggu, 21 Juni 1998</li>
                    <li class="berita-author list-inline-item">Oleh : Ilham</li>
                    <li class="berita-seen list-inline-item">Dilihat : 27</li>
                </ul>
                <div class="berita-content">
                    <figure class="figure">
                        <img src="/assets/test.jpeg" class="figure-img img-fluid" alt="...">
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
</main>
<!-- end of MAIN CONTENT -->
<?= $this->endSection(); ?>