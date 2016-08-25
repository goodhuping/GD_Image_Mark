<!DOCTYPE html>
<html>
<head>
  <style>
  	.error {color: #FF0000;}
  </style>
</head>
<body>
<form action="upload.php" method="POST" enctype="multipart/form-data">
  水印文字：<input type="text" name="content" value="www.tiange.me">
  <br /><br />
  字体选择：
  <?php include "font_list.php"; ?>
  <br /><br />
  横向位置：<input type="text" name="x" value="20">
  <br /><br />
  竖向位置：<input type="text" name="y" value="30">
  <br /><br />
  字体大小：
  <?php include "font_size.php"; ?>
  <br /><br />
  <label for="file">选择图片：</label>
  <input type="file" name="file" id="file">
  <br /><br />
  <input type="submit" name="submit">
</form>
</body>
