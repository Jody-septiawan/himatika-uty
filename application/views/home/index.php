<?php

$data_img = ['33', '55', '166', '66', '100', '88', '144', '177'];
$data_capt = ['Open House 13', 'Seminar Umum', 'Studi trip <br> HIMAKOM IBN ke HIMATIKA UTY', 'Kunjungan Industri <br> HIMATIKA x HMSI', 'Kunjungan Industri <br> HIMATIKA x HMSI', 'Kunjungan Industri <br> HIMATIKA x HMSI', 'Open Recruitment', 'Coding On The Spot'];
$i = 0;
foreach ($data_img as $d) :
    $data[$i]['img'] = $data_img[$i];
    $data[$i]['capt'] = $data_capt[$i];
    $i++;
endforeach;
?>



<!-- Carousel -->
<div id="carouselControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?= base_url('assets/img-kegiatan/155.jpg') ?>" class="d-block w-100" alt="...">
            <div class="carousel-caption">
                <h4 class="capt m-0">HIMATIKA</h4>
                <p>Himpunan mahasiswa informatika</p>
            </div>
        </div>
        <?php foreach ($data as $d) : ?>
            <div class="carousel-item">
                <img src="<?= base_url('assets/img-kegiatan/') . $d['img'] . '.jpg' ?>" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h4 class="capt m-0"><?= $d['capt']; ?></h4>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!-- ABOUT -->
<div class="about">
    <div class="container my-5" id="about">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-6">
                <h1 class="ah1">Selamat datang di <br> HIMATIKA UTY</h1>
                <p class="ap">HIMATIKA UTY adalah sebuah Himpunan otonom yang berada lansung dibawah koordinasi Ketua Program Studi Informatika di Universitas Teknologi Yogyakarta</p>
            </div>
            <div class="col-md-4 ">
                <img src="<?= base_url('assets/img/himatikalogo.png') ?>" class="logo-about aimg " alt="">
            </div>
        </div>
    </div>
</div>
<!-- Visi Misi -->
<div class="visi-misi bg-light py-5" id="visi-misi">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="text-center">VISI & MISI</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10 text-justify">
                <h4 class="text-left mb-1">VISI</h4>
                <p>Menjadi program studi yang unggul dalam karakter dan teknologi web-mobile serta berwawasan global, pada tahun 2024 di Wilayah Indonesia.</p>
                <h4 class="text-left mb-1">MISI</h4>
                <ol>
                    <li>Menyelenggarakan pendidikan terbaik di bidang teknologi web-mobile untuk mencetak sumber daya manusia pada berbagai profesi, industri, dan bisnis sehingga dapat memberikan kontribusi terbaik dan mempunyai daya saing tinggi dalam era kompetisi.</li>
                    <li>Menyelenggarakan penelitian dan pengembangan ilmu pengetahuan dan teknologi, khususnya di bidang teknologi web-mobile untuk menegakkan kemajuan dalam disiplin akademik.</li>
                    <li>Menyelenggarakan pengabdian kepada masyarakat, institusi dan lembaga pemerintahan maupun swasta dalam rangka pelaksanaan Tri Dharma Perguruan Tinggi, memanfaatkan ilmu pengetahuan dan teknologi khususnya bidang teknologi web-mobile untuk meningkatkan kesejahteraan hidup masyarakat sekaligus menjalin kerjasama dengan berbagai kalangan baik dalam maupun luar negeri dalam rangka pengembangan dan peningkatan kualitas PS.</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<!-- AGENDA -->
<div class="agenda pb-5" id="agenda">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="my-5 text-center"> <b> Agenda </b></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="main-timeline8">
                    <?php foreach ($agenda as $a) : ?>
                        <div class="timeline">
                            <span class="timeline-icon"></span>
                            <span class="year"><?= $a['tanggal'] ?></span>
                            <div class="timeline-content">
                                <h3 class="title text-dark"> <?= $a['judul'] ?></h3>
                                <p class="description" maxlenght="100"><?= $a['deskripsi'] ?></p>
                                <?php if ($a['link']) {
                                    $link = $a['link']; ?>
                                    <a href="<?= base_url("$link") ?>">More..</a>
                                <?php } ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>