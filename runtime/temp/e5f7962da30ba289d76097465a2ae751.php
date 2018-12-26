<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"F:\four\wamp64\www\tp5\public/../application/index\view\qr\index.html";i:1545787332;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<form action="<?php echo url('index/qr/insert'); ?>" method="post" enctype="multipart/form-data">
		<table>	
			<tr>
				<td>联系信息：</td>
				<td><input type="text" name="qr_info"></td>
			</tr>
			<tr>
				<td>联系电话：</td>
				<td><input type="text" name="qr_tel"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="添加"></td>
			</tr>
		</table>
	</form>
</body>
</html>