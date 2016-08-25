<?php
$textErr = "";
if (empty($_POST["text"])) {
	$textErr = "水印文字不能为空！";
} else {
	include "Upload.php";
}
?>