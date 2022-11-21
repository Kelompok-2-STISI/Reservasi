<?php

use PhpParser\Node\Stmt\Echo_;
?>
<?= $this->extend('layout') ?>

<?= $this->section('head') ?>
<title>Numbay | User</title>
<?= $this->endSection() ?>

<?= $this->section('sideuser') ?>
selected rounded
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
    <form action="<?= base_url('users/save') ?>" method="post">
        <?= csrf_field(); ?>
        <div class="card-body">
            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap" autofocus>
            </div>
            <div class="form-group">
                <label for="uname">Username</label>
                <input type="text" name="uname" class="form-control" id="uname" placeholder="Username">
            </div>
            <div class="form-group">
                <label for="nik">NIK</label>
                <input type="text" name="nik" class="form-control" id="nik" placeholder="NIK">
            </div>
            <div class="form-group">
                <label for="negara" class="form-label">Kewarganegaraan</label>
                <select class="custom-select rounded-0" id="exampleSelectRounded0">
                    <option selected>Pilih Negara</option>
                    <?php foreach ($negara as $n) : ?>
                        <option data-tokens="<?= $n['country_name']; ?>" value="<?= $n['id_country']; ?>"><?= $n['country_name']; ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="E-Mail">
            </div>
            <div class="form-group">
                <label for="noHp">No.Hp</label>
                <input type="tel" name="noHp" class="form-control" id="noHp" placeholder="No.Hp">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="exampleInputUserType">Tipe User</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="tipe" id="flexRadioDefault1" value="Admin">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Admin
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="tipe" id="flexRadioDefault2" value="Customer" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        Customer
                    </label>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

<?= $this->endSection() ?>