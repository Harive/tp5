<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"F:\four\wamp64\www\tp5\public/../application/index\view\register\index.html";i:1545388615;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>注册</title>
    <style>
        .right{
            text-align: right;
        }
        .left{
            text-align: left;
        }
    </style>
</head>
<body>
<form action="<?php echo url('/index/Register/insert'); ?>" method="post">
    <table>
        <tr>
            <td class="right">手机号</td>
            <td class="left"><input type="text" name="telphone"></td>
        </tr>
        <tr>
            <td class="right">密码</td>
            <td class="left"><input type="password" name="password"></td>
        </tr>
        <tr>
            <td class="right">确认密码</td>
            <td class="left"><input type="password" name="password2"></td>
        </tr>
        <tr>
            <td class="right">邮箱</td>
            <td class="left"><input type="email" name="emailtenk"></td>
        </tr>
        <tr>
            <td class="right"></td>
            <td class="left"><input type="submit" value="注册"></td>
        </tr>
    </table>
<!--</form>-->
</body>
</html>

