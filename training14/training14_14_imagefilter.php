<?php
$image = imagecreatefrompng('training14_2_elephant.png');

imagefilter($image, IMG_FILTER_NEGATE);

header('Content-Type: image/png');
imagepng($image);
imagedestroy($image);
