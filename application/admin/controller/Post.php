<?php
namespace  app\admin\controller;

use think\Controller;
use think\Db;
use app\index\model\User as UserModel;
class Post extends Base
{
    public function index(){
        $this->assign('title','文章添加');
        return $this->fetch('post/index');
    }
    public function lists(){
        $this->assign('title','文章列表');
        return $this->fetch('post/list');
    }
}

?>