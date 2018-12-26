<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"F:\four\wamp64\www\tp5\public/../application/index\view\register\huya.html";i:1545639306;}*/ ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/vue@2.5.21/dist/vue.js"></script>
</head>
<body>
<div id="app">
    <tr v-for="site in sites">
        <td>{{site.nickname}}</td>
        <td>{{site.telphone}}</td>
        <td>{{site.email}}</td>
        <td>{{site.email_state}}</td>
    </tr>
</div>
<script type="text/javascript">
    var vm = new Vue({
        el:"#app",
        data:{
            sites:[
                {nickname:66666}
            ]
        }
    })
</script>
</body>
</html>