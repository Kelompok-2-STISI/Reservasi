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
<div class="card card-primary">
    <div class="card-header">
        <div class="d-flex justify-content-between">
            <h3>Tambah User</h3>
        </div>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label for="exampleInputNama">Nama Lengkap</label>
            <input type="text" class="form-control" id="exampleInputNama" placeholder="Nama Lengkap">
        </div>
        <div class="form-group">
            <label for="exampleInputUsername">Username</label>
            <input type="text" class="form-control" id="exampleInputUsername" placeholder="Username">
        </div>
        <div class="form-group">
            <label for="exampleInputUsername">NIK</label>
            <input type="text" class="form-control" id="exampleInputNIK" placeholder="NIK">
        </div>
        <div class="form-group">
            <label for="inputState" class="form-label">Kewarganegaraan</label>
            <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                <option selected="selected" data-select2-id="3">Alabama</option>
                <option data-select2-id="35">Alaska</option>
                <option data-select2-id="36">California</option>
                <option data-select2-id="37">Delaware</option>
                <option data-select2-id="38">Tennessee</option>
                <option data-select2-id="39">Texas</option>
                <option data-select2-id="40">Washington</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="exampleInputNoHp">No.Hp</label>
            <input type="tel" class="form-control" id="exampleInputNoHp" placeholder="No.Hp">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="exampleInputUserType">Tipe User</label>
            <div class="icheck-primary">
                <input type="radio" id="primary1" name="primary" value="Admin">
                <label for="primary1">Admin</label>
            </div>
            <div class="icheck-primary">
                <input type="radio" checked="" id="primary2" name="primary" value="Customer">
                <label for="primary2">Customer</label>
            </div>
        </div>
    </div>
</div>
<div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
<?= $this->endSection() ?>