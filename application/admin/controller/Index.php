<?php
namespace app\admin\controller;
use think\Db;
use think\Request;
use think\controller;
class Index extends Base
{
    public function admin(Request $request){
        //$request->domain();//当前域名
        $name = session('admin_user.admin_user')['name'];
        $uid = session('admin_user.admin_user')['uid'];
        $this->assign('name', $name);
//        var_dump($request->domain());die;
        $this->assign('title', "后台首页");
        return $this->fetch('index/index');
    }
}
?>