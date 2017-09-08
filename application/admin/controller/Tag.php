<?php 
namespace app\admin\controller;
use think\Db;
use think\Controller;
use app\admin\model\Tag as TagModel;
class Tag extends Base{
	public function index(){
		$this->assign('title',"标签添加列表");
		return $this->fetch();
	}

    /**
     * 列表
     */
	public function tag_list(){

        // $list = Db::name('user')->where('status',1)->order('id desc')->paginate(10);
		$list = TagModel::order('id desc')->paginate(10);
        $this->assign('list', $list);
        $this->assign('title','标签列表');
		//return view('read',['list'=>$list]);
		return $this->fetch('list');
    }
}

 ?>