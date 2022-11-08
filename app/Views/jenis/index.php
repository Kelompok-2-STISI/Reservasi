<?= $this->extend('layout') ?>

<?= $this->section('head') ?>
<title>Numbay | Jenis Kamar</title>
<?= $this->endSection() ?>

<?= $this->section('contentHead') ?>
<h1 class="m-0">Jenis Kamar</h1>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-between">
            <h3>Daftar Jenis Kamar</h3>
            <a href="<?= base_url('kamar/tambah') ?>" class="btn btn-info">Tambah</a>
        </div>

    </div>
    <div class="body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nomor Kamar</th>
                        <th>Katerangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>001</td>
                        <td>Testing Kamar</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>