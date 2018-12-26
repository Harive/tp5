<?php
namespace app\index\controller;
header('Access-Control-Allow-Origin:*');
use app\index\model\Index;
use think\Controller;
use think\Request;

class admin extends Controller
{
    //  用来直接检查接口安全
    public function key()
    {
        $key = file_get_contents('key.txt');
        if ($key == input('key')) {
            return 1;
        } else {
            return 0;
        }
    }

    public function index()
    {
        // 对比秘钥是否一致
        if ($this->key() == 1) {
            $model = new Index();//实例化model
            $data = $model->type();//对象指向方法，调用model逻辑层数据
            return json(['data' => $data, 'code' => 1, 'message' => '操作完成']);//也可以json_encode()函数
        } else {
            $data = ['name' => 'status', 'message' => '操作失败'];

            return json(['data' => $data, 'code' => 2, 'message' => '秘钥不正确']);
        }

    }

    public function indexs(Request $request){
        if ($this->key()==1){
            $model = new Index();
//            $res = $request->all();
            $res = $request->post();
//        print_r($res);die;
            $up =[
                'nickname' => $res['nickname'],
                'email' => $res['email'],
                'gender' => $res['gender'],
                'signature' => $res['signature'],
                'telphone' => $res['telphone'],
            ];
            $model->types($up);
            return json(['model'=>$model,'code'=>1, 'message'=>"操作成功"]);
        }else{
            $data = ['name'=>'status','messag
            e'=>'操作失败'];
            return json(['data' => $data, 'code' => 2, 'message' => '秘钥不正确']);
        }
    }

    public function priv(){
        if($this->key()==1){
            $model = new Index();
            $date=$model->privs();
            return json(['date'=>$date,'code'=>1, 'message'=>"操作成功"]);
        }else{
            $data = ['name'=>'status','message'=>'操作失败'];

            return json(['data' => $data, 'code' => 2, 'message' => '秘钥不正确']);
        }
    }

    public function live(){
        if($this->key()==1){
            $model = new Index();
            $deta=$model ->livees();
            return json (['data'=>$deta,'code'=>1,'message'=>"操作成功"]);
        }else{
            $deta = ['name'=>'status','message'=>'操作失败'];
            return json(['deta'=>$deta,'code'=>2,'message'=>'密钥不正确']);
        }
    }
}

