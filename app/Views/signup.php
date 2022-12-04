<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        body {
            background: #4b545c;
        }

        a:hover {
            text-decoration: none;
        }

        label {
            font-weight: bold;
        }
    </style>
    <title>Sign-In</title>
</head>
<div class="card p-5 mx-auto mt-5 mb-5" style="width: 25rem;">
    <h1 class="text-center mb-3">Sign-In</h1>
    <form>
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
            <select class="custom-select rounded-0" name="negara" id="negara">
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
        <div class="form-group form-link">
            <a class="font-italic" href="<?= base_url() ?>/Login">Sudah Punya Akun?</a>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<body>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>