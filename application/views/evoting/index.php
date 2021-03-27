<?php
function RanString($length = null)
{
    return substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length / strlen($x)))), 1, $length);
}
?>
<div class="flash-data3" data-flashdata="<?= $this->session->flashdata('message3'); ?>"></div>
<div class="voting-page">
    <div class="row mx-0">
        <div class="col-md-12 mess-top py-2 text-center mx-0 px-0">
            <div class="text-welcome">SELAMAT DATANG DI SISTEM E-VOTING</div>
            <div class="text-welcome">HIMATIKA UTY</div>
        </div>
        <div class="col-md-12 bg-kuning">
            <div class="segitiga-biru"></div>
        </div>
        <div class="col-md-12 main-bg">
            <div class="segitiga-kuning"></div>
        </div>
        <div class="col-md-12 text-right">
            <span class="btn text-dark p-0 mr-1"><i class="fa fa-user mr-1" aria-hidden="true"></i><?= $user['nama'] ?></span>
            <a href="<?= base_url('evoting/logout') ?>" class="btn btn-dark py-0 logout">Logout</a>
        </div>
    </div>
    <?php if ($user['set_pw'] == 0) : ?>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12 text-center">
                    <span class="h5">Silahkan masukkan Kata sandi akun anda</span>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <form action="<?= base_url('evoting/index') ?>" method="post">
                        <div class="form-group">
                            <input type="password" name="pw1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="New Password">
                            <?= form_error('pw1', '<small class="text-dark pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <input type="password" name="pw2" class="form-control" id="exampleInputPassword1" placeholder="Repeat Password">
                            <?= form_error('pw2', '<small class="text-dark pl-3">', '</small>') ?>
                        </div>
                        <button type="submit" class="btn btn-primary py-0 ml-1">Submit</button>
                    </form>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    <?php else : ?>
        <?php if ($user['status'] == 0) : ?>
            <?php if ($control['status'] == 1) : ?>
                <div class="container mb-5 mt-2">
                    <div class="row">
                        <div class="col-md-12 text-center h5">
                            Pemilihan Ketua Umum HIMATIKA UTY <br>
                            Periode 2020/2021
                        </div>
                        <?php $no = 1;
                        foreach ($calon as $c) : ?>
                            <div class="col-md-6">
                                <div class="card px-3 text-center pb-3 pt-2 shadow mt-2">
                                    <div class="nomor">0<?= $no; ?> </div>
                                    <?php $img = $c['nim_ketua']; ?>
                                    <?php $imgg = substr($img, 0, 2) ?>
                                    <?php if ($imgg == "pr") : ?>
                                        <div class="img"><img src="<?= base_url('assets/img/profile/') . $c['nim_ketua'] . '.jpeg' ?>" class="img-calon rounded"></div>
                                        <div class="img"><img src="<?= base_url('assets/img/profil e/') . $c['nim_wakil'] . '.jpeg' ?>" class="img-calon rounded"></div>
                                    <?php else : ?>
                                        <div class="img pointer" data-toggle="modal" data-target="#visimisi<?= $no++; ?>">
                                            <img src="https://sia.uty.ac.id/fotokecil/<?= $c['nim_ketua'] ?>.jpg" class="img-calon float-left">
                                            <img src="https://sia.uty.ac.id/fotokecil/<?= $c['nim_wakil'] ?>.JPG" class="img-calon ">
                                        </div>
                                    <?php endif; ?>
                                    <a href="<?= base_url('evoting/pilihan/') . RanString(200) . '/' . $id_pemilih . '/' . RanString(200) . '/' . $c['id'] . '/' . RanString(200);  ?>" class="btn btn-success btn-pilih mt-4 tombol-pilih">Pilih</a>
                                </div>
                            </div>
                        <?php endforeach; ?>

                        <?php
                        if ($calonexam) :
                            $no = 1;
                            foreach ($calonexam as $c) : ?>
                                <div class="col-md-6">
                                    <div class="card px-3 text-center pb-3 pt-2 shadow mt-2">
                                        <div class="nomor">0<?= $no; ?> </div>
                                        <div class="img pointer" data-toggle="modal" data-target="#visimisi<?= $no++; ?>">
                                            <img src="<?= base_url('assets/img/profile/') . $c['nim_ketua'] . '.jpeg' ?>" class="img-calon img-kiri float-left">
                                            <img src="<?= base_url('assets/img/profile/') . $c['nim_wakil'] . '.jpeg' ?>" class="img-calon img-kanan">
                                        </div>
                                        <a href="<?= base_url('evoting/pilihan/') . RanString(200) . '/' . $id_pemilih . '/' . RanString(200) . '/' . $c['id'] . '/' . RanString(200);  ?>" class="btn btn-success btn-pilih mt-4 tombol-pilih">Pilih</a>
                                    </div>
                                </div>
                        <?php endforeach;
                        endif; ?>
                    </div>
                </div>
            <?php else : ?>
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            e-Voting belum tersedia
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6 text-center">
                            <img src="<?= base_url('assets/img/ilus/close.svg') ?>" class="img-close">
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php else : ?>
            <div class="text-center mt-5">
                <span class="h2">Anda telah melakukan voting </span> <br>
                <!-- <span class="id_token"> <?= RanString(rand(1, 10)) ?><span class="text-secondary"><?= $user['id_calon'] ?></span><?= RanString(rand(1, 10)); ?></span> <br> -->
                <a href="<?= base_url('pantau') ?>" target="_blank">Lihat hasil</a>
            </div>
        <?php endif; ?>
    <?php endif; ?>
</div>
<?php $no = 1;
foreach ($calon as $c) : ?>
    <!-- Modal -->
    <div class="modal fade" id="visimisi<?= $no; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header py-2">
                    <p class="modal-title nomor" id="exampleModalLabel">0<?= $no++; ?> | <b> <?= $c['ketua'] ?></b> & <b><?= $c['wakil'] ?></b></p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body pb-5">
                    <div class="col-md-12">Visi</div>
                    <div class="col-md-12 text-center">
                        <textarea class="textarea-calon pl-2" cols="100" rows="8" readonly><?= $c['visi'] ?></textarea>
                    </div>
                    <div class="col-md-12">Misi</div>
                    <div class="col-md-12 text-center">
                        <textarea class="textarea-calon pl-2" cols="100" rows="8" readonly><?= $c['misi'] ?></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php endforeach; ?>

<?php
if ($calonexam) :

    $no = 1;
    foreach ($calonexam as $c) : ?>
        <!-- Modal -->
        <div class="modal fade" id="visimisi<?= $no; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header py-2">
                        <p class="modal-title nomor" id="exampleModalLabel">0<?= $no++; ?> | <b> nama ketua</b> & <b>nama wakil ketua</b></p>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body pb-5">
                        <div class="col-md-12">Visi</div>
                        <div class="col-md-12 text-center">
                            <textarea class="textarea-calon pl-2" cols="100" rows="8" readonly><?= $c['visi'] ?></textarea>
                        </div>
                        <div class="col-md-12">Misi</div>
                        <div class="col-md-12 text-center">
                            <textarea class="textarea-calon pl-2" cols="100" rows="8" readonly><?= $c['misi'] ?></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php endforeach;
endif; ?>