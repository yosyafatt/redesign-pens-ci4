<?= $this->extend('admin/base'); ?>

<?= $this->section('content'); ?>
<h3>Tambah Pengumuman</h3>

<form action="<?= base_url(); ?>/admin/savepengumuman" autocomplete="off">
    <div class="form-row">
        <div class="form-group col">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul Berita">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col">
            <label for="author">Penulis</label>
            <input type="text" class="form-control" name="author" id="author" placeholder="Penulis">
        </div>
        <div class="form-group col">
            <label for="image">Gambar</label>
            <input type="file" class="form-control-file" name="image" id="image">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col">
            <label for="datepicker">Tanggal</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i data-feather='calendar'></i></div>
                </div>
                <input type="text" class="form-control" name="tanggal" id="datepicker" placeholder="Tanggal">
            </div>
        </div>
        <div class="col"></div>
    </div>
    <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
</form>

<?= $this->endSection(); ?>