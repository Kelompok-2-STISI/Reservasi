<?= $this->extend('layout') ?>

<?= $this->section('head') ?>
<title>Numbay | Kamar</title>
<?= $this->endSection() ?>

<?= $this->section('menuopen') ?>
menu-is-opening menu-open
<?= $this->endSection() ?>

<?= $this->section('sidesetkamar') ?>
selected rounded
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
    <form action="<?= base_url() ?>/kamar/update-kamar/<?= $kamar['id']; ?>" method="post">
        <div class="card-body">
            <div class="form-group">
                <label for="InputNamaKamar">Nama Kamar</label>
                <input value="<?= $kamar['nama_kamar'] ?>" type="text" name="nama_kamar" class="form-control" id="InputNamaKamar" placeholder="Nama Kamar">
            </div>
            <div class="form-group">
                <label for="InputNoKamar">No. Kamar</label>
                <input value="<?= $kamar['nomor_kamar'] ?>" type="num" name="nomor_kamar" class="form-control" id="InputNoKamar" placeholder="No. Kamar">
            </div>
            <div class="form-group">
                <label for="exampleInputUserType">Jenis Kamar</label>
                <select name="id_jenis_kamar" class="form-control">
                    <option value="">---Pilih Jenis Kamar---</option>
                    <?php foreach ($jenis as $key => $j) : ?>
                        <option value="<?= $j['id'] ?>"><?= $j['jenis_kamar'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputUserType">Status</label>
                <select name="status" class="form-control">
                    <option value="">---Pilih Status Kamar---</option>
                    <option value="aktif">Aktif</option>
                    <option value="none">Tidak Aktif</option>
                </select>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

<?= $this->endSection() ?>