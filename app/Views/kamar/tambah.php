<?= $this->extend('layout') ?>

<?= $this->section('head') ?>
<title>Numbay | Kamar</title>
<?= $this->endSection() ?>

<?= $this->section('sidebar') ?>
<li class="nav-item">
    <a href="/users" class="nav-link">
        <i class="nav-icon fas fa-table"></i>
        <p>
            Users
        </p>
    </a>
</li>
<li class="nav-item menu-is-opening menu-open">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-copy"></i>
        <p>
            Kamar
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item selected rounded">
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