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
    </style>
    <title>Login</title>
</head>
<div class="card p-5 mx-auto mt-5 mb-5" style="width: 25rem;">
    <h1 class="text-center mb-3">LOGIN</h1>
    <form>
        <div class="form-group">
            <label class="font-weight-bold" for="InputUsername">Username</label>
            <input type="text" class="form-control" id="InputUsername" aria-describedby="usernameHelp" placeholder="Masukkan Username">
        </div>
        <div class="form-group">
            <label class="font-weight-bold" for="InputPass">Password</label>
            <input type="password" class="form-control" id="InputPass" placeholder="Masukkan Password">
        </div>
        <div class="form-group form-link">
            <a class="font-italic" href="<?= base_url() ?>/Sign-In">Belum Punya Akun?</a>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>

<body>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>