<?php
if (isset($_GET['cheeses'])) {
    $cheeses=$_GET["cheeses"];
}
else
	$cheeses=0;
if (isset($_GET['fraises'])) {
	 $fraises=$_GET["fraises"];
}
else
	$fraises=0;
if (isset($_GET['id'])) {
    $id=$_GET["id"];
}
else
	$id=0;
$width = 130; // latimea fisierului in pixeli
$height = 99; // lungimea fisierului in pixeli
$im = imagecreatefromjpeg('http://transformice.com/images/x_transformice/x_inventaire/'.$id.'.jpg');
$ih = imagecreate($width, $height); // cream imaginea
$ih = imagecreatefrompng('image/item.png');
$colorchesse = imagecolorallocate($ih, 186, 189, 47); 
$colorfrases = imagecolorallocate($ih, 203, 84, 107);
$gray = imagecolorallocate($im, 0, 0, 0);
$font = 'image/arial.ttf';
$font2 = 'image/arialbd.ttf';
imagefttext($ih, 14, 0, 114, 22, $gray, $font2, $cheeses);
imagettftext($ih, 14, 0, 113, 21, $colorchesse, $font, $cheeses);
imagefttext($ih, 14, 0, 114, 43, $gray, $font2, $fraises);
imagettftext($ih, 14, 0, 113, 42, $colorfrases, $font, $fraises);
imagesavealpha($ih, true);
$color = imagecolorallocatealpha($ih, 0, 0, 0, 127);
imagefill($ih, 0, 0, $color);
$logoWidth=imagesx($im);
$logoHeight=imagesy($im);
imagecopy($ih, $im, 66-$logoWidth, 56-$logoHeight, 0, 0, $logoWidth, $logoHeight);
header('Content-type: image/png');
imagepng($ih); // afisam imaginea
 
imagedestroy($ih); // golim memoriea
?>