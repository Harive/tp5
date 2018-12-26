<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"F:\four\wamp64\www\tp5\public/../application/index\view\login\index.html";i:1545785515;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<form action="<?php echo url('index/login/login'); ?>" method="post">
		<table>
			<tr>
				<td>手机号：</td>
				<td><input type="text" name="telphone"></td>
			</tr>
			<tr>
				<td>密码：</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="登录"></td>
			</tr>
		</table>
	</form>
</body>
</html>