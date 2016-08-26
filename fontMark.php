<?php
/* 文字水印处理代码 */

// 图像位置
$scr = "upload/".$_FILES["file"]["name"][0];
// 获取图像属性信息
$info = getimagesize($scr);
// 获取图像类型的文件后缀
$type = image_type_to_extension($info[2], false);
// 把图像复制到内存中
$fun = "imagecreatefrom{$type}";
$image = $fun($scr);

// 字体
//$font = "font/msyh.ttc";
// 水印文字，从表单中获取
//$content = $_POST["content"];
// 文字颜色及透明度
$col = imagecolorallocatealpha($image, 255, 255, 255, 50);
// 写入文字到图像
imagettftext($image, $_POST['size'], 0, $_POST['x'], $_POST['y'], $col, 'font/'.$_POST['font'], $_POST["content"]);

// 浏览器输出图像
header("content-type:".$info["mime"]);
$func = "image{$type}";
$func($image);

// 保存图像
$func($image, $scr);
// 释放图像内存
imagedestroy($image);
?>