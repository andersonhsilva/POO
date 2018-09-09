<?php

header("Content-Type: image/jpeg");

$file = "wallpaper.jpg";

// pega as dimensoes atuais do arquivo
$data = getimagesize($file);
//var_dump($data);
$old_width = $data[0];
$old_height = $data[1];

// define as novas dimensoes do arquivo mantendo as proporcoes
$new_width = (int) ($old_width * 0.15);
$new_height = (int) ($old_height * 0.15);

$new_image = imagecreatetruecolor($new_width, $new_height);
$old_image = imagecreatefromjpeg($file);

// eixo X 0,0 e Y 0,0
imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_width, $new_height, $old_width, $old_height);

imagejpeg($new_image); // exibe imagem na tela

// limpra a memoria do php
imagedestroy($old_image);
imagedestroy($new_image);

 ?>
