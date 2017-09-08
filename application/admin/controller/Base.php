<?php
namespace app\admin\controller;
use think\controller;
use think\Request;

class Base extends Controller
{
    public function __construct(Request $request = null)
    {
        parent::__construct($request);
        $name = session('admin_user.admin_user')['name'];
        $uid = session('admin_user.admin_user')['uid'];
        if (!$uid) {
            $this->redirect('/admin/login');
        }
        $this->assign(array(
            'admin_name' => $name, //管理员ID
            'admin_uid' => $uid, //管理员ID
        ));

    }
    public function login_ajax(){
        $val = input();
        $res= Db::name('admin_user')->where('name','=',$val['name'])->find();
        if($res){
            if($res['password'] == md5($val['pwd'])){
                $data['admin_user']['uid'] = $res['id'];
                $data['admin_user']['name'] = $res['name'];
                $data['admin_user']['role_id'] = $res['role_id'];
                session('admin_user',$data);
                return array('code'=>'1','msg'=>"登录成功");
            }else{
                return array('code'=>'3','msg'=>"密码错误，请重新输入");
            }
        }else{
            return array('code'=>'2','msg'=>"用户不存在，请重新输入");
        }
    }
}
?>