<?php
if (isset($_GET['type'])) {
    $type=$_GET["type"];
}
else
	$type=0;
if (isset($_GET['value'])) {
	 $value=$_GET["value"];
}
else
	$value=0;
if (isset($_GET['can'])) {
    $can=$_GET["can"];
}
else
	$can=1;
$width = 110; // latimea fisierului in pixeli
$height = 55; // lungimea fisierului in pixeli
$font = 'image/arial.ttf';
$font2 = 'image/arialbd.ttf';
if ($type == 0){
	if ($can == 0) {
		$ih = imagecreate($width, $height); // cream imaginea		
		$ih = imagecreatefrompng('image/cheesesDisabled.png');
		$gray = imagecolorallocate($ih, 0, 0, 0);	
		$colorchesse = imagecolorallocate($ih, 186, 189, 47);
		imagefttext($ih, 16, 0, 34, 38, $gray, $font2, $value);
		imagettftext($ih, 16, 0, 33, 37, $colorchesse, $font, $value);		
		imagesavealpha($ih, true);
		$color = imagecolorallocatealpha($ih, 0, 0, 0, 127);
		imagefill($ih, 0, 0, $color);
	}
	else {
		$ih = imagecreate($width, $height); // cream imaginea		
		$ih = imagecreatefrompng('image/cheesesEnabled.png');
		$gray = imagecolorallocate($ih, 0, 0, 0);	
		$colorchesse = imagecolorallocate($ih, 186, 189, 47); 
		imagefttext($ih, 16, 0, 34, 38, $gray, $font2, $value);
		imagettftext($ih, 16, 0, 33, 37, $colorchesse, $font, $value);		
		imagesavealpha($ih, true);
		$color = imagecolorallocatealpha($ih, 0, 0, 0, 127);
		imagefill($ih, 0, 0, $color);
	}
}
else{
	if ($can == 0) {
		$ih = imagecreate($width, $height); // cream imaginea		
		$ih = imagecreatefrompng('image/fraisesDisabled.png');
		$gray = imagecolorallocate($ih, 0, 0, 0);
		$colorfrases = imagecolorallocate($ih, 203, 84, 107);
		imagefttext($ih, 16, 0, 34, 38, $gray, $font2, $value);
		imagettftext($ih, 16, 0, 33, 37, $colorfrases, $font, $value);		
		imagesavealpha($ih, true);
		$color = imagecolorallocatealpha($ih, 0, 0, 0, 127);
		imagefill($ih, 0, 0, $color);
	}
	else {
		$ih = imagecreate($width, $height); // cream imaginea		
		$ih = imagecreatefrompng('image/fraisesEnabled.png');
		$gray = imagecolorallocate($ih, 0, 0, 0);
		$colorfrases = imagecolorallocate($ih, 203, 84, 107);
		imagefttext($ih, 16, 0, 34, 38, $gray, $font2, $value);
		imagettftext($ih, 16, 0, 33, 37, $colorfrases, $font, $value);
		imagesavealpha($ih, true);
		$color = imagecolorallocatealpha($ih, 0, 0, 0, 127);
		imagefill($ih, 0, 0, $color);
	}	
}
header('Content-type: image/png');
imagepng($ih); // afisam imaginea
 
imagedestroy($ih); // golim memoriea
?>