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
return [
    // 添加路由规则 路由到 index控制器的hello操作方法
    '/abc' => 'index/index/index',
    '/aa' => 'index/index/aa',
    '/hello' => 'index/index/hello',
    '/user_add' => 'index/user/index',
    '/user_u' => 'index/user/update',
    '/post_index'=>'index/product/index',
    '/post_detail'=>'index/product/detail',
    '/message'=>'index/product/message',

    //后台 admin
    '/admin' => 'admin/index/admin',
    '/admin/index' => 'admin/index/admin',
    '/admin/login' => 'admin/login/login',
    '/admin/login_ajax' => 'admin/login/login_ajax',
    '/admin/admin_user_add' => 'admin/user/admin_user_add',
    '/admin/admin_user_list' => 'admin/user/admin_user_list',
    '/admin/admin_post' => 'admin/post/index',
    '/admin/post_add' => 'admin/post/index',
    '/admin/post_lists' => 'admin/post/lists',
];

// return [
//     '__pattern__' => [
//         'name' => '\w+',
//     ],
//     '[hello]'     => [
//         ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
//         ':name' => ['index/hello', ['method' => 'post']],
//     ],

// ];