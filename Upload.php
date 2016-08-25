<?php
/* 上传代码 */

// 判断错误代码，大于0表示出错
if ($_FILES["file"]["error"] > 0) {
	if ($_FILES["file"]["error"] == 4) {
		echo "请选择需要上传的图像！";
	} else {
		echo "错误代码：".$_FILES["file"]["error"];
	}

// 判断图像类型是否为jpeg或png格式且要小于1M
} else if (($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/png")
and ($_FILES["file"]["size"] < 1000000)) {

	// 将临时文件保存到upload目录中
	move_uploaded_file($_FILES["file"]["tmp_name"], "upload/".$_FILES["file"]["name"]);
	
	// 引用水印处理代码
	include "fontMark.php";
	//echo $_POST['fonts'];
// 类型或文件大小不符合，提示错误信息
} else {
	echo "Error：只能上传jpeg或png格式的图片，且不能大于1M";
}

?>