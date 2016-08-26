<?php
/* 图片水印处理代码 */

// 源图像位置
$scr = "upload/".$_FILES["file"]["name"][0];
// 水印图像位置
$font_scr = "upload/".$_FILES["file"]["name"][1];
// 获取图像属性信息
$info = getimagesize($scr);
$font_size = getimagesize($font_scr);

// 获取源图像类型的文件后缀
$type = image_type_to_extension($info[2], false);

// 把图像复制到内存中
$fun = "imagecreatefrom{$type}";
$image = $fun($scr);
$font_image = imagecreatefrompng($font_scr);

// 把水印复制到源图像中
imagecopy($image, $font_image, 15, 15, 0, 0, $font_size[0], $font_size[1]);

// 浏览器输出图像
header("content-type:".$info["mime"]);
$func = "image{$type}";
$func($image);

// 保存图像
$func($image, $scr);
// 释放图像内存
imagedestroy($image);

?>