<select name="font" multiple class="form-control" id="font">
<?php
//* 字体文件夹字体列表 */

function file_list($path) {
	$dh = opendir($path);
	while (($file = readdir($dh)) !== false) {
		if ($file !='.' && $file !='..') {
			echo '<option>'.$file.'</option>'.'<br />';
		}
	}
	closedir($dh);
}

file_list("font/");
?>
</select>