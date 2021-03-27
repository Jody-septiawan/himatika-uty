<!doctype html>
<html lang="en">

<head>
    <title>LOGIN ADMIN</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/png" href="<?= base_url('assets/img/himatikalogo.png') ?>" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/css/style-login.css') ?>">
</head>

<body class="text-center">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form class="form-signin mt-5" method="post" action="<?= base_url('admin/login') ?>">
                    <img class="mb-4 mt-5" src="<?= base_url('assets/img/himatikalogo.png') ?>" alt="" width="100" height="72">
                    <h1 class="h3 mb-3 font-weight-normal text-light">ADMIN LOGIN</h1>
                    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
                    <input type="text" name="username" class="form-control py-4 " id="exampleInputPassword1" placeholder="Username">
                    <?= form_error('username', '<small class="text-danger pl-3">', '</small>') ?>
                    <input type="password" name="password" class="form-control py-4 mt-1" id="exampleInputPassword1" placeholder="Password">
                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                    <button class="btn btn-lg tombol-login btn-block shadowc mt-5" type="submit">Login</button>
                    <p class="mt-5 mb-3 text-muted "><?= date('Y'); ?> &copy; copyright by <a href="<?= base_url('') ?>" class="h6 text-muted">Scientific Division</a></p>
                </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- SWEETALERT -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="<?= base_url('assets/js/script-sa.js') ?>"></script>
</body>

</html>