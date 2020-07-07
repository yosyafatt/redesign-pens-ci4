<?= $this->extend('admin/base'); ?>

<?= $this->section('content'); ?>
<div class="row">
    <div class="col">
        <h3 class="mb-4">List Berita</h3>
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
    <tbody>
        <?php foreach ($berita as $b) : ?>
            <tr>
                <td class="text-center"><img src="/public/uploads/<?= $b['img']; ?>" alt="" width="100"></td>
                <td><?= $b['title']; ?></td>
                <td class="text-right"><?= $b['author']; ?></td>
                <td class="overflow-hidden"><?= $b['content'] == true ? 'oke' : ''; ?></td>
                <td class="text-center"><a href="<?= base_url(); ?>/admin/delberita/<?= $b['id']; ?>" class="text-danger text-decoration-none"><i data-feather='trash'></i></a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>



<?= $this->endSection(); ?>