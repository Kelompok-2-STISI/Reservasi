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
            <h3>Tambah Users</h3>
        </div>
    </div>
    <form action="<?= base_url('users/save/') ?>" method="post">
        <?= csrf_field(); ?>
        <div class="card-body">
            <div class="form-group">
                <label for="uname">Username</label>
                <input type="text" name="uname" class="form-control" id="uname" placeholder="Username">
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="E-Mail">
            </div>
            <div class="form-group">
                <label for="role">Role</label>
                <select name="role" class="form-control">
                    <option>Pilih Role</option>
                    <option value="admin">Admin</option>
                    <option value="guest">Guest</option>
                </select>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

<?= $this->endSection() ?>