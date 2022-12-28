<?= $this->extend('layout') ?>

<?= $this->section('head') ?>
<title>Numbay | Reservasi</title>
<?= $this->endSection() ?>

<?= $this->section('sidereservasi') ?>
selected rounded
<?= $this->endSection() ?>

<?= $this->section('contentHead') ?>
<h1 class="m-0">Reservasi</h1>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card card-primary">
    <div class="card-header">
        <div class="d-flex justify-content-between">
            <h3>Step-3</h3>
        </div>
    </div>
    <div class=" card-body">
        <form action="<?= base_url('/reservasi/step-3-save') ?>" method="post">
            <div class="form-group">
                <label>nama</label>
                <input type="text" disabled class="form-control" id="exampleInputCS" value="<?= $bo['nama'] ?>">
            </div>
            <div class="form-group">
                <label>nomor kamar</label>
                <input type="text" disabled class="form-control" id="exampleInputKM" value="<?= $bo['nomor_kamar'] ?>">
                <input type="hidden" name="id_km" class="form-control" id="exampleInputKM" value="<?= $bo['id_kamar'] ?>">
                <input type="hidden" name="no_km" class="form-control" id="exampleInputKM" value="<?= $bo['nomor_kamar'] ?>">
                <input type="hidden" name="nm_km" class="form-control" id="exampleInputKM" value="<?= $bo['nama_kamar'] ?>">
                <input type="hidden" name="id_jk" class="form-control" id="exampleInputKM" value="<?= $bo['id_jenis_kamar'] ?>">
            </div>
            <div class="form-group">
                <label>jenis kamar</label>
                <input type="text" disabled class="form-control" id="exampleInputKM" value="<?= $bo['jenis_kamar'] ?>">
            </div>
            <div class="form-group">
                <label>Tarif</label>
                <input type="text" disabled class="form-control" id="exampleInputKM" value="<?= $bo['tarif'] ?>/malam">
            </div>
            <div class="form-group">
                <label>Durasi menginap</label>
                <input type="text" disabled class="form-control" id="exampleInputKM" value="<?= $bo['check-in'] ?> - <?= $bo['check-out'] ?>">
            </div>
            <div class="form-check">
                <button type="submit" class="btn btn-primary">Confirm</button>
            </div>
        </form>
        <form action="<?= base_url('/reservasi/batal') ?>" method="POST">
            <div class="form-check">
                <input type="hidden" name="id_cs" value="<?= $bo['id_customer'] ?>">
                <input type="hidden" name="id_bo" value="<?= $bo['id_bo'] ?>">

                <button type="submit" class="btn btn-danger my-1">Batal</button>
            </div>
        </form>
    </div>
</div>
</div>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<?= $this->endSection() ?>