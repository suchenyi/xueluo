<?php 
namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\index\model\User as UserModel;
class User extends Base
{




	public function admin_user_add(){
	    //rint_r(input());
        //Db::name('admin_user')->insert(['name' => 'admin', 'password' => md5("123456"), 'create_time' => time()]);
        //Db::name('user')->insert(['name' => '王泽', 'tel'=>'17689478702','email'=>'wz@163.com','password' => md5("123456"), 'create_time' => time()]);
        $this->assign('title', '用户添加');
        return $this->fetch('add');
	}

    /**
     * 用户列表
     */
	public function admin_user_list(){
        $list = Db::name('user')->where('status',1)->order('id desc')->paginate(10);
        $this->assign('list', $list);
        $this->assign('title', '用户列表');
        $this->assign('name', 'admins');
        $this->assign('count', count($list));
        return $this->fetch('list');
    }
}

 ?>