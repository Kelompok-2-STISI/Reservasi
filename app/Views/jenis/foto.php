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
            <h3>Foto Kamar <?= $jenis['jenis_kamar'] ?></h3>
        </div>
    </div>
    <form action="/jenis/update-foto/<?= $jenis['id'] ?>" method="post">
        <div class="card-body">
            <?php foreach ($photo as $key => $p) : ?>
                <img width="30%" src="<?= base_url() . '/' . $p['foto'] ?>" alt="..." class="img-thumbnail">
            <?php endforeach ?>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile" name="foto">
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
<?= $this->endSection() ?>