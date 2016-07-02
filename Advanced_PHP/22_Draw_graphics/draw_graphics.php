<?php
$image = imagecreate(500, 300);
$white = imagecolorallocate($image, 0xFF, 0xFF, 0xFF); 
$black = imagecolorallocate($image, 0x00, 0x00, 0xf0); 
imagefilledrectangle($image, 250, 50, 150, 150, $black);
header("Content-Type: image/png"); 
imagepng($image);
?>
