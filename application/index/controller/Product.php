<?php

namespace app\index\controller;

use think\Controller;
use think\Db;
use app\index\model\User as UserModel;

class Product extends Controller
{
    //文章列表（分类查询）
    Public function index()
    {
        return $this->fetch();
    }

    //文章详情
    public function detail()
    {
        return $this->fetch();
    }

    //留言板
    public function message()
    {
        return $this->fetch();
    }
}

?>