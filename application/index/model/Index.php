<?php
namespace app\index\model;

use think\Db;

class Index{
    public function type(){
        $list = Db::name('user')->where('nickname','小脑斧')->select();
        return $list;//返回数据给控制器调用
    }
    public function types($data){
            $list = DB::name('user')->insert($data);
            return $list;
    }
    public function privs(){
    $list = Db::name('privileges')->select();
    return $list;
    }

    public function livees(){
        $list = Db::name('live')->select();
        return $list;
    }
}