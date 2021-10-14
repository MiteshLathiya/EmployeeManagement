<?php
session_start();
$rand_num=rand(11111,99999);
$_SESSION['CODE']=$rand_num;
$layer=imagecreatetruecolor(70,30);
$captcha_bg=imagecolorallocate($layer,255, 0, 0);
imagefill($layer,0,0,$captcha_bg);
$captcha_text_color=imagecolorallocate($layer,245,245,245);
imagestring($layer,5,5,5,$rand_num,$captcha_text_color);
header('Content-Type:image/jpeg');
imagejpeg($layer);
?>