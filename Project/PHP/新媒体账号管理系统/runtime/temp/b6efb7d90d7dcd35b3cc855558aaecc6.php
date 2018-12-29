<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:87:"D:\wwwroot\XinmeitiAcc\public_html\public/../application/index\view\manager\kslist.html";i:1542789961;s:81:"D:\wwwroot\XinmeitiAcc\public_html\application\index\view\common\admin-slide.html";i:1542789960;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>快手数据列表</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="新媒体账号管理系统-管理员-快手数据列表" />
    <meta content="Mosheng" name="author" />
    <link rel="shortcut icon" href="__PUBLIC__assets/images/favicon.ico">

    <!-- App css -->
    <link href="__PUBLIC__css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__css/app.min.css" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__css/self.css" rel="stylesheet" type="text/css" />

</head>

<body>
    <link href="__PUBLIC__css/laydate.css" rel="stylesheet" type="text/css" />
<header id="topnav">
    <nav class="navbar-custom">
        <div class="container-fluid">
            <ul class="list-unstyled topbar-right-menu float-right mb-0">
                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="__PUBLIC__assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                        <small class="pro-user-name ml-1">
                            <?php echo \think\Session::get('name'); ?>
                        </small>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown ">
                        <!-- item-->
                        <a href="<?php echo url('Index/lgout'); ?>" class="dropdown-item notify-item">
                            <i class="fe-log-out"></i>
                            <span>退出</span>
                        </a>

                    </div>
                </li>
            </ul>
            <ul class="list-inline menu-left mb-0">
                <li class="float-left">
                    <a href="index.html" class="logo">
                        <span class="logo-lg">
                            <img src="__PUBLIC__assets/images/logo.png" alt="" height="18">
                        </span>
                    </a>
                </li>
            </ul>


            <ul class="list-unstyled topbar-right-menu float-right mb-0">
                <li class="dropdown notification-list">
                    <a class="nav-link self-link dropdown-toggle nav-user mr-0" href="<?php echo url('Manager/wxlist'); ?>" aria-haspopup="false" aria-expanded="false">
                        <small class="pro-user-name ml-1">
                            微信账号管理
                        </small>
                    </a>
                </li>
            </ul>

            <ul class="list-unstyled topbar-right-menu float-right mb-0">
                <li class="dropdown notification-list">
                    <a class="nav-link self-link dropdown-toggle nav-user mr-0" href="<?php echo url('Manager/kslist'); ?>" aria-haspopup="false" aria-expanded="false">
                        <small class="pro-user-name ml-1">
                            快手账号管理
                        </small>
                    </a>
                </li>
            </ul>

            <ul class="list-unstyled topbar-right-menu float-right mb-0">
                <li class="dropdown notification-list">
                    <a class="nav-link self-link dropdown-toggle nav-user mr-0" href="<?php echo url('Manager/dylist'); ?>" aria-haspopup="false" aria-expanded="false">
                        <small class="pro-user-name ml-1">
                            抖音账号管理
                        </small>
                    </a>
                </li>
            </ul>
            <ul class="list-unstyled topbar-right-menu float-right mb-0">
                <li class="dropdown notification-list">
                    <a class="nav-link self-link dropdown-toggle nav-user mr-0" href="<?php echo url('Manager/phonelist'); ?>">
                        <small class="pro-user-name ml-1">
                            手机信息管理
                        </small>
                    </a>
                </li>
            </ul>
            <ul class="list-unstyled topbar-right-menu float-right mb-0">
                <li class="dropdown notification-list">
                    <a class="nav-link self-link dropdown-toggle nav-user mr-0" href="<?php echo url('Manager/index'); ?>">
                        <small class="pro-user-name ml-1">
                            账号信息展示
                        </small>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

</header>

<!-- App js -->
<script src="__PUBLIC__js/vendor.min.js"></script>
<script src="__PUBLIC__js/app.min.js"></script>

<!-- Plugins js -->
<script src="__PUBLIC__js/vendor/Chart.bundle.js"></script>
<script src="__PUBLIC__js/vendor/jquery.sparkline.min.js"></script>
<script src="__PUBLIC__js/vendor/jquery.knob.min.js"></script>

<script>
    //nav stress
    var thisurl = window.location.href;
    var index = thisurl.indexOf("/manager/index");
    var phonelist = thisurl.indexOf("/manager/phonelist");
    var dylist = thisurl.indexOf("/manager/dylist");
    var kslist = thisurl.indexOf("/manager/kslist");
    var wxlist = thisurl.indexOf("/manager/wxlist");
    function listnav() {
        if (index > 0) {
            res();
            $(".navbar-custom .topbar-right-menu .self-link").eq(4).css({ "color": "#00acc1" });
        } else if (phonelist > 0) {
            res();
            $(".navbar-custom .topbar-right-menu .self-link").eq(3).css({ "color": "#00acc1" });
        } else if (dylist > 0) {
            res();
            $(".navbar-custom .topbar-right-menu .self-link").eq(2).css({ "color": "#00acc1" });
        } else if (kslist > 0) {
            res();
            $(".navbar-custom .topbar-right-menu .self-link").eq(1).css({ "color": "#00acc1" });
        } else if (wxlist > 0) {
            res();
            $(".navbar-custom .topbar-right-menu .self-link").eq(0).css({ "color": "#00acc1" });
        }
    }
    function res() {
        $(".navbar-custom .topbar-right-menu .self-link").each(function (i) {
            $(this).css({ "color": "#f7f7f7" });
        })
    }
    listnav();
</script>
    <!-- container-fluid     -->
    <div class="wrapper">
        <div class="container-fluid">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">快手数据列表</h4>
                        <a href="<?php echo url('Manager/addks'); ?>" class="btn btn-success btn-sm float-right">添加快手数据</a>
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>手机编号</th>
                                    <th>快手账号</th>
                                    <th>快手密码</th>
                                    <th>快手名称</th>
                                    <th>粉丝量</th>
                                    <th>更新时间</th>
                                    <th>编辑</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(is_array($sel) || $sel instanceof \think\Collection || $sel instanceof \think\Paginator): $i = 0; $__LIST__ = $sel;if( count($__LIST__)==0 ) : echo "$empty" ;else: foreach($__LIST__ as $key=>$a): $mod = ($i % 2 );++$i;switch($name=($i+1)%2): case "0": ?>
                                <tr class="table-bg text-text">
                                    <th><?php echo $a['id']; ?></th>
                                    <th><?php echo $a['phonesn']; ?></th>
                                    <th><?php echo $a['ksaccount']; ?></th>
                                    <th><?php echo $a['kspass']; ?></th>
                                    <th><?php echo $a['ksname']; ?></th>
                                    <th><?php echo $a['ksfans']; ?></th>
                                    <th><?php echo $a['kstime']; ?></th>
                                    <td><a href="editks?id=<?php echo $a['id']; ?>">编辑</a>|<a href="delks?id=<?php echo $a['id']; ?>" onclick="return confirm('确定要删除吗?')">删除</a>|<a
                                            href="editksfans?id=<?php echo $a['id']; ?>" style="color:#c72128;">修改粉丝量</a></td>
                                </tr>
                                <?php break; case "1": ?>
                                <tr class="">
                                    <th><?php echo $a['id']; ?></th>
                                    <th><?php echo $a['phonesn']; ?></th>
                                    <th><?php echo $a['ksaccount']; ?></th>
                                    <th><?php echo $a['kspass']; ?></th>
                                    <th><?php echo $a['ksname']; ?></th>
                                    <th><?php echo $a['ksfans']; ?></th>
                                    <th><?php echo $a['kstime']; ?></th>
                                    <td><a href="editks?id=<?php echo $a['id']; ?>">编辑</a>|<a href="delks?id=<?php echo $a['id']; ?>" onclick="return confirm('确定要删除吗?')">删除</a>|<a
                                            href="editksfans?id=<?php echo $a['id']; ?>" style="color:#c72128;">修改粉丝量</a></td>
                                </tr>
                                <?php break; endswitch; endforeach; endif; else: echo "$empty" ;endif; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Start -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    kuaidao Admin &copy; 2018 - tecms.net
                </div>
            </div>
        </div>
    </footer>


</body>

</html>