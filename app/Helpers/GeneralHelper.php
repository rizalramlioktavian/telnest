<?php

// Helper Picture
if (!function_exists('makePicture')) // jika fungsi makePicture belum ada maka buat fungsi makePicture
{
    function makePicture($fontPath, $dest, $char) // membuat fungsi makePicture dengan parameter fontPath, dest, dan char
    {
        $path = $dest; // path untuk menyimpan gambar
        $image = imagecreate(200, 200); // membuat gambar dengan ukuran 200x200
        $red = rand(0, 255); // warna merah
        $green = rand(0, 255); // warna hijau
        $blue = rand(0, 255); // warna biru
        imagecolorallocate($image, $red, $green, $blue); // memberikan warna pada gambar random
        $textcolor = imagecolorallocate($image, 255, 255, 255); // memberikan warna pada text
        imagettftext($image, 100, 0, 55, 150, $textcolor, $fontPath, $char); // membuat text pada gambar
        imagepng($image, $path); // membuat gambar dengan format png
        imagedestroy($image); // menghapus gambar
        return $path; // mengembalikan path gambar yang telah dibuat
    }
}
