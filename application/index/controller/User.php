<?php 
namespace app\index\controller;
use app\index\model\User as UserModel;
class User{
	/**
	 * [index description]
	 * @return [type] [description]
	 */
	public function index(){
		$user = new UserModel;
		$user->nickname = '流年';
        $user->email    = 'thinkphp@qq.com';
        $user->birthday = strtotime('1977-03-05');
        if ($user->save()) {
            return '用户[ ' . $user->nickname . ':' . $user->id . ' ]新增成功';
        } else {
            return $user->getError();
        }
	}
	/**
	 * [update description]
	 * @return [type] [description]
	 */
	public function update(){
		$res = strtotime('1999-03-05')-strtotime('1977-03-05');
		$arr = array(
			'm'=>$res/3600/24/365,
			'd'=>$res,
			);
		dump($arr);
	}
}

 ?>