<!DOCTYPE html>
<html>
  <head>
<!-- 新 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- 可选的Bootstrap主题文件（一般不用引入） -->
<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </head>
<body>
<div class="container-fluid">
  <div class="row-fluid">
    <div class="span12">
      <div class="tabbable" id="tabs-495679">
        <ul class="nav nav-tabs">
          <li class="active">
            <a href="#panel-525793" data-toggle="tab">文字水印</a>
          </li>
          <li>
            <a href="#panel-172575" data-toggle="tab">图片水印</a>
          </li>
          
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="panel-525793">
            <p>
              <form action="Upload.php" class="form-inline" method="POST" enctype="multipart/form-data">
                <label for="content">水印文字：</label>
                <input type="text" name="content" class="form-control" id="content"  value="输入水印文字">
                <br /><br />
                <label for="font">字体选择：</label>
                <?php include "font_list.php"; ?>
                <br /><br />
                <label for="size">字体大小：</label>
                <?php include "font_size.php"; ?>
                <br /><br />
                <label for="x">横向位置：</label>
                <input type="text" name="x" class="form-control" id="x" value="20">
                <br /><br />
                <label for="x">竖向位置：</label>
                <input type="text" name="y" class="form-control" id="y" value="30">
                <br /><br />
                <input type="file" name="file[]" id="file">
                <br /><br />
                <class>
                  <button type="submit" class="btn btn-default" name="wzsy">提交</button>
                </class>
                
              </form>
            </p>
          </div>
          <div class="tab-pane" id="panel-172575">
            <p>
              <form action="Upload.php" class="form-inline" method="POST" enctype="multipart/form-data">
              <label for="file">源图片：</label>
              <input type="file" name="file[]" id="file" >
              <br /><br />
              <label for="file">水印图片：</label>
              <input type="file" name="file[]" id="file">
              <br /><br />
              <class>
              <button type="submit" class="btn btn-default" name="tpsy">提交</button>
              </class>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




</body>
