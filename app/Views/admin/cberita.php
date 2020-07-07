<?= $this->extend('admin/base'); ?>

<?= $this->section('content'); ?>
<h3>Tambah Berita</h3>
<form action="<?= base_url(); ?>/admin/saveberita" method="post" autocomplete="off" enctype="multipart/form-data">
    <?= csrf_field(); ?>
    <div class="form-row">
        <div class="form-group col">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul Berita" autofocus>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col">
            <label for="author">Penulis</label>
            <input type="text" class="form-control" name="author" id="author" placeholder="Penulis" value="Reporter PENS">
        </div>
        <div class="form-group col">
            <label for="image">Gambar</label>
            <input type="file" class="form-control-file" name="image" id="image">
        </div>
    </div>
    <div class="form-group">
        <label for="artikelberita">Artikel</label>
        <textarea class="form-control" id="artikelberita" name="artikelberita" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
</form>
<?= $this->endSection(); ?>