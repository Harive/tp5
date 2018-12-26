<?php
	namespace app\index\controller;

    header('Access-Control-Allow-Origin:*');
    use think\Controller;
	use think\Db;
	use think\request;

	class Carousel extends Controller{
		/**
		 * 添加页面
		 * @return [type] [description]
		 */
		public function index(){
			return $this->fetch('index');
		}
		/**
		 * 轮播图添加
		 * @return [type] [description]
		 */
		public function insert(){
			$data=$_POST;
			// var_dump($data);
			$file=request()->file('car_photo');
			// var_dump($file);die;
			if(isset($file)){
				$info=$file->move(ROOT_PATH.'public/uploads');
				if($info){
					$a=$info->getSaveName();
					$imgp=str_replace("//","/",$a);
					$imgpath='uploads/'.$imgp;
					$data['car_photo']=$imgpath;
				}
				else{
					echo $file->getError();
				}
			}
			$data=[
				'car_photo'=>$imgpath,
				'car_date'=>date('Y-m-d H:i:s'),
				'car_sort'=>input('car_sort'),
				'car_status'=>input('car_status')
			];
			$res=Db::name('carousel')->insert($data);
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

		//查询全部的
		public function show(){

			$data=Db::table('carousel')->select();
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
        //查询cos的
        public function shows(){

            $data=Db::table('carousel')->where('pid',3)->select();
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
        //查询游戏的
        public function shoes(){

            $data=Db::table('carousel')->where('pid',1)->select();
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
        //查询直播的
        public function shses(){

            $data=Db::table('carousel')->where('pid',2)->select();
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

        //查询一条
        //查询直播的
        public function shes(){

            $data=Db::table('carousel')->where('pid',2)->find();
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
        //查询英雄联盟
        public function ying(){

            $data=Db::name('carousel')->where('car_miao','英雄联盟')->select();
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

        //查询炫舞
        public function xuan(){

            $data=Db::table('carousel')->where('car_miao','炫舞')->find();
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

        //查询刺激战场
        public function ci(){

            $data=Db::table('carousel')->where('car_miao','刺激战场')->find();
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
        //查询逆战
        public function ni(){

            $data=Db::table('carousel')->where('car_miao','逆战')->find();
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

        //查询地下城
        public function di(){

            $data=Db::table('carousel')->where('car_miao','地下城')->find();
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

        //查询地cos
        public function cos(){

            $data=Db::table('carousel')->where('car_miao','cos')->find();
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
        //查询地直播
        public function zhi(){

            $data=Db::table('carousel')->where('car_miao','直播')->find();
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

        //查询地剑灵
        public function jain(){

            $data=Db::table('carousel')->where('car_miao','剑灵')->find();
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

        //观看历史
        public function history(){

            $data=Db::table('carousel')->where('pidf','1,2')->find();
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