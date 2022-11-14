<?= $this->extend('layout') ?>

<?= $this->section('head') ?>
<title>Numbay | Kamar</title>
<?= $this->endSection() ?>

<?= $this->section('menuopen') ?>
menu-is-opening menu-open
<?= $this->endSection() ?>

<?= $this->section('sidesetkamar') ?>
selected rounded
<?= $this->endSection() ?>

<?= $this->section('contentHead') ?>
<h1 class="m-0">Menu Kamar</h1>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card card-primary">
    <div class="card-header">
        <div class="d-flex justify-content-between">
            <h3>Tambah Kamar</h3>
        </div>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label for="InputNamaKamar">Nama Kamar</label>
            <input type="text" class="form-control" id="InputNamaKamar" placeholder="Nama Kamar">
        </div>
        <div class="form-group">
            <label for="InputNoKamar">No. Kamar</label>
            <input type="num" class="form-control" id="InputNoKamar" placeholder="No. Kamar">
        </div>
        <div class="form-group">
            <label for="exampleInputUserType">Jenis Kamar</label>
            <div class="icheck-primary">
                <input type="radio" id="primary1" name="primary" value="">
                <label for="primary1">Premium</label>
            </div>
            <div class="icheck-primary">
                <input type="radio" id="primary2" name="primary" value="">
                <label for="primary2">Reguler</label>
            </div>
        </div>
    </div>
</div>
<div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
<?= $this->endSection() ?>