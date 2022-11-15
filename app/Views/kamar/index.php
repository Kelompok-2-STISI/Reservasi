<?= $this->extend('layout') ?>

<?= $this->section('head') ?>
<title>Numbay | Set Kamar</title>
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
<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-between">
            <h3>Daftar Kamar</h3>
            <a href="<?= base_url('kamar/tambah') ?>" class="btn btn-info">Tambah</a>
        </div>

    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kamar</th>
                        <th>No. Kamar</th>
                        <th>Jenis Kamar</th>
                        <th>Tarif Kamar</th>
                        <th>Status Kamar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($kamar as $k) : ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $k['nama_kamar']; ?></td>
                            <td><?= $k['nomor_kamar']; ?></td>
                            <td><?= $k['jenis_kamar']; ?></td>
                            <td><?= $k['tarif']; ?></td>
                            <td><?= $k['status']; ?></td>
                            <td></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>