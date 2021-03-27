<div class="pengurus py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-12">
                <div class="h1 text-center span">Pengurus 2019/2020</div>
            </div>
        </div>

        <div class="row bg-pengurus rounded px-3 py-4">
            <div class="col-md-12">
                <div class="h4 text-center my-2 mb-4">DIVISI BPH</div>
            </div>
            <?php foreach ($bph as $bph) : ?>
                <div class="col-md-2 p-1">
                    <img src="https://sia.uty.ac.id/fotokecil/<?= $bph['nim'] ?>.jpg" class="img-pengurus rounded">
                    <div class="overlay rounded m-1">
                        <div class="text">
                            <p class="text-center h5"><?= $bph['nama'] ?></p>
                            <p class="text-center"><?= $bph['jabatan'] ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="row bg-pengurus rounded px-3  py-4 mt-3">
            <div class="col-md-12">
                <div class="h4 text-center my-2 mb-4">DIVISI SDM</div>
            </div>
            <?php foreach ($sdm as $sdm) : ?>
                <div class="col-md-2 p-1">
                    <img src="https://sia.uty.ac.id/fotokecil/<?= $sdm['nim'] ?>.jpg" class="img-pengurus rounded">
                    <div class="overlay rounded m-1">
                        <div class="text">
                            <p class="text-center h5"><?= $sdm['nama'] ?></p>
                            <p class="text-center"><?= $sdm['jabatan'] ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="row bg-pengurus rounded px-3  py-4 mt-3">
            <div class="col-md-12">
                <div class="h4 text-center my-2 mb-4">DIVISI KEILMUAN</div>
            </div>
            <?php foreach ($keilmuan as $keilmuan) : ?>
                <div class="col-md-2 p-1">
                    <img src="https://sia.uty.ac.id/fotokecil/<?= $keilmuan['nim'] ?>.jpg" class="img-pengurus rounded">
                    <div class="overlay rounded m-1">
                        <div class="text">
                            <p class="text-center h5"><?= $keilmuan['nama'] ?></p>
                            <p class="text-center"><?= $keilmuan['jabatan'] ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="row bg-pengurus rounded px-3  py-4 mt-3">
            <div class="col-md-12">
                <div class="h4 text-center my-2 mb-4">DIVISI HUMAS</div>
            </div>
            <?php foreach ($humas as $humas) : ?>
                <div class="col-md-2 p-1">
                    <img src="https://sia.uty.ac.id/fotokecil/<?= $humas['nim'] ?>.jpg" class="img-pengurus rounded">
                    <div class="overlay rounded m-1">
                        <div class="text">
                            <p class="text-center h5"><?= $humas['nama'] ?></p>
                            <p class="text-center"><?= $humas['jabatan'] ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="row bg-pengurus rounded px-3  py-4 mt-3">
            <div class="col-md-12">
                <div class="h4 text-center my-2 mb-4">DIVISI MEDIA</div>
            </div>
            <?php foreach ($media as $media) : ?>
                <div class="col-md-2 p-1">
                    <img src="https://sia.uty.ac.id/fotokecil/<?= $media['nim'] ?>.jpg" class="img-pengurus rounded">
                    <div class="overlay rounded m-1">
                        <div class="text">
                            <p class="text-center h5"><?= $media['nama'] ?></p>
                            <p class="text-center"><?= $media['jabatan'] ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</div>