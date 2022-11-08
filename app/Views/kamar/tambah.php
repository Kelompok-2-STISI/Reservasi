<?= $this->extend('layout') ?>

<?= $this->section('reservasi') ?>
<div class="card">
    <div class="card-header">
        <h3>Tambah data kamar</h3>
    </div>
    <div class="body">
        <form action="<?= base_url('kamar/add') ?>" method="POST">
            <div class="form-group">
                <label for="">Nama Kamar</label>
                <input type="text" name="kamar" id="" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="form-group">
                <label for="">Status</label>
                <input type="text" name="kamar" id="" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="form-group">
                <label for="">Info Kamar</label>
                <textarea name="info_kamar" class="form-control" id="" rows="5"></textarea>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>