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
            <h3>Step-2</h3>
        </div>
    </div>
    <div class=" card-body">
        <form action="/reservasi/step-2-save" method="post">
            <div class="form-group">
                <label for="inpNama">Nama Lengkap</label>
                <input type="datetime" class="form-control" id="inpIn" placeholder="Nama Anda" name="in" autofocus>
            </div>
            <div class="form-group">
                <label for="inpNik">NIK</label>
                <input type="text" class="form-control" id="inpOut" placeholder="NIK" name="out">
            </div>
            <div class="form-group">
                <label for="inpNoHP">No.Kontak</label>
                <input type="text" class="form-control" id="inpNoHp" placeholder="+62..." name="no_hp">
            </div>

        </form>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<?= $this->endSection() ?>