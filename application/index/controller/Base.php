<?php
namespace app\index\controller;
use think\controller;
use think\Request;
use think\Db;
class Base extends Controller
{
    public function __construct(Request $request = null)
    {
        parent::__construct($request);
        $name = session('home.user')['name'];
        $uid = session('home.user')['uid'];
//        if (!$uid) {
//            $this->redirect('/admin/login');
//        }
        $this->assign(array(
            'admin_name' => $name, //管理员ID
            'admin_uid' => $uid, //管理员ID
        ));

    }
    public function login_ajax(){
//        $val = input();
//        $res= Db::name('user')->where('name','=',$val['name'])->find();
//        if($res){
//            if($res['password'] == md5($val['pwd'])){
//                $data['admin_user']['uid'] = $res['id'];
//                $data['admin_user']['name'] = $res['name'];
//                $data['admin_user']['role_id'] = $res['role_id'];
//                session('admin_user',$data);
//                return array('code'=>'1','msg'=>"登录成功");
//            }else{
//                return array('code'=>'3','msg'=>"密码错误，请重新输入");
//            }
//        }else{
//            return array('code'=>'2','msg'=>"用户不存在，请重新输入");
//        }
    }

    /**
     * 获取树形菜单
     */
    public function home_tree(){
        $sort= Db::name('sort')->where('pid','0')->order('id','asc')->select();
        if(!empty($sort)){
            $menu = array();
            foreach ($sort as $k=>$v){
                $arr = Db::name('sort')->where('pid',$v['id'])->order('id','asc')->select();
                if(!empty($arr)){
                    $v['arr'] = $arr;
                }else{
                    $v['arr'] = array();
                }
                $menu[] = $v;
            }
            return $menu;
            //$this->assign('list', $menu );
        }
        
    }
}
?>