<?= $this->extend('admin/base'); ?>

<?= $this->section('content'); ?>
<div class="row">
    <div class="col">
        <h3 class="mb-4">List Pengumuman</h3>
    </div>
    <div class="col">
        <?php if (session()->getFlashdata('status')) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= session()->getFlashdata('status'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
    </div>
</div>


<table class="table table-sm table-hover">
    <thead>
        <tr class="text-center">
            <th scope="col">Gambar</th>
            <th scope="col">Judul</th>
            <th scope="col">Penulis</th>
            <th scope="col">Artikel</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <!--  -->
</table>



<?= $this->endSection(); ?>