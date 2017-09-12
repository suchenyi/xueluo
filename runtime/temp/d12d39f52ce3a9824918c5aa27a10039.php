<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:58:"/www/xueluo/Public/../application/admin/view/tag/list.html";i:1504864278;s:63:"/www/xueluo/Public/../application/admin/view/Public/header.html";i:1504864343;s:61:"/www/xueluo/Public/../application/admin/view/Public/left.html";i:1505118176;s:63:"/www/xueluo/Public/../application/admin/view/Public/footer.html";i:1504858368;}*/ ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title; ?></title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="/admin/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="/admin/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <link href="/admin/css/morris/morris.css" rel="stylesheet" type="text/css" />
        <link href="/admin/css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <link href="/admin/css/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
        <link href="/admin/css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <link href="/admin/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <link href="/admin/css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="/static/layui/css/layui.css">
        <script src="/static/layui/layui.js"></script>
        <style>
            #pagination{
                width: 800px;
                float:right;
            }
            .pagination{
                float:right;
            }
        </style>
    </head>
    <body class="skin-blue">
        <header class="header">
            <a href="/admin/index" class="logo">
                Admins
            </a>
            <nav class="navbar navbar-static-top" role="navigation">
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="dropdown messages-menu">
                        <li class="dropdown user user-menu">
                            <a href="/templates" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span><?php echo $admin_name; ?> <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="user-header bg-light-blue">
                                    <img src="/upload/2017-09-08/avatar.png" class="img-circle" alt="User Image" />
                                    <p>
                                        <?php echo $admin_name; ?> - 欢迎来到后台
                                        <small>2017-09-08</small>
                                    </p>
                                </li>
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="/templates" class="btn btn-default btn-flat">个人资料</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="/admin/login" class="btn btn-default btn-flat">退出</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <aside class="left-side sidebar-offcanvas">
                <section class="sidebar">
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="/upload/2017-09-08/avatar.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello, <?php echo $admin_name; ?></p>

                            <a href="/templates"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                                        <ul class="sidebar-menu">
                        <li class="active">
                            <a href="index.html">
                                <i class="fa fa-dashboard"></i> <span>首页</span>
                            </a>
                        </li>
                        <li class="treeview <?php echo !empty($tree) && $tree==1?'active':''; ?>">
                            <a href="#">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>用户管理</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="/admin/admin_user_list"><i class="fa fa-angle-double-right"></i> 用户管理</a></li>
                                <li><a href="/admin/admin_user_add"><i class="fa fa-angle-double-right"></i> 用户添加</a></li>
                                <li><a href="/admin/admin_user_list"><i class="fa fa-angle-double-right"></i>用户日志</a></li>
                            </ul>
                        </li>
                       <!--  <li class="treeview">
                            <a href="/templates">
                                <i class="fa fa-laptop"></i>
                                <span>权限管理</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="pages/UI/general.html"><i class="fa fa-angle-double-right"></i> General</a></li>
                                <li><a href="pages/UI/icons.html"><i class="fa fa-angle-double-right"></i> Icons</a></li>
                                <li><a href="pages/UI/buttons.html"><i class="fa fa-angle-double-right"></i> Buttons</a></li>
                                <li><a href="pages/UI/sliders.html"><i class="fa fa-angle-double-right"></i> Sliders</a></li>
                                <li><a href="pages/UI/timeline.html"><i class="fa fa-angle-double-right"></i> Timeline</a></li>
                            </ul>
                        </li> -->
                        <!--<i class="fa fa-edit"></i>-->

                        <li class="treeview <?php echo !empty($tree) && $tree==2?'active':''; ?>">
                            <a href="#">
                                <i class="fa fa-edit"></i>文章管理 </span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="/admin/post_add"><i class="fa fa-angle-double-right"></i> 文章添加 </a></li>
                                <li><a href="/admin/post_lists"><i class="fa fa-angle-double-right"></i> 文章列表 </a></li>
                            </ul>
                        </li>

                        <li class="treeview <?php echo !empty($tree) && $tree==3?'active':''; ?>">
                            <a href="#">
                                <i class="fa fa-table"></i> <span> 标签管理 </span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="/admin/tag_add"><i class="fa fa-angle-double-right"></i> 标签添加 </a></li>
                                <li><a href="/admin/tag_list"><i class="fa fa-angle-double-right"></i> 标签列表 </a></li>
                            </ul>
                        </li>
                        <li class="treeview <?php echo !empty($tree) && $tree==4?'active':''; ?>">
                            <a href="#">
                                <i class="fa fa fa-th"></i><span> 分类管理 </span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="/admin/sort_add"><i class="fa fa-angle-double-right"></i> 分类添加 </a></li>
                                <li><a href="/admin/sort_list"><i class="fa fa-angle-double-right"></i> 分类列表 </a></li>
                            </ul>
                        </li>
                       <!--  <li>
                            <a href="pages/calendar.html">
                                <i class="fa fa-calendar"></i> <span>Calendar</span>
                                <small class="badge pull-right bg-red">3</small>
                            </a>
                        </li>
                        <li>
                            <a href="pages/mailbox.html">
                                <i class="fa fa-envelope"></i> <span>Mailbox</span>
                                <small class="badge pull-right bg-yellow">12</small>
                            </a>
                        </li> -->
                        <li class="treeview <?php echo !empty($tree) && $tree==9?'active':''; ?>">
                            <a href="#">
                                <i class="fa fa-folder"></i> <span>系统设置</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="/admin/links"><i class="fa fa-angle-double-right"></i> 友情链接</a></li>
                                <li><a href="/admin/sms_log"><i class="fa fa-angle-double-right"></i> 短信日志 </a></li>
                            </ul>
                        </li>
                    </ul>
                </section>
            </aside>
            <aside class="right-side">
                <section class="content-header">
                    <h1>
                        后台<small><?php echo $title; ?></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="/admin/index"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active"><?php echo $title; ?></li>
                    </ol>
                </section>
                <section class="content">
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">标签列表</h3>
                        <div class="box-tools">
                            <div class="input-group">
                                <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search">
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tbody><tr>
                                <th>ID</th>
                                <th>标签名</th>
                                <th>创建时间</th>
                                <th>状态</th>
                                <th>操作</th>
                            </tr>

                            <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tag): $mod = ($i % 2 );++$i;?>
	                            <tr>
	                                <td><?php echo $tag['id']; ?></td>
	                                <td><?php echo $tag['name']; ?></td>
	                                <td><?php echo $tag['create_time']; ?></td>
	                                <td><?php echo !empty($tag['status']) && $tag['status']==1?'<span class="label label-success">启用</span>' : '<span class="label label-danger">禁用</span>'; ?></td>
	                                <td>
	                                    <?php echo !empty($tag['status']) && $tag['status']==1?'<button class="btn btn-warning btn-sm">禁用</button>':'<button class="btn btn-danger btn-sm">启用</button>'; ?>
	                                </td>
	                            </tr>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                            </tbody>
                        </table>
                    </div>
                    <div id="pagination">
                        <?php echo $list->render(); ?>
                    </div>

                </div>
            </div>
        </div>
    </section>

                </section>
            </aside>
        </div>
        <script src="/admin/js/jquery-2.0.2.min.js"></script>
        <script src="/admin/js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <script src="/admin/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="/admin/js/raphael-min.js"></script>
        <script src="/admin/js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="/admin/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
        <script src="/admin/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <script src="/admin/js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
        <script src="/admin/js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <script src="/admin/js/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
        <script src="/admin/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <script src="/admin/js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
        <script src="/admin/js/AdminLTE/app.js" type="text/javascript"></script>
         <script src="/admin/js/AdminLTE/dashboard.js" type="text/javascript"></script>
        <script src="/admin/js/AdminLTE/demo.js" type="text/javascript"></script>

    </body>
</html>