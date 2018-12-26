<?php
	namespace app\index\controller;
    header('Access-Control-Allow-Origin:*');
	use think\Controller;
	use think\Db;
	use think\request;

	class First extends Controller{
		/**
		 * 注册页面
		 * @return [type] [description]
		 */
		public function index(){
			#视图
			return $this->fetch('index');
		}
		/**
		 * 注册信息入库
		 * @return [type] [description]
		 */
		public function insert(){
			#通过post获取传输过来的数据
			$data=input();
			#判断手机号是否为空
			if(empty($_POST['telphone'])){
				$array['status']=3;
				$array['msg']='手机号不能为空';
			}
			#判断密码是否为空
			if(empty($_POST['password'])){
				$array['status']=4;
				$array['msg']='密码不能为空';
			}
			#判断确认密码是否为空
			if(empty($_POST['password2'])){
				$array['status']=5;
				$array['msg']='确认密码不能为空';
			}
			#判断邮箱是否为空
			if(empty($_POST['email'])){
				$array['status']=6;
				$array['msg']='邮箱不能为空';
			}
			#如果两次密码一致就注册成功，否则注册失败
			if($data['password']==$data['password2']){
				$telphone=$data['telphone'];
				$res=Db::table('register')->where('telphone',$telphone)->find();
				# var_dump($res);
				if($res){
					$array['status']=8;
					$array['msg']='手机号已存在';
				}
				else{
					$res=[
						'telphone'=>$data['telphone'],
						'password'=>md5($data['password']),
						'email'=>$data['email'],
						'date'=>date('Y-m-d H:i:s')
					];
					$info=Db::table('register')->insert($res);
					if($info){
						$array['list']=$res;
						$array['status']=200;
						$array['msg']='注册成功';
					}
					else{
						$array['status']=201;
						$array['msg']='注册失败';
					}
				}
			}
			else{
				$array['status']=7;
				$array['msg']='两次密码不一致';
			}		
			return json($array);
		}
	}
?>