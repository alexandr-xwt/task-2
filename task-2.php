<?php

header('Content-type: image/png');
$wSour = 800;
$hSour = 800;
$wDest = 200;
$hDest = 100;
// Создание изображений
$imSour = imagecreate($wSour, $hSour);
$imDest = imagecreatetruecolor($wDest, $hDest);
// Серый фон
$imSourBg = imagecolorallocate($imSour, 160, 160, 160);
// palette to true color
imagepalettetotruecolor($imSour);
// Изменение размеров
imagecopyresampled($imDest, $imSour, 0, 0, 0, 0, $wDest, $hDest, $wSour, $hSour);
// true color to palette
imagetruecolortopalette($imDest, false, 255);
// Вывод изображения на экран
imagepng($imDest);
// Освобождение памяти
imagedestroy($imSour, $imDest);
