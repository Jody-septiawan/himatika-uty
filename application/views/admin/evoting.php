<div class="flash-data3" data-flashdata="<?= $this->session->flashdata('message3'); ?>"></div>
<div class="container-fluid mt-3 pb-5">
    <div class="row">
        <div class="col-md-12">
            <span class="h1 mr-3 ml-3"><?= $title ?></span>
            <?php if ($id_menu == "1") : ?>
                <span class="float-right mr-3 mt-2">
                    <form action="<?= base_url('admin/controlevoting') ?>" method="post">
                        <?php if ($control_voting['status'] == 1) : ?>
                            <input type="hidden" name="status" value="0">
                            <button class="btn btn-dark mt-2" type="submit">Tutup e-Voting</button>
                        <?php else : ?>
                            <input type="hidden" name="status" value="1">
                            <button class="btn btn-success mt-2" type="submit">Buka e-Voting</button>
                        <?php endif; ?>
                    </form>
                </span>
                <span class="float-right mr-3 mt-2">
                    <form action="<?= base_url('admin/controlhitung') ?>" method="post">
                        <?php if ($control_hitung['status'] == 1) : ?>
                            <input type="hidden" name="status" value="0">
                            <button class="btn btn-dark mt-2" type="submit">Tutup hitung</button>
                        <?php else : ?>
                            <input type="hidden" name="status" value="1">
                            <button class="btn btn-success mt-2" type="submit">Buka hitung</button>
                        <?php endif; ?>
                    </form>
                </span>
            <?php endif; ?>
            <?php if ($id_menu == "3") : ?>
                <span class="float-right mr-3 mt-2">
                    <a href="<?= base_url('admin/resetvoting') ?>" class="btn btn-primary mt-2 py-0">Reset voting</a>
                    <a href="<?= base_url('admin/resetpassword') ?>" class="btn btn-primary mt-2 py-0">Reset password</a>
                    <a href="<?= base_url('admin/resetall') ?>" class="btn btn-info mt-2 py-0">Reset all</a>
                </span>
            <?php endif; ?>
            <span class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php foreach ($menu as $m) : ?>
                        <?php if ($m['id'] == $id_menu) : ?>
                            <?php echo $m['nama'] ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <?php foreach ($menu as $m) : ?>
                        <form action="<?= base_url('admin/evoting/' . $m['id']); ?>" method="get">
                            <!-- <input type="hidden" name="id_menu" value="<?= $m['id'] ?>"> -->
                            <button class="dropdown-item" type="submit"><?= $m['nama'] ?></button>
                        </form>
                    <?php endforeach; ?>
                </div>
            </span>
        </div>
    </div>
    <?php if ($id_menu == "1") : ?>
        <div class="row mt-5">
            <div class="col-md-6">
                <?php $now = $vote['status']; ?>
                <?php $all = $voteallin['status']; ?>
                <?php $persen = round((($now / $all) * 100), 2); ?>
                <div class="card border-left-primary shadow h-100 py-2 bg-suara-masuk text-light">
                    <div class="card-body pb-2 pt-1">
                        <div class="h4 mb-2">Suara masuk : <span class="badge badge-light"><?= $now ?></span></div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: <?= $persen ?>%;" aria-valuenow="<?= $persen ?>" aria-valuemin="0" aria-valuemax="<?= $voteallin['status']; ?>"><?= $persen ?>%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

            </div>
        </div>
    <?php endif; ?>
    <?php if ($id_menu == "2") : ?>
        <div class="row mt-3">
            <div class="col-md-12">
                <?= $this->session->flashdata('message'); ?>
                <div class="card shadow">
                    <div class="card-header bg-addcalon py-2">
                        <div class="text-right">
                            <a href="<?= base_url('admin/hapusallcalon') ?>" class="btn btn-danger py-0">Kosongkan</a>
                            <?php if ($jml_calon['jml_calon'] == 2) : ?>
                                <button disabled class="btn btn-success py-0" data-toggle="modal" data-target="#exampleModal">Tambah calon</button>
                            <?php else : ?>
                                <button class="btn btn-success py-0" data-toggle="modal" data-target="#exampleModal">Tambah calon</button>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead class="text-center">
                                <tr>
                                    <th width="1">No</th>
                                    <th>Ketua</th>
                                    <th>Wakil</th>
                                    <th width="300">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php $no = 1;
                                foreach ($calonketua as $c) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $c['ketua'] ?></td>
                                        <td><?= $c['wakil'] ?></td>
                                        <td>
                                            <button class="btn btn-info py-0" data-toggle="modal" data-target="#ModalCalon<?= $c['id'] ?>">Detail</button>
                                            <a href="<?= base_url('admin/ubahcalon/' . $c['id']); ?>" class="btn btn-primary py-0 active" role="button" aria-pressed="true">Edit</a>
                                            <a href="<?= base_url('admin/hapuscalon/' . $c['id']); ?>" class="btn btn-danger py-0 active hapus-calon" role="button" aria-pressed="true">Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <?php if ($id_menu == "3") : ?>
        <meta http-equiv="refresh" content="10">
        <div class="row mt-3">
            <div class="col-md-12">
                <?= $this->session->flashdata('message'); ?>
                <div class="card shadow">
                    <div class="card-header bg-addcalon py-2">
                        <div class="text-right py-2">
                            <span class="badge badge-pill badge-danger py-1">Belum Voting : <?= $belum_vot; ?></span>
                            <span class="badge badge-pill badge-success py-1">Sudah Voting : <?= $sudah_vot; ?></span>
                            <span class="badge badge-pill badge-light py-1">Belum Set PW : <?= $set_pw; ?></span>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead class="text-center">
                                <tr>
                                    <th width="1">No</th>
                                    <th>NIM</th>
                                    <th>Nama</th>
                                    <th>Status Voting</th>
                                    <th>Set Password</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php $no = 1;
                                foreach ($pemilih as $c) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $c['nim'] ?></td>
                                        <td><?= $c['nama'] ?></td>
                                        <td>
                                            <?php if ($c['status'] == 0) : ?>
                                                <span class="badge badge-pill badge-danger">Belum</span>
                                            <?php else : ?>
                                                <span class="badge badge-pill badge-success">Sudah</span>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php if ($c['set_pw'] == 0) : ?>
                                                <span class="badge badge-pill badge-danger">Belum</span>
                                            <?php else : ?>
                                                <span class="badge badge-pill badge-success">Sudah</span>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <a href="<?= base_url('admin/resetpw/') . $c['id'] ?>" class="btn btn-secondary p-0 px-2 reset-pw">Reset Password</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Calon</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/tambahcalon') ?>" method="post">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Ketua</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="nim_ketua">
                            <option value="0"></option>
                            <?php foreach ($pengurus as $c) : ?>
                                <?php if (substr($c['nim'], 1, 2) == "18") : ?>
                                    <option value="<?= $c['nim']; ?>"><?= $c['nama']; ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            <option value="pr1">Contoh 1</option>
                            <option value="pr2">Contoh 2</option>
                            <option value="pr3">Contoh 3</option>
                            <option value="pr4">Contoh 4</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Wakil Ketua</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="nim_wakil">
                            <option value="0"></option>
                            <?php foreach ($pemilih as $c) : ?>
                                <?php if (substr($c['nim'], 1, 2) == "19") : ?>
                                    <option value="<?= $c['nim']; ?>"><?= $c['nama']; ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            <option value="pr1">Contoh 1</option>
                            <option value="pr2">Contoh 2</option>
                            <option value="pr3">Contoh 3</option>
                            <option value="pr4">Contoh 4</option>
                        </select>
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Visi</span>
                        </div>
                        <textarea class="form-control" name="visi" aria-label="With textarea" rows="5" required></textarea>
                    </div>
                    <div class=" input-group mt-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Misi</span>
                        </div>
                        <textarea class="form-control" name="misi" aria-label="With textarea" rows="5" required></textarea>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
            </form>

        </div>
    </div>
</div>

<?php $no = 1;
foreach ($calonketua as $c) : ?>
    <!-- Modal -->
    <div class="modal fade" id="ModalCalon<?= $c['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Calon 0<?= $no++; ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 text-center">
                                <span class="float-right">
                                    <img src="https://sia.uty.ac.id/fotokecil/<?= $c['nim_ketua'] ?>.jpg" class="img-foto-pengurus  rounded">
                                    <p class="h4 mb-0 pb-0">Ketua</p>
                                </span>
                            </div>
                            <div class="col-md-6 text-center">
                                <span class="float-left">
                                    <img src="https://sia.uty.ac.id/fotokecil/<?= $c['nim_wakil'] ?>.JPG" class="img-foto-pengurus  rounded">
                                    <p class="h4 mb-0 pb-0">Wakil ketua</p>
                                </span>
                            </div>
                            <div class="col-md-12 mt-4"><span class="h6">Nama ketua</span> : <?= $c['ketua'] ?> (<?= $c['nim_ketua'] ?>)</div>
                            <div class="col-md-12 mb-4"><span class="h6">Nama wakil ketua</span> : <?= $c['wakil'] ?> (<?= $c['nim_wakil'] ?>)</div>
                            <div class="col-md-12">Visi</div>
                            <div class="col-md-12">
                                <textarea class="textarea-calon" cols="90" rows="8" readonly><?= $c['visi'] ?></textarea>
                            </div>
                            <div class="col-md-12 mt-2">Misi</div>
                            <div class="col-md-12">
                                <textarea class="textarea-calon" cols="90" rows="8" readonly><?= $c['misi'] ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
                </form>

            </div>
        </div>
    </div>
<?php endforeach; ?>