<?= $this->extend('layout') ?>

<?= $this->section('head') ?>
<title>Numbay | Home</title>
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
    <a href="<?php base_url() ?>/reservasi" class="nav-link">
        <i class="nav-icon fas fa-copy"></i>
        <p>
            Reservasi
        </p>
    </a>
</li>
<?= $this->endSection() ?>

<?= $this->section('contentHead') ?>
<h1 class="m-0">Dashboard</h1>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<?php foreach ($jenis_kamar as $j) : ?>
    <div class="container con my-2">
        <div class="card cus" style="width: 18rem;">
            <div class="card-body cb">
                <h2 class="card-title font-weight-bold"><?= $j['jenis_kamar'] ?></h2>
                <p class="card-text"><?= $j['desc'] ?></p>
                <a href="/reservasi" class="btn btn-primary">Mulai</a>
            </div>
        </div>
        <img src="<?= base_url() . "/" . $j['photo'][0]->foto ?>" class="img-fluid" alt="...">
    </div>
<?php endforeach ?>
<?= $this->endSection() ?>