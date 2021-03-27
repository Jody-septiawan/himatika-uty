<div class="container-fluid">
    <h1 class="mt-4 mb-2"><?= $title ?></h1>
    <div class="row">
        <div class="col-md-12">
            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#TambahAgenda">
                Tambah pengurus
            </button> -->
            <div class="card shadow mt-2">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered m-0" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>FOTO</th>
                                    <th>NIM</th>
                                    <th>NAMA</th>
                                    <th>DIVISI</th>
                                    <th>JABATAN</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($pengurus as $a) : ?>
                                    <tr>
                                        <td><?= $a['id_pengurus']; ?></td>
                                        <td><img src="https://sia.uty.ac.id/fotokecil/<?= $a['nim'] ?>.jpg" class="img-foto-pengurus  rounded"></td>
                                        <td><?= $a['nim'] ?></td>
                                        <td><?= $a['nama'] ?></td>
                                        <td><?= $a['divisi'] ?></td>
                                        <td><?= $a['jabatan'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>