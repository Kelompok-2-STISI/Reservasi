<?= $this->extend('layout') ?>

<?= $this->section('head') ?>
<title>Numbay | User</title>
<?= $this->endSection() ?>

<?= $this->section('sidebar') ?>
<li class="nav-item selected rounded">
    <a href="/users" class="nav-link">
        <i class="nav-icon fas fa-table"></i>
        <p>
            Users
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-copy"></i>
        <p>
            Kamar
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview" style="display: none;">
        <li class="nav-item">
            <a href="/kamar" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Set Kamar</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/jenis" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Jenis Kamar</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/tarif" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Tarif Kamar</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item">
    <a href="/reservasi" class="nav-link">
        <i class="nav-icon fas fa-copy"></i>
        <p>
            Reservasi
        </p>
    </a>
</li>
<?= $this->endSection() ?>


<?= $this->section('contentHead') ?>
<h1 class="m-0">User Menu</h1>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-between">
            <h3>Daftar User</h3>
            <a href="<?= base_url('users/tambah') ?>" class="btn btn-info">Tambah</a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Nama Lengkap</th>
                        <th>NIK</th>
                        <th>Kewarganegaraan</th>
                        <th>E-Mail</th>
                        <th>No.Hp</th>
                        <th>Tipe</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <?= $this->endSection() ?>