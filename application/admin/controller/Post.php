<?php
namespace  app\admin\controller;

use think\Controller;
use think\Db;
use app\admin\model\Posts as PostsModel;
class Post extends Base
{
    public function index(){
        $this->assign('title','文章添加');
        $this->assign('tree', '2');
        return $this->fetch('post/index');
    }
    public function lists(){

        $list = PostsModel::order('id desc')->paginate(5);
        $this->assign('list', $list);
        $this->assign('tree', '2');
        $this->assign('title','文章列表');
        return $this->fetch('post/list');
    }
}

?>