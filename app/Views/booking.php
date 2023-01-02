<?= $this->extend('layout') ?>

<?= $this->section('head') ?>
<title>Numbay | Daftar Reservasi</title>
<?= $this->endSection() ?>

<?= $this->section('sidebook') ?>
selected rounded
<?= $this->endSection() ?>

<?= $this->section('contentHead') ?>
<h1 class="m-0">Daftar Reservasi</h1>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card">
    <div class="card-header bg-primary">
        <div class="d-flex justify-content-between">
            <h3>Detail Reservasi Customer</h3>
            <a href="<?= base_url('reservasi') ?>" class="btn btn-warning">Tambah</a>
        </div>
        <div>
            <!-- Search form -->
            <!-- <input class="form-control" type="text" placeholder="Search" aria-label="Search"> -->
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Customer</th>
                        <th>Username</th>
                        <th>Kamar</th>
                        <th>Check-in</th>
                        <th>Check-out</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($bo as $key => $a) : ?>
                        <tr>
                            <td><?= $key + 1 ?></td>
                            <td>
                                <a data-toggle="modal" data-target="#CsNameModal<?= $key; ?>" class="pop"><?= $a['nama']; ?></a>
                                <div class="modal fade" id="CsNameModal<?= $key ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-primary">
                                                <h5 class="modal-title" id="exampleModalLabel"><?= $a['nama']; ?></h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">ID Customer : <?= $a['id_customer'] ?></li>
                                                    <li class="list-group-item">No. Hp : <?= $a['no_hp'] ?></li>
                                                    <li class="list-group-item">NIK : <?= $a['nik'] ?></li>
                                                    <li class="list-group-item">Kewarganegaraan : <?= $a['country_name'] ?></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a data-toggle="modal" data-target="#UsNameModal<?= $key; ?>" class="pop"><?= $a['username'] ?></a>
                                <div class="modal fade" id="UsNameModal<?= $key ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-primary">
                                                <h5 class="modal-title" id="exampleModalLabel"><?= $a['username']; ?></h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">E-Mail : <?= $a['email'] ?></li>
                                                    <li class="list-group-item">Role : <?= $a['name'] ?></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a data-toggle="modal" data-target="#KmModal<?= $key; ?>" class="pop"><?= $a['nomor_kamar']; ?></a>
                                <div class="modal fade" id="KmModal<?= $key ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-primary">
                                                <h5 class="modal-title" id="exampleModalLabel"><?= $a['nomor_kamar']; ?></h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">Nama Kamar : <?= $a['nama_kamar'] ?></li>
                                                    <li class="list-group-item">Jenis Kammar : <?= $a['jenis_kamar'] ?></li>
                                                    <li class="list-group-item">Tarif : <?= $a['tarif'] ?>/malam</li>
                                                    <li class="list-group-item">Desc : <?= $a['desc'] ?></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td><?= $a['check-in'] ?></td>
                            <td><?= $a['check-out'] ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>