<?php

//header("Content-Type: image/png");

$file = "wallpaper.jpg";

$new_width = 256;
$new_height = 256;

$data = getimagesize($file);
//var_dump($data);

list($old_width, $old_height) = $data;

$new_image = imagecreatetruecolor($new_width, $new_height);
$old_image = imagecreatetruecolor($file);

imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_width, $new_height, $old_width, $old_height);
imagejpeg($image, "certificado-".date("Y-m-d").".jpg",10);

// destroi limpando a imagem da memoria do php
imagedestroy($image);


 ?>
