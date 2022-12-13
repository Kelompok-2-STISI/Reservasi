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
            <h3>Step-1</h3>
        </div>
    </div>
    <div class=" card-body">
        <form action="/reservasi/step-1-save" method="post">
            <div class="form-group">
                <label for="inpNama">Nama Lengkap</label>
                <input type="text" class="form-control" id="inpNama" placeholder="Nama Anda" name="nama" autofocus>
            </div>
            <div class="form-group">
                <label for="inpNik">NIK</label>
                <input type="text" class="form-control" id="inpNik" placeholder="NIK" name="nik">
            </div>
            <div class="form-group">
                <label for="inpNoHP">No.Kontak</label>
                <input type="text" class="form-control" id="inpNoHp" placeholder="+62..." name="no_hp">
            </div>
            <div class="form-group">
                <label for="inpNegara">kewarganegaraan</label>
                <select class="custom-select rounded-0" id="inpNegara" name="negara">
                    <option>Piih Negara</option>
                    <?php foreach ($negara as $n) : ?>
                        <option value="<?= $n['id_country'] ?>"><?= $n['country_name'] ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="form-group">
                <label>Pilih Kamar</label>
                <select class="custom-select rounded-0" id="inpKamar" name="kamar">
                    <option>Kamar yang tersedia</option>
                    <?php foreach ($kamar as $k) : ?>
                        <option value="<?= $k['id'] ?>"><?= $k['nama_kamar'] ?>-<?= $k['nomor_kamar'] ?>-<?= $k['jenis_kamar'] ?>-Rp. <?= $k['tarif'] ?>/Malam</option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="form-check">
                <button type="submit" class="btn btn-primary">Next</button>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<?= $this->endSection() ?>