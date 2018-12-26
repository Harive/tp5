<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"F:\four\wamp64\www\tp5\public/../application/index\view\register\vue.html";i:1545828858;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <title>Vue 测试实例 - 菜鸟教程(runoob.com)</title>
    <script src="https://cdn.staticfile.org/vue/2.4.2/vue.min.js"></script>
    <script src="https://cdn.staticfile.org/vue-resource/1.5.1/vue-resource.min.js"></script>
</head>
<body>
<div id="box">
    <table border="1" cellpadding="0" cellspacing="0">
        <tr>
            <td style="width:130px;height:30px;">id</td>
            <td style="width:130px;height:30px;">图片</td>
            <td style="width:130px;height:30px;">状态</td>
            <td style="width:130px;height:30px;">描述</td>
        </tr>
        <tr v-for="v in msg">
            <td style="width:130px;height:30px;">{{v.id}}</td>
            <td style="width:130px;height:30px;">{{v.car_photo}}</td>
            <td style="width:130px;height:30px;">{{v.details}}</td>
            <td style="width:130px;height:30px;">{{v.car_miao}}</td>
        </tr>
    </table>
</div>
<script type = "text/javascript">
    window.onload = function(){
        var vm = new Vue({
            el:'#box',
            data:{
                msg:[],
            },
            mounted:function () {
                this.get();
            },
            methods:{
                get:function(){
                    //发送get请求
                    this.$http.get("http://www.tp.com/index.php/index/carousel/history",{emulateJSON:true}).then(function(res){
                        console.log(res.body);
                        this.msg=res.body.list;
                    },function(){
                        console.log('请求失败处理');
                    });
                }
            }
        });
    }
</script>
</body>
</html>