<?= $this->extend('layout') ?>

<?= $this->section('head') ?>
<title>Numbay | Kamar</title>
<?= $this->endSection() ?>

<?= $this->section('menuopen') ?>
menu-is-opening menu-open
<?= $this->endSection() ?>

<?= $this->section('sidejeniskamar') ?>
selected rounded
<?= $this->endSection() ?>

<?= $this->section('contentHead') ?>
<h1 class="m-0">Menu Kamar</h1>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card card-primary">
    <div class="card-header">
        <div class="d-flex justify-content-between">
            <h3>Edit Jenis Kamar</h3>
        </div>
    </div>
    <form action="<?= base_url() ?>/jenis/update/<?= $jenis['id']; ?>" method="post">
        <div class="card-body">
            <div class="form-group">
                <label for="InputJenisKamar">Jenis Kamar</label>
                <input type="text" class="form-control" id="InputJenisKamar" name="jenis" value="<?= $jenis['jenis_kamar']; ?>" placeholder="Jenis Kamar" autofocus>
            </div>
            <label for="InputTarifKamar">Tarif Kamar</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">Rp.</span>
                </div>
                <input type="text" name="tarif" class="form-control" value="<?= $jenis['tarif']; ?>">
            </div>
            <div class="form-group">
                <label>Deskripsi Kamar</label>
                <textarea class="form-control" rows="3" name="desc" placeholder="Enter ..."><?= $jenis['desc']; ?></textarea>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
<?= $this->endSection() ?>