<section class="login">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <img src="<?= base_url('assets/img/ilus/evoting.svg') ?>" class="img-evoting">
            </div>
            <div class="col-md-5">
                <table class="mt-5 mb-1">
                    <tr>
                        <td><img src="<?= base_url('assets/img/himatikalogo.png') ?>" alt="" height="50" class="mr-2"></td>
                        <td>
                            <p class="text-base text-light text-uppercase mb-0">HIMATIKA UTY</p>
                            <h6 class="text-base text-light text-uppercase mb-0">E-Voting</h6>
                        </td>
                    </tr>
                </table>
                <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
                <div class="flash-data2" data-flashdata="<?= $this->session->flashdata('message2'); ?>"></div>
                <form id="loginForm" action="<?= base_url('evoting/login') ?>" class="mt-4" method="post">
                    <div class="form-group mb-4">
                        <input type="text" name="nim" placeholder="Nim" class="form-control border-0 shadow form-control-lg text-primary">
                        <?= form_error('nim', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="form-group mb-4">
                        <input type="password" name="password" placeholder="Password" class="form-control border-0 shadow form-control-lg text-primary">
                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <button type="submit" class="btn-grad px-5 py-1">Login</button><a href="<?= base_url('pantau') ?>" class="ml-2 text-light">Hasil hitung suara</a>
                </form>
            </div>
        </div>
    </div>
</section>