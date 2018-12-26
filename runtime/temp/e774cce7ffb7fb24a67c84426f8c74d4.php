<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"F:\four\wamp64\www\tp5\public/../application/index\view\carousel\index.html";i:1545709071;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<form action="<?php echo url('index/carousel/insert'); ?>" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td>轮播图图片：</td>
				<td><input type="file" name="car_photo"></td>
			</tr>
			<tr>
				<td>轮播图状态：</td>
				<td>
					<input type="radio" name="car_status" value="1">显示
					<input type="radio" name="car_status" value="0">不显示
				</td>
			</tr>
			<tr>
				<td>轮播图排序：</td>
				<td><input type="text" name="car_sort"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="添加"></td>
			</tr>
		</table>
	</form>
</body>
</html>