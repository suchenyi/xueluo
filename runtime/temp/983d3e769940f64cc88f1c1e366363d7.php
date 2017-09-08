<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:55:"/www/tp5/Public/../application/admin/view/user/add.html";i:1503023906;s:60:"/www/tp5/Public/../application/admin/view/Public/header.html";i:1504839608;s:58:"/www/tp5/Public/../application/admin/view/Public/left.html";i:1504839863;s:60:"/www/tp5/Public/../application/admin/view/Public/footer.html";i:1504837970;}*/ ?>
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
                       <!--      <a href="/templates" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope"></i>
                                <span class="label label-success">4</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 4 messages</li>
                                <li>
                                    <ul class="menu">
                                        <li>
                                            <a href="/templates">
                                                <div class="pull-left">
                                                    <img src="img/avatar3.png" class="img-circle" alt="User Image"/>
                                                </div>
                                                <h4>
                                                    Support Team
                                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/templates">
                                                <div class="pull-left">
                                                    <img src="img/avatar2.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    AdminLTE Design Team
                                                    <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/templates">
                                                <div class="pull-left">
                                                    <img src="img/avatar.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Developers
                                                    <small><i class="fa fa-clock-o"></i> Today</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/templates">
                                                <div class="pull-left">
                                                    <img src="img/avatar2.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Sales Department
                                                    <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/templates">
                                                <div class="pull-left">
                                                    <img src="img/avatar.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Reviewers
                                                    <small><i class="fa fa-clock-o"></i> 2 days</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="/templates">See All Messages</a></li>
                            </ul>
                        </li> -->
                       <!--  <li class="dropdown notifications-menu">
                            <a href="/templates" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-warning"></i>
                                <span class="label label-warning">10</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 10 notifications</li>
                                <li>
                                    <ul class="menu">
                                        <li>
                                            <a href="/templates">
                                                <i class="ion ion-ios7-people info"></i> 5 new members joined today
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/templates">
                                                <i class="fa fa-warning danger"></i> Very long description here that may not fit into the page and may cause design problems
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/templates">
                                                <i class="fa fa-users warning"></i> 5 new members joined
                                            </a>
                                        </li>

                                        <li>
                                            <a href="/templates">
                                                <i class="ion ion-ios7-cart success"></i> 25 sales made
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/templates">
                                                <i class="ion ion-ios7-person danger"></i> You changed your username
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="/templates">View all</a></li>
                            </ul>
                        </li>
                        <li class="dropdown tasks-menu">
                            <a href="/templates" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-tasks"></i>
                                <span class="label label-danger">9</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 9 tasks</li>
                                <li>
                                    <ul class="menu">
                                        <li>
                                            <a href="/templates">
                                                <h3>
                                                    Design some buttons
                                                    <small class="pull-right">20%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">20% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/templates">
                                                <h3>
                                                    Create a nice theme
                                                    <small class="pull-right">40%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">40% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/templates">
                                                <h3>
                                                    Some task I need to do
                                                    <small class="pull-right">60%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">60% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/templates">
                                                <h3>
                                                    Make beautiful transitions
                                                    <small class="pull-right">80%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">80% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="/templates">View all tasks</a>
                                </li>
                            </ul>
                        </li>-->
                        <li class="dropdown user user-menu">
                            <a href="/templates" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span><?php echo $admin_name; ?> <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="user-header bg-light-blue">
                                    <img src="img/avatar3.png" class="img-circle" alt="User Image" />
                                    <p>
                                        <?php echo $admin_name; ?> - Web Developer
                                        <small>Member since Nov. 2012</small>
                                    </p>
                                </li>
                                <!-- <li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="/templates">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="/templates">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="/templates">Friends</a>
                                    </div>
                                </li> -->
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
                            <img src="img/avatar3.png" class="img-circle" alt="User Image" />
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
                        <li class="treeview">
                            <a href="/templates">
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
                        <li class="treeview">
                            <a href="/templates">
                                <i class="fa fa-edit"></i> <span>文章管理</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="/admin/post_add"><i class="fa fa-angle-double-right"></i> 文章添加 </a></li>
                                <li><a href="/admin/post_lists"><i class="fa fa-angle-double-right"></i> 文章列表 </a></li>
                                <!--<li><a href="pages/forms/editors.html"><i class="fa fa-angle-double-right"></i> Editors</a></li>-->
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="/templates">
                                <i class="fa fa-table"></i> <span> 标签管理 </span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="/admin/tag_add"><i class="fa fa-angle-double-right"></i> 标签添加 </a></li>
                                <li><a href="/admin/tag_list"><i class="fa fa-angle-double-right"></i> 标签列表 </a></li>
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
                        <li class="treeview">
                            <a href="/templates">
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
                        Dashboard<small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="/templates"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>
                <section class="content">
<div class="row">
    <!-- left column -->
    <div class="col-md-6">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">用户添加</h3>
            </div>
            <form role="form">
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">用户名</label>
                        <input type="name" class="form-control" id="name" placeholder="username">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">邮箱</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">密码</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">头像</label>
                        <input type="file" id="exampleInputFile">
                        <p class="help-block">上传小于2M的图片</p>
                    </div>
                    <div class="form-group">

                        <label>
                            <div class="icheckbox_minimal-red" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="minimal-red" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>&nbsp;&nbsp;启用</div>
                        </label>
                    </div>

                </div><!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div><!-- /.box -->
    </div><!--/.col (left) -->

</div>

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