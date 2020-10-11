<?php
function uploadFoto($namaF, $dir, $size)
{
    $fileupl = $dir . $namaF;
    // Simpan Original File
    move_uploaded_file($_FILES['foto']['tmp_name'], $fileupl);

    // Identitas File Original
    $imgOri = imagecreatefromjpeg($file_upl);
    $lebar = imagesx($imgOri);
    $tinggi = imagesy($imgOri);

    // Kecilkan size
    $thm_lbr = $size;
    $thm_tg = ($thm_lbr / $lebar) * $tinggi;

    // Proses resize
    $thumbImg = imagecreatetruecolor($thm_lbr, $thm_tg);
    imagecopyresampled($thumbImg, $imgOri, 0, 0, 0, 0, $thm_lbr, $thm_tg, $lebar, $tinggi);

    // Simpan hasil resize
    imagejpeg($thumbImg, $dir . "test__" . $namaF);

    // Hapus file dalam memori
    imagedestroy($imgOri);
    imagedestroy($thumbImg);
}

function resizeFoto($img, $lebar = 0, $tinggi = 0)
{
    if ($lebar == 0 && $tinggi == 0) $lebar = 50;
    $img1= imagecreatefromjpeg($img);
    $lebar1 = imagesx($img1);
    $tinggi1 = imagesy($img1);
    $lebar2 = 0;
    $tinggi2 = 0;

    if ($lebar>0&&$lebar1>$lebar) {
        $lebar2 = $lebar;
        $tinggi2 = ($lebar2/$lebar1)*$tinggi1;
        $tinggi2=round($tinggi2);
    }
    elseif ($tinggi>0&&$tinggi1>$tinggi) {
        $tinggi2 = $tinggi;
        $lebar2 = ($tinggi2/$tinggi1)*$lebar1;
        $lebar2 = round($lebar2);
        resizeFoto($dest,300);
    }
    if ($lebar2<$lebar1||$tinggi2<$tinggi1) {
        $img2 = imagecreatetruecolor($lebar2,$tinggi2);
        imagecopyresized($img2,$img1,0,0,0,0,$lebar2,$tinggi2,$lebar1,$tinggi1);
        imagejpeg($img2,$img,90);
    }
}
?>