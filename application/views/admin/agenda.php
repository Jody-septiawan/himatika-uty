<div class="container-fluid">
    <h1 class="mt-4 mb-2"><?= $title ?></h1>
    <div class="row">
        <div class="col-md-12">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#TambahAgenda">
                Tambah agenda
            </button>
            <div class="card shadow mt-2">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered m-0" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>tanggal</th>
                                    <th>Judul</th>
                                    <th>Deskripsi</th>
                                    <th>Link</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($agenda as $a) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $a['tanggal'] ?></td>
                                        <td><?= $a['judul'] ?></td>
                                        <td><?= $a['deskripsi'] ?></td>
                                        <td><?= $a['link'] ?></td>
                                        <td></td>
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

<!-- Modal -->
<div class="modal fade" id="TambahAgenda" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah user</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="<?= base_url('admin/tambahagenda'); ?>" method="post">
                    <div class="form-group">
                        <label for="username">Tanggal</label>
                        <input type="text" class="form-control" id="tanggal" name="tanggal">
                    </div>
                    <div class="form-group">
                        <label for="username">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul">
                    </div>
                    <div class="form-group">
                        <label for="username">Deskripsi</label>
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi">
                    </div>
                    <div class="form-group">
                        <label for="username">Link</label>
                        <input type="text" class="form-control" id="link" name="link">
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