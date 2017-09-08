<?php 
namespace app\admin\controller;
use think\Db;
class Tag extends Base{
	public function index(){
		return $this->fetch();
	}

    /**
     * 列表
     */
	public function tag_list(){

    }
}

 ?>