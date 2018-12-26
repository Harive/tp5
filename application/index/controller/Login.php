<?php
	namespace app\index\controller;

	use think\Controller;
	use think\Db;
	header('Access-Control-Allow-Origin:*');  //支持全域名访问，不安全，部署后需要固定限制为客户端网址

	header('Access-Control-Allow-Methods:POST,GET,OPTIONS,DELETE'); //支持的http 动作

	header('Access-Control-Allow-Headers:x-requested-with,content-type');  //响应头 请按照自己需求添加。

	class Login extends Controller{
		/**
		 * 登录页面
		 * @return [type] [description]
		 */
		public function index(){
			return $this->fetch('index');
		}
		/**
		 * 登录
		 * @return [type] [description]
		 */
		public function login(){
			$data=input();
			// var_dump($data);
			if(empty($_POST['telphone'])){
				$array['status']=3;
				$array['msg']='手机号为空';
			}
			if(empty($_POST['password'])){
				$array['status']=4;
				$array['msg']='密码为空';
			}
			$telphone=input('telphone');
			// var_dump($telphone);die;
			$password=input('password');
			$res=Db::table('register')->where(array('telphone'=>$telphone,'password'=>md5($password)))->find();
			// var_dump($res);die;
			if($res){
				$array['list']=$res;
				$array['status']=1;
				$array['msg']='登录成功';
				session('telphone',$res['telphone']);
			}
			else{
				$array['status']=2;
				$array['msg']='登录失败';

			}
			return json($array);
		}
	}