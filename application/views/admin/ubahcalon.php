<div class="container-fluid mt-3 pb-5">
    <div class="row">
        <div class="col-md-12 mb-3">
            <span class="h1 mr-3"><?= $title ?></span>
        </div>
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header bg-addcalon text-light py-2">
                    <span class="h5">Edit</span>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('admin/prosesubahcalon') ?>" method="post">
                        <input type="hidden" name="id" value="<?= $calonketua['id']; ?>">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Ketua</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="nim_ketua">
                                <?php foreach ($pengurus as $c) : ?>
                                    <?php if (substr($c['nim'], 1, 2) == "18") : ?>
                                        <option value="<?= $c['nim']; ?>" <?php if ($calonketua['nim_ketua'] == $c['nim']) : ?> selected <?php endif ?>><?= $c['nama']; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Wakil Ketua</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="nim_wakil">
                                <?php foreach ($pemilih as $c) : ?>
                                    <?php if (substr($c['nim'], 1, 2) == "19") : ?>
                                        <option value="<?= $c['nim']; ?>" <?php if ($calonketua['nim_wakil'] == $c['nim']) : ?> selected <?php endif ?>><?= $c['nama']; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Visi</span>
                            </div>
                            <textarea class="form-control" name="visi" aria-label="With textarea" rows="5"><?= $calonketua['visi']; ?></textarea>
                        </div>
                        <div class=" input-group mt-2">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Misi</span>
                            </div>
                            <textarea class="form-control" name="misi" aria-label="With textarea" rows="5"><?= $calonketua['misi']; ?></textarea>
                        </div>
                        <a href="<?= base_url('admin/evoting/2') ?>" class="btn btn-secondary py-1 mt-3">Kembali</a>
                        <button class="btn btn-primary py-1 mt-3">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>