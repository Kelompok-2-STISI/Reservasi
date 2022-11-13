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
        <li class="nav-item">
            <a href="/kamar" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Set Kamar</p>
            </a>
        </li>
        <li class="nav-item selected rounded">
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
            <h3>Tambah Jenis Kamar</h3>
        </div>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label for="InputJenisKamar">Jenis Kamar</label>
            <input type="text" class="form-control" id="InputJenisKamar" placeholder="Jenis Kamar">
        </div>
        <label for="InputTarifKamar">Tarif Kamar</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Rp.</span>
            </div>
            <input type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="InputTarifKamar">Foto Kamar</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
        </div>
        <div class="form-group">
            <label>Deskripsi Kamar</label>
            <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
        </div>
    </div>
</div>
<div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
<?= $this->endSection() ?>