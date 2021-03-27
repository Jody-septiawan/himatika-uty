<?php

$oprec = $oprec[0];
if (empty($oprec)) {
    redirect('oprec');
}

$nim = $oprec['nim'];
$nama = $oprec['nama'];
$divisi = $oprec['divisi'];
$ket = $oprec['status_id'];
$status = $oprec['status'];
$angkatan = $oprec['angkatan'];

$type = ".jpg";

if ($angkatan == '2019') {
    $type = ".JPG";
}


?>
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="kotak-result rounded my-5 py-5 px-5">
                <div class="row">
                    <div class="col-md-12">
                        <p class="h5">Pengumuman final OPREC <br> pengurus HIMATIKA UTY 2020/2021</p>
                        <hr class="bg-light m-0 mb-5">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <img src="https://sia.uty.ac.id/fotokecil/<?= $nim . $type; ?>" class="foto img-thumbnail rounded" alt="Foto">
                    </div>
                    <div class="col-md-8 text-left ">
                        <table>
                            <tr class="text-block teks">
                                <td class="atrbt pr-1">Nim</td>
                                <td class="pr-1">:</td>
                                <td class="value "><?= $nim; ?></td>
                            </tr>
                            <tr class="text-block teks">
                                <td class="atrbt pr-4">Nama</td>
                                <td class="pr-3">:</td>
                                <td class="value"><?= $nama ?></td>
                            </tr>
                        </table>
                        <div class="value mt-3 teks">Berdasarkan keputusan panitia, anda dinyatakan
                            <b class="<?php if ($ket == 1) {
                                            echo "texte-vert";
                                        } else {
                                            echo "text-danger";
                                        } ?>"><?= $status; ?></b>
                            <?php if ($ket == 1) { ?>sebagai <b class="text-light">Divisi <?= $divisi ?></b><?php } ?>
                        </div>
                        <?php if ($ket == 1) { ?>
                            <div class="d-flex justify-content-center">
                                <a href="<?= base_url('file/surat/') . $nim . ".pdf" ?>" target="_blank" type="application/octet-stream" download="<?= base_url('file/surat/') . $nim . ".pdf" ?>"><b class="submit-button w-button mt-5">Download PDF <i class="fas fa-file-pdf"></i></b></a>
                            </div>
                        <?php } else { ?>
                            <div class="text-center h5 mt-3"> Tetap semangat &#128513;</div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <a href="<?= base_url('oprec') ?>" class="btn btn-outline-light p-0 px-5 mb-5">Kembali</a>
        </div>
    </div>
</div>