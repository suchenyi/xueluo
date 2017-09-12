<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

//use think\Route;
// 注册路由到index模块的News控制器的read操作
//Route::rule('abc/:id','index/index/index');
//Route::get('/admin/post_add/:id','admin/post/index');

return [
    // 添加路由规则 路由到 index控制器的hello操作方法
    //用户展示（前端）
    //'/abc' => 'index/index/index',
    '/aa' => 'index/index/aa',
    '/hello' => 'index/index/hello',
    '/user_add' => 'index/user/index',
    '/user_u' => 'index/user/update',
    '/post_index'=>'index/product/index',
    '/post_detail'=>'index/product/detail',
    '/message'=>'index/product/message',




    //后台系统 admin
    '/admin' => 'admin/index/admin',//后台首页
    '/admin/index' => 'admin/index/admin',//后台首页
    '/admin/login' => 'admin/login/login',//登录页
    '/admin/login_ajax' => 'admin/login/login_ajax',//登录ajax验证
    '/admin/admin_user_add' => 'admin/user/admin_user_add',//用户添加
    '/admin/admin_user_list' => 'admin/user/admin_user_list',//用户列表
    '/admin/admin_post' => 'admin/post/index',//
    '/admin/post_add/[:id]' => 'admin/post/index',//文章／帖子添加页面
//    '/admin/post_add/id/[:id]' => 'admin/post/index',//文章／帖子添加页面
    '/admin/post_adds' => 'admin/post/upload',//文章／帖子添加页面
    '/admin/post_lists' => 'admin/post/lists',//文章／帖子列表
    '/admin/tag_add'=>'admin/tag/index',//标签添加页面
    '/admin/tag_list'=>'admin/tag/tag_list',//标签列表
    '/admin/tag_add_ajax'=>'admin/tag/tag_add_ajax',//标签添加

    '/admin/sort_add'=>'admin/sort/index',//分类添加
    '/admin/sort_add_ajax'=>'admin/sort/sort_add_ajax',
    '/admin/sort_list'=>'admin/sort/sort_list',//分类列表

];