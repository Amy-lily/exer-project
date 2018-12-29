<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:89:"D:\wwwroot\XinmeitiAcc\public_html\public/../application/index\view\manager\addphone.html";i:1542789961;s:81:"D:\wwwroot\XinmeitiAcc\public_html\application\index\view\common\admin-slide.html";i:1542789960;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>添加手机信息</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="后台管理系统-管理员-添加手机信息" />
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
        <!-- <div class="container-fluid center">
           
        </div> -->
        <div class="col-lg-6 card-center">
            <div class="card ">
                <div class="card-body">

                    <h4 class="mb-3 header-title">添加手机信息</h4>
                    <hr>
                    <form class="form-horizontal" method="POST">
                        <div class="form-group row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label">手机编号</label>
                            <div class="col-9">
                                <input type="text" name="phonesn" class="form-control" id="inputEmail3" placeholder="手机编号">
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label">手机品牌</label>
                            <div class="col-9">
                                <input type="text" name="phonebrand" class="form-control" id="inputEmail3" placeholder="手机品牌">
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label">SIM卡1</label>
                            <div class="col-9">
                                <input type="text" name="phonesim1" class="form-control" id="inputEmail3" placeholder="SIM卡1">
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label">SIM卡2</label>
                            <div class="col-9">
                                <input type="text" name="phonesim2" class="form-control" id="inputEmail3" placeholder="SIM卡2">
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label">开户名（卡1）</label>
                            <div class="col-9">
                                <input type="text" name="phonecreate1" class="form-control" id="inputEmail3" placeholder="开户名（卡1）">
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label">开户名（卡2）</label>
                            <div class="col-9">
                                <input type="text" name="phonecreate2" class="form-control" id="inputEmail3" placeholder="开户名（卡2）">
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label">负责人</label>
                            <div class="col-9">
                                <input type="text" name="phonecharge" class="form-control" id="inputEmail3" placeholder="负责人">
                            </div>
                        </div>
                        <div class="form-group mb-0 justify-content-end row">
                            <div class="col-9">
                                <button type="submit" class="btn btn-info  ">添加 </button>
                            </div>
                        </div>
                    </form>

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