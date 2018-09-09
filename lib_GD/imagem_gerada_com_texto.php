<?php
/*
    ATENÇÃO! Para que o codigo a baixo funciona tem que o php ter a biblioteca GD adicionada ao seu extension_dir do php.ini
*/
header("Content-Type: image/png");

$image = imagecreate(256, 256);
$black = imagecolorallocate($image, 0, 0, 0);
$red = imagecolorallocate($image, 255, 0, 0);

imagestring($image, 5, 60, 120, "Curso de PHP 7", $red);
imagepng($image);
imagedestroy($image);

 ?>
