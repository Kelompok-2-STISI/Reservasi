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
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile" name="foto">
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
            <div class="form-check m-2">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <ul class="list-group list-group-flush">
                <?php foreach ($photo as $key => $p) : ?>
                    <li class="list-group-item">
                        <img width="30%" src="<?= base_url() . '/' . $p['foto'] ?>" alt="..." class="img-thumbnail">
                    </li>
                    <li class="list-group-item">
                        <form action="/jenis/hapus-foto" method="post">
                            <input type="hidden" name="id_foto" value="<?= $p['id'] ?>">
                            <button type="submit" class="btn btn-danger del">
                                Hapus ^
                            </button>
                        </form>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </form>
</div>
<?= $this->endSection() ?>