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
                    <?php foreach ($kamar as $key => $k) : ?>
                        <tr>
                            <td><?= $key + 1; ?></td>
                            <td><?= $k['nama_kamar']; ?></td>
                            <td><?= $k['nomor_kamar']; ?></td>
                            <td>
                                <a data-toggle="modal" data-target="#exampleModal<?= $key; ?>" class="pop"><?= $k['jenis_kamar']; ?></a>
                                <div class="modal fade" id="exampleModal<?= $key ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Kamar <?= $k['jenis_kamar']; ?></h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <label><?= $k['desc']; ?></label>
                                                <?php foreach ($k['photo'] as $index => $f) : ?>
                                                    <img class="mb-2" src="<?= base_url() ?>/<?= $f->foto ?>.jpg" alt="" srcset="" width="100%">
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
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