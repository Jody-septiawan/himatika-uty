<?php

$message =  $this->session->flashdata('message');

if (!empty($message)) { ?>
    <script>
        alert('<?= $message; ?>')
    </script>
<?php }

?>
<div class="header">
    <div style="opacity:0" class="wallpaper"></div>
    <div data-w-id="53ba0934-da0c-3e01-786d-50be00f1295e" style="opacity:0" class="section header">
        <div class="bloc-logo"><img src="<?= base_url('assets/img/title.svg') ?>" style="-webkit-transform:translate3d(0, 70PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 70PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 70PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 70PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" alt="" class="logo" /></div>
        <div class="flexbox-scroll">
            <h1 class="heading-8">Scroll to start</h1>
            <div data-w-id="ba81e94e-400f-1c07-8916-20142a47bb29" data-animation-type="lottie" data-src="https://uploads-ssl.webflow.com/5e90237fd658d47cdc639a3d/5ea18cef18475f90d85bc2e6_scroll.json" data-loop="1" data-direction="1" data-autoplay="0" data-is-ix2-target="1" data-renderer="svg" data-default-duration="2" data-duration="0" class="boucle-lottie scroll ad"></div>
        </div>
        <div class="gradient-header"></div>
    </div>
    <div data-w-id="8744abad-b0ef-7f41-df9e-5f253accc9b3" class="section _150vh">
        <div data-w-id="0802d61b-c4f1-df12-0e8d-a8ff2a44bf9d" class="div-block-11">
            <h1 class="heading-5">Doing everything together and having a solid team is the best experience to
                improve.</h1>
            <h2 class="heading-9">by Google Translate</h2>
        </div>
        <div class="div-absolute"><img src="https://uploads-ssl.webflow.com/5e90237fd658d47cdc639a3d/5eb5261abde4bb61c8ab7868_rond-hachure-bleu.png" srcset="https://uploads-ssl.webflow.com/5e90237fd658d47cdc639a3d/5eb5261abde4bb61c8ab7868_rond-hachure-bleu-p-500.png 500w, https://uploads-ssl.webflow.com/5e90237fd658d47cdc639a3d/5eb5261abde4bb61c8ab7868_rond-hachure-bleu.png 800w" sizes="(max-width: 479px) 149.99998474121094px, (max-width: 767px) 31vw, 25vw" alt="" class="image-19" /></div>
        <div class="div-absolute"><img src="https://uploads-ssl.webflow.com/5e90237fd658d47cdc639a3d/5eb530735c02e6df9de47ba3_cercle_triangle.svg" alt="" class="image-20" /></div>
    </div>
</div>
<div style="display:flex" class="preloader">
    <div class="div-block-77">
        <div data-w-id="91e16964-b057-0da2-2bc2-167fb765cfba" data-animation-type="lottie" data-src="https://uploads-ssl.webflow.com/5e90237fd658d47cdc639a3d/5ea7386b68f68a2910fc9010_chemin%C3%A9e_chargement.json" data-loop="0" data-direction="1" data-autoplay="1" data-is-ix2-target="0" data-renderer="svg" data-default-duration="2" data-duration="0" class="boucle-lottie chargement"></div>
        <h1>Loading..</h1>
    </div>
</div>
<div class="histoire">
    <div class="section relative-01 cache-01">
        <div data-w-id="9c418382-7a8b-c3a3-f8ad-b1224f093d8a" class="box-personnage">
            <div data-w-id="9c418382-7a8b-c3a3-f8ad-b1224f093d8b" data-animation-type="lottie" data-src="https://uploads-ssl.webflow.com/5e90237fd658d47cdc639a3d/5eb55b9c4dc13a76e96e2dcf_personnage-sac-30fps.json" data-loop="0" data-direction="1" data-autoplay="0" data-is-ix2-target="1" data-renderer="svg" data-default-duration="2" data-duration="0" class="boucle-lottie personnage-sac"></div>
            <div data-w-id="d606da38-1541-1d22-603b-79d14c757c03" data-animation-type="lottie" data-src="https://uploads-ssl.webflow.com/5e90237fd658d47cdc639a3d/5eb55bba51528b2589c058c4_vent-30fps.json" data-loop="0" data-direction="1" data-autoplay="0" data-is-ix2-target="1" data-renderer="svg" data-default-duration="9" data-duration="4.5" class="boucle-lottie vent"></div>
            <div class="text-block">Iri bilang <em class="texte-vert">boss</em>
            </div>
        </div>
    </div>
    <div class="biseau-haut cache-01"></div>
    <div data-w-id="558ca4d1-a7aa-4837-063c-afcd7e470d14" class="page-cek-kelulusan">
        <div class="div-block-82">
            <img src="<?= base_url('assets/img/himatikalogo.png') ?>" class="image-15" />
            <div class="div-block-58">
                <h1 class="heading-5">Cari berdasarkan NIM</h1>
            </div>
            <div class="form-block w-form">
                <form method="post" action="<?= base_url('oprec/pengumuman') ?>">
                    <label for="nim" class="field-label">Nomor Induk Mahasiswa</label>
                    <input type="text" name="nim" maxlength="10" placeholder="Contoh: 5190411001" class="text-field w-input" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required />
                    <button type="submit" name="submit" class="submit-button w-button">Cek</button>
                </form>
            </div>
        </div>
        <div class="div-block-85">
            <p class="paragraphe-footer"><?php echo date('Y'); ?> © copyright by <a href="<?= base_url(''); ?>" class="link">Scientific Division</a>. All rights reserved</p>
        </div>
    </div>
</div>