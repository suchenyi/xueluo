<?php
namespace app\admin\controller;
use think\Db;
use think\Request;
use think\controller;
use tools\Sysinfo;
class Index extends Base
{
    public function admin(Request $request){
        //$request->domain();//当前域名
        $sysinfo  = new Sysinfo();
        $sys_info = [
            'lang'    => $sysinfo->getLang(),
            'browser' => $sysinfo->getBrowser(),
            'ip'      => $sysinfo->getIp(),
            'city'    => $sysinfo->getCity(),
            'os'      => $sysinfo->getOS(),
            'date'    => date('Y-m-d')
        ];
//        var_dump($sys_info);die;
        $name = session('admin_user.admin_user')['name'];
        $uid = session('admin_user.admin_user')['uid'];
        $this->assign('name', $name);
//        var_dump($request->domain());die;
        $this->assign('sys_info',$sys_info);
        $this->assign('title', "后台首页");
        return $this->fetch('index/index');
    }
}
?>