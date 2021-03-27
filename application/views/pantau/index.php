<!doctype html>
<html lang="en">
<meta http-equiv="refresh" content="5">

<head>
    <title>E-VOTING - HIMATIKA UTY</title>
    <!-- Required meta tags -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/png" href="<?= base_url('assets/img/himatikalogo.png') ?>" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            background: #002d52;
        }

        .segitiga-biru {
            margin: auto;
            width: 0;
            height: 0;
            border-top: 8px solid #004B87;
            border-left: 20px solid transparent;
            border-right: 20px solid transparent;
            margin-bottom: 0px;
        }

        .segitiga-kuning {
            margin: auto;
            width: 0;
            height: 0;
            border-top: 8px solid #FFCF40;
            border-left: 20px solid transparent;
            border-right: 20px solid transparent;
            margin-bottom: 0px;
        }

        .bg-kuning {
            background-color: #FFCF40;
        }

        .mess-top {
            background-color: #004B87;
        }

        .text-welcome {
            font-size: 20px;
            color: rgb(255, 255, 255);
        }

        .nilai-suara-masuk {
            font-size: 80px;
        }

        .suara-masuk {
            font-size: 40px;
        }

        .quick-count {
            font-size: 30px;
        }

        .img {
            width: 50%;
            height: 100%;
        }
    </style>
</head>

<body>
    <div class="row">
        <div class="col-md-12 mess-top py-2 text-center mx-0 px-0">
            <div class="text-welcome">E-VOTING <b>HIMATIKA UTY</b></div>
        </div>
        <div class="col-md-12 bg-kuning">
            <div class="segitiga-biru"></div>
        </div>
        <div class="col-md-12 main-bg">
            <div class="segitiga-kuning"></div>
        </div>
    </div>
    <!-- <?php var_dump($calon); ?> -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 text-center text-light">
                <p class="mb-0 suara-masuk">Suara masuk</p>
                <h1 class="mt-0 pt-0 nilai-suara-masuk mb-0"><?= $suara['masuk'] ?></h1>
                <?php
                $persen = round(($suara['masuk'] / 74) * 100, 1);
                ?>
                <div class="progress mx-5">
                    <div class="progress-bar" role="progressbar" style="width: <?= $persen; ?>%;" aria-valuenow="<?= $suara['masuk']; ?>" aria-valuemin="0" aria-valuemax="c2"><?= $persen; ?>%</div>
                </div>
            </div>
            <div class="col-md-4"></div>
            <?php if ($control['status'] == 1) : ?>
                <div class="col-md-12 my-1 mt-3">
                    <hr class="bg-secondary">
                </div>
                <div class="col-md-12 text-light text-center">
                    <p class="mb-0 quick-count">Quick Count</p>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12 text-center text-light">01</div>
                        <img class="img" src="https://sia.uty.ac.id/fotokecil/<?= $calon[0]['nim_ketua']; ?>.jpg" alt="">
                        <img class="img" src="https://sia.uty.ac.id/fotokecil/<?= $calon[0]['nim_wakil']; ?>.JPG" alt="">
                        <div class="col-md-12 text-center text-light mt-3"><?= $calon[0]['ketua']; ?></div>
                        <div class="col-md-12 text-center text-light"><?= $calon[0]['wakil']; ?></div>
                    </div>
                </div>
                <?php
                $calon1 = $calon1['suara1'];
                $calon2 = $calon2['suara2'];

                if ($calon1 == 0) :
                    $persenhitung1 = 0;
                else :
                    $persenhitung1 = round(($calon1 / $suara['masuk']) * 100, 1);
                endif;

                if ($calon2 == 0) :
                    $persenhitung2 = 0;
                else :
                    $persenhitung2 = round(($calon2 / $suara['masuk']) * 100, 1);
                endif;
                ?>

                <div class="col-md-4 mt-5">
                    <div class="mt-3 text-center text-light">01 <?= $calon1; ?></div>
                    <span class="progress align-middle">
                        <div class="progress-bar bg-success" role="progressbar" style="width: <?= $persenhitung1; ?>%;" aria-valuenow="<?= $calon1; ?>" aria-valuemin=" 0" aria-valuemax="<?= $suara['masuk']; ?>"><?= $persenhitung1; ?>%</div>
                    </span>
                    <div class="mt-3 text-center text-light">02 <?= $calon2; ?></div>
                    <span class="progress align-middle ">
                        <div class="progress-bar bg-success" role="progressbar" style="width: <?= $persenhitung2; ?>%;" aria-valuenow="<?= $calon2; ?>" aria-valuemin=" 0" aria-valuemax="<?= $suara['masuk']; ?>"><?= $persenhitung2; ?>%</div>
                    </span>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12 text-center text-light">02</div>
                        <img class="img" src="https://sia.uty.ac.id/fotokecil/<?= $calon[1]['nim_ketua']; ?>.jpg" alt="">
                        <img class="img" src="https://sia.uty.ac.id/fotokecil/<?= $calon[1]['nim_wakil']; ?>.JPG" alt="">
                        <div class="col-md-12 text-center text-light mt-3"><?= $calon[1]['ketua']; ?></div>
                        <div class="col-md-12 text-center text-light"><?= $calon[1]['wakil']; ?></div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>