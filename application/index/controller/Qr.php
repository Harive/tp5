<?php
	namespace app\index \controller;

	use think\Controller;
	use think\Db;
	header('Access-Control-Allow-Origin:*');  //支持全域名访问，不安全，部署后需要固定限制为客户端网址

	header('Access-Control-Allow-Methods:POST,GET,OPTIONS,DELETE'); //支持的http 动作

	header('Access-Control-Allow-Headers:x-requested-with,content-type');  //响应头 请按照自己需求添加。

	class Qr extends Controller{
		/**
		 * 添加页面
		 * @return [type] [description]
		 */
		public function index(){
			return $this->fetch('index');
		}

		public function insert(){
			$data=$_POST;
			// var_dump($data);
			$data=[
				'qr_date'=>date('Y-m-d H:i:s'),
				'qr_info'=>input('qr_info'),
				'qr_tel'=>input('qr_tel')
			];
			$res=Db::table('qr')->insert($data);
			if($res){
				$array['list']=$data;
				$array['status']=1;
				$array['msg']='添加成功';
			}
			else{
				$array['status']=2;
				$array['msg']='添加失败';
			}
			return json($array);
		}
		/**
		 * 展示
		 * @return [type] [description]
		 */
		public function show(){
			$data=Db::table('qr')->select();
			if($data){
				$array['list']=$data;
				$array['status']=1;
				$array['msg']='查询成功';
			}
			else{
				$array['status']=2;
				$array['msg']='查询失败';
			}
			return json($array);
		}
	}