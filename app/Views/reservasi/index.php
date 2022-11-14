<?php

use App\Models\user;
?>
<?= $this->extend('layout') ?>

<?= $this->section('head') ?>
<title>Numbay | Reservasi</title>
<?= $this->endSection() ?>

<?= $this->section('sidereservasi') ?>
selected rounded
<?= $this->endSection() ?>

<?= $this->section('contentHead') ?>
<h1 class="m-0">Reservasi</h1>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-between">
            <h3>Kamar</h3>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No. Kamar</th>
                        <th>Nama Kamar</th>
                        <th>Jenis Kamar</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<?= $this->endSection() ?>