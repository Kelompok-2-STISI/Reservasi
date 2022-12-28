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
<div class="card card-primary">
    <div class="card-header">
        <div class="d-flex justify-content-between">
            <h3>Step-2</h3>
        </div>
    </div>
    <div class=" card-body">
        <form action="<?= base_url('/reservasi/step-2-save') ?>" method="post">
            <div class="form-group">
                <label>nama</label>
                <input type="text" disabled class="form-control" id="exampleInputCS" value="<?= $customer['nama'] ?>">
            </div>
            <div class="form-group">
                <label>nomor kamar</label>
                <input type="text" disabled class="form-control" id="exampleInputKM" value="<?= $kamar['nomor_kamar'] ?>">
            </div>
            <div class="form-group">
                <label>Check-In:</label>
                <div class="input-group date" id="in">
                    <input type="date" class="form-control" name="in">
                </div>
                <label>Check-Out:</label>
                <div class="input-group date" id="out">
                    <input type="date" class="form-control" name="out">
                </div>
            </div>
            <div class="form-group">
                <input type="hidden" value="<?= $customer['id'] ?>" name="customer">
                <input type="hidden" value="<?= $kamar['id'] ?>" name="kamar">
                <input type="hidden" value="<?= user_id() ?>" name="user">
            </div>
            <div class="form-check">
                <button type="submit" class="btn btn-primary">Next</button>
            </div>
        </form>
    </div>
</div>
</div>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<?= $this->endSection() ?>