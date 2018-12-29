<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:87:"D:\wwwroot\XinmeitiAcc\public_html\public/../application/index\view\manager\editks.html";i:1542789961;s:81:"D:\wwwroot\XinmeitiAcc\public_html\application\index\view\common\admin-slide.html";i:1542789960;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>编辑快手账号信息</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="后台管理系统-管理员-编辑快手账号信息" />
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
        <div class="col-lg-6  card-center">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">编辑快手账号信息</h4>
                    <hr>
                    <form class="form-horizontal" method="POST">
                        <input type="hidden" name="id" value="<?php echo $sel['id']; ?>">
                        <div class="form-group row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label">手机编号</label>
                            <div class="col-9">
                                <select class="form-control self-select" data-toggle="select2" name="pid">
                                    <?php if(is_array($pid) || $pid instanceof \think\Collection || $pid instanceof \think\Paginator): $i = 0; $__LIST__ = $pid;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$a): $mod = ($i % 2 );++$i;if($sel['phonesn'] == $a['phonesn']): ?>
                                    <option value="<?php echo $a['id']; ?>" selected><?php echo $a['phonesn']; ?></option>
                                    <?php else: ?>
                                    <option value="<?php echo $a['id']; ?>"><?php echo $a['phonesn']; ?></option>
                                    <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label">快手账号</label>
                            <div class="col-9">
                                <input type="text" name="ksaccount" class="form-control" id="inputEmail3" value="<?php echo $sel['ksaccount']; ?>" placeholder="快手账号">
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label">快手密码</label>
                            <div class="col-9">
                                <input type="text" name="kspass" class="form-control" id="inputEmail3" value="<?php echo $sel['kspass']; ?>" placeholder="快手密码">
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label">快手名称</label>
                            <div class="col-9">
                                <input type="text" name="ksname" class="form-control" id="inputEmail3" value="<?php echo $sel['ksname']; ?>" placeholder="快手名称">
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label">粉丝量</label>
                            <div class="col-3">
                                <input type="text" name="ksfans" class="form-control" id="inputEmail3" value="<?php echo $sel['ksfans']; ?>" placeholder="粉丝量">
                            </div>
                            <div class="col-2 float-left">
                                <select class="form-control self-select" data-toggle="select2" name="unit" >
                                    <option value="wan">万</option>
                                    <option value="ge">个</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label">日期</label>
                            <div class="col-9">
                                <div class="laydate-box">
                                    <input type="text" id="laydateInput" name="time" placeholder="xxxx年xx月xx日" />
                                    <img src="__PUBLIC__/assets/images/calendar.png" alt="" class="icon data-icon" />
                                    <div class="select-date">
                                        <div class="select-date-header">
                                            <ul class="heade-ul">
                                                <li class="header-item header-item-one">
                                                    <select name="" id="yearList"></select>
                                                </li>
                                                <li class="header-item header-item-two" onselectstart="return false">
                                                    <select name="" id="monthList"></select>
                                                </li>
                                                <li class="header-item header-item-three" onselectstart="return false">
                                                    <span class="reback">回到今天</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="select-date-body">
                                            <ul class="week-list">
                                                <li>日</li>
                                                <li>一</li>
                                                <li>二</li>
                                                <li>三</li>
                                                <li>四</li>
                                                <li>五</li>
                                                <li>六</li>
                                            </ul>
                                            <ul class="day-tabel"></ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-0 justify-content-end row">
                            <div class="col-9">
                                <button type="submit" class="btn btn-info">确定修改 </button>
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