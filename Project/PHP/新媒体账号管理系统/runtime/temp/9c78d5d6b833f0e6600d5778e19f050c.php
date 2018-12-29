<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:86:"D:\wwwroot\XinmeitiAcc\public_html\public/../application/index\view\manager\index.html";i:1545903787;s:81:"D:\wwwroot\XinmeitiAcc\public_html\application\index\view\common\admin-slide.html";i:1542789960;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>管理员首页</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="后台管理系统-管理员-首页" />
    <meta content="Mosheng" name="author" />
    <link rel="shortcut icon" href="__PUBLIC__assets/images/favicon.ico">

    <!-- App css -->
    <link href="__PUBLIC__css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__css/app.min.css" rel="stylesheet" type="text/css" />
    <style>
    </style>
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
    <div class="table-wrapper">
        <a href="<?php echo url('Manager/Dataexport'); ?>" class="btn btn-success btn-sm btn-self">导出数据</a>

        <!-- 表头  -->
        <div class="table-title-wrap">
            <table class="table table-title table-fixed-title" cellpadding="0" cellspacing="0" style="table-layout:fixed">
                <thead>
                    <tr class="table-head">
                        <td class="w-120 text-four borderRight row1">#</td>
                        <td colspan="2" class="text text-four row1 borderRight " style="width:240px;">
                            <div class="table-title">手机信息</div>
                        </td>
                        <td colspan="2" class="text text-four borderRight" style="width:300px;">
                            <div class="table-title"></div>手机号
                        </td>
                        <td colspan="2" class="text text-four borderRight" style="width:300px;">
                            <div class="table-title"></div>手机号开户名
                        </td>
                        <td colspan="4" class="text text-four borderRight" style="width:600px;">微信</td>
                        <td class="text text-four" style="width:150px;">负责人</td>
                        <td class="text text-four" style="width:17px;background: transparent;"></td>
                    </tr>
                    <tr class="table-head">
                        <td class="w-120">#</td>
                        <td class="table-self-fixed-head w-120">
                            <div class="table-title w-120">手机编号</div>
                        </td>
                        <td class="borderRight w-120">
                            <div class="table-title  w-120">手机品牌</div>
                        </td>
                        <td class="">
                            <div class="table-title  w-150">SIM卡1</div>
                        </td>
                        <td class="borderRight">
                            <div class="table-title  w-150">SIM卡2</div>
                        </td>
                        <td class="">
                            <div class="table-title  w-150">开户名（卡1）</div>
                        </td>
                        <td class="borderRight">
                            <div class="table-title ">开户名（卡2）</div>
                        </td>
                        <td class="">
                            <div class="table-title ">账号</div>
                        </td>
                        <td class="">
                            <div class="table-title ">密码</div>
                        </td>
                        <td class="">
                            <div class="table-title ">微信名</div>
                        </td>
                        <td class="borderRight">
                            <div class="table-title ">好友量</div>
                        </td>
                        <td class="">
                            <div class="table-title ">负责人</div>
                        </td>
                        <td class="text text-four" style="width:17px;background: transparent;"></td>
                    </tr>
                </thead>
            </table>
        </div>

        <!-- 固定列  -->
        <div class="table-row-wrap">
            <!-- 表头  -->
            <div class="table-row-title-wrap">
                <table class="table table-title table-fixed-title" cellpadding="0" cellspacing="0" style="table-layout:fixed">
                        <thead>
                                <tr class="table-head">
                                    <td class="w-120 text-four borderRight row1">#</td>
                                    <td colspan="2" class="text text-four row1 borderRight " style="width:240px;">
                                        <div class="table-title">手机信息</div>
                                    </td>
                                    <td colspan="2" class="text text-four borderRight" style="width:300px;">
                                        <div class="table-title"></div>手机号
                                    </td>
                                    <td colspan="2" class="text text-four borderRight" style="width:300px;">
                                        <div class="table-title"></div>手机号开户名
                                    </td>
                                    <td colspan="4" class="text text-four borderRight" style="width:600px;">微信</td>
                                    <td class="text text-four" style="width:150px;">负责人</td>
                                    <td class="text text-four" style="width:17px;background: transparent;"></td>
                                </tr>
                                <tr class="table-head">
                                    <td class="w-120">#</td>
                                    <td class="table-self-fixed-head w-120">
                                        <div class="table-title w-120">手机编号</div>
                                    </td>
                                    <td class="borderRight w-120">
                                        <div class="table-title  w-120">手机品牌</div>
                                    </td>
                                    <td class="">
                                        <div class="table-title  w-150">SIM卡1</div>
                                    </td>
                                    <td class="borderRight">
                                        <div class="table-title  w-150">SIM卡2</div>
                                    </td>
                                    <td class="">
                                        <div class="table-title  w-150">开户名（卡1）</div>
                                    </td>
                                    <td class="borderRight">
                                        <div class="table-title ">开户名（卡2）</div>
                                    </td>
                                    <td class="">
                                        <div class="table-title ">账号</div>
                                    </td>
                                    <td class="">
                                        <div class="table-title ">密码</div>
                                    </td>
                                    <td class="">
                                        <div class="table-title ">微信名</div>
                                    </td>
                                    <td class="borderRight">
                                        <div class="table-title ">好友量</div>
                                    </td>
                                    <td class="">
                                        <div class="table-title ">负责人</div>
                                    </td>
                                    <td class="text text-four" style="width:17px;background: transparent;"></td>
                                </tr>
                            </thead>
                </table>
            </div>
            <!-- 内容 -->
            <div class="table-fixed-left-body">
                <table class="table table-title table-fixed-left" cellpadding="0" cellspacing="0" style="table-layout:fixed">
                    <tbody>
                        <?php if(is_array($sel) || $sel instanceof \think\Collection || $sel instanceof \think\Paginator): $i = 0; $__LIST__ = $sel;if( count($__LIST__)==0 ) : echo "$empty" ;else: foreach($__LIST__ as $key=>$a): $mod = ($i % 2 );++$i;switch($name=($i+1)%2): case "0": ?>
                        <tr class="table-bg text-text">
                            <td class="w-120"><?php echo $i; ?></td>
                            <td class="table-self-fixed-head w-120">
                                <div class="table-title w-120"><?php echo $a['phonesn']; ?></div>
                            </td>
                            <td class="borderRight w-120">
                                <div class="table-title  w-120"><?php echo $a['phonebrand']; ?></div>
                            </td>
                            <td class=" w-150">
                                <div class="table-title "><?php echo $a['phonesim1']; ?></div>
                            </td>
                            <td class="borderRight  w-150">
                                <div class="table-title"><?php echo $a['phonesim2']; ?></div>
                            </td>
                            <td class=" w-150">
                                <div class="table-title "><?php echo $a['phonecreate1']; ?></div>
                            </td>
                            <td class="borderRight w-150">
                                <div class="table-title "><?php echo $a['phonecreate2']; ?></div>
                            </td>
                            <td class="w-150">
                                <div class="table-title "><?php echo $a['wxaccount']; ?></div>
                            </td>
                            <td class="w-150">
                                <div class="table-title "><?php echo $a['wxpass']; ?></div>
                            </td>
                            <td class="w-150">
                                <div class="table-title "><?php echo $a['wxname']; ?></div>
                            </td>
                            <td class="w-150 text-fans borderRight" onclick="dyfans(<?php echo $a['id']; ?>,'wx')">
                                <div class="table-title "><?php echo $a['wxfans']; ?></div>
                            </td>
                            <td class="w-150">
                                <div class="table-title "><?php echo $a['phonecharge']; ?></div>
                            </td>
                        </tr>
                        <?php break; case "1": ?>
                        <tr>
                            <td class="w-120"><?php echo $i; ?></td>
                            <td class="table-self-fixed-head w-120">
                                <div class="table-title w-120"><?php echo $a['phonesn']; ?></div>
                            </td>
                            <td class="borderRight w-120">
                                <div class="table-title  w-120"><?php echo $a['phonebrand']; ?></div>
                            </td>
                            <td class=" w-150">
                                <div class="table-title "><?php echo $a['phonesim1']; ?></div>
                            </td>
                            <td class="borderRight  w-150">
                                <div class="table-title"><?php echo $a['phonesim2']; ?></div>
                            </td>
                            <td class=" w-150">
                                <div class="table-title "><?php echo $a['phonecreate1']; ?></div>
                            </td>
                            <td class="borderRight w-150">
                                <div class="table-title "><?php echo $a['phonecreate2']; ?></div>
                            </td>
                            <td class="w-150">
                                <div class="table-title "><?php echo $a['wxaccount']; ?></div>
                            </td>
                            <td class="w-150">
                                <div class="table-title "><?php echo $a['wxpass']; ?></div>
                            </td>
                            <td class="w-150">
                                <div class="table-title "><?php echo $a['wxname']; ?></div>
                            </td>
                            <td class="w-150 text-fans borderRight" onclick="dyfans(<?php echo $a['id']; ?>,'wx')">
                                <div class="table-title "><?php echo $a['wxfans']; ?></div>
                            </td>
                            <td class="w-150">
                                <div class="table-title "><?php echo $a['phonecharge']; ?></div>
                            </td>
                        </tr>

                        <?php break; endswitch; endforeach; endif; else: echo "$empty" ;endif; ?>
                    </tbody>
                </table>
                <div class="row-bar"></div>
            </div>
        </div>

        <!-- 内容 -->
        <div class="table-content-wrap">
            <table class="table table-title table-fixed-content" cellpadding="0" cellspacing="0" style="table-layout:fixed">
                    <tbody>
                            <?php if(is_array($sel) || $sel instanceof \think\Collection || $sel instanceof \think\Paginator): $i = 0; $__LIST__ = $sel;if( count($__LIST__)==0 ) : echo "$empty" ;else: foreach($__LIST__ as $key=>$a): $mod = ($i % 2 );++$i;switch($name=($i+1)%2): case "0": ?>
                            <tr class="table-bg text-text">
                                <td class="w-120"><?php echo $i; ?></td>
                                <td class="table-self-fixed-head w-120">
                                    <div class="table-title w-120"><?php echo $a['phonesn']; ?></div>
                                </td>
                                <td class="borderRight w-120">
                                    <div class="table-title  w-120"><?php echo $a['phonebrand']; ?></div>
                                </td>
                                <td class=" w-150">
                                    <div class="table-title "><?php echo $a['phonesim1']; ?></div>
                                </td>
                                <td class="borderRight  w-150">
                                    <div class="table-title"><?php echo $a['phonesim2']; ?></div>
                                </td>
                                <td class=" w-150">
                                    <div class="table-title "><?php echo $a['phonecreate1']; ?></div>
                                </td>
                                <td class="borderRight w-150">
                                    <div class="table-title "><?php echo $a['phonecreate2']; ?></div>
                                </td>
                                <td class="w-150">
                                    <div class="table-title "><?php echo $a['wxaccount']; ?></div>
                                </td>
                                <td class="w-150">
                                    <div class="table-title "><?php echo $a['wxpass']; ?></div>
                                </td>
                                <td class="w-150">
                                    <div class="table-title "><?php echo $a['wxname']; ?></div>
                                </td>
                                <td class="w-150 text-fans borderRight" onclick="dyfans(<?php echo $a['id']; ?>,'wx')">
                                    <div class="table-title "><?php echo $a['wxfans']; ?></div>
                                </td>
                                <td class="w-150">
                                    <div class="table-title "><?php echo $a['phonecharge']; ?></div>
                                </td>
                            </tr>
                            <?php break; case "1": ?>
                            <tr>
                                <td class="w-120"><?php echo $i; ?></td>
                                <td class="table-self-fixed-head w-120">
                                    <div class="table-title w-120"><?php echo $a['phonesn']; ?></div>
                                </td>
                                <td class="borderRight w-120">
                                    <div class="table-title  w-120"><?php echo $a['phonebrand']; ?></div>
                                </td>
                                <td class=" w-150">
                                    <div class="table-title "><?php echo $a['phonesim1']; ?></div>
                                </td>
                                <td class="borderRight  w-150">
                                    <div class="table-title"><?php echo $a['phonesim2']; ?></div>
                                </td>
                                <td class=" w-150">
                                    <div class="table-title "><?php echo $a['phonecreate1']; ?></div>
                                </td>
                                <td class="borderRight w-150">
                                    <div class="table-title "><?php echo $a['phonecreate2']; ?></div>
                                </td>
                                <td class="w-150">
                                    <div class="table-title "><?php echo $a['wxaccount']; ?></div>
                                </td>
                                <td class="w-150">
                                    <div class="table-title "><?php echo $a['wxpass']; ?></div>
                                </td>
                                <td class="w-150">
                                    <div class="table-title "><?php echo $a['wxname']; ?></div>
                                </td>
                                <td class="w-150 text-fans borderRight" onclick="dyfans(<?php echo $a['id']; ?>,'wx')">
                                    <div class="table-title "><?php echo $a['wxfans']; ?></div>
                                </td>
                                <td class="w-150">
                                    <div class="table-title "><?php echo $a['phonecharge']; ?></div>
                                </td>
                            </tr>
    
                            <?php break; endswitch; endforeach; endif; else: echo "$empty" ;endif; ?>
                        </tbody>
            </table>
        </div>
    </div>

    <!-- Footer Start -->
    <div class="echart-box">
        <div id="main"></div>
    </div>
    <div class="table-footer">
        <table class="table table-self  mb-0">
            <tr class="table-bg text-text table-amount">
                <td>合计</td>
                <td>手机总数：<span class="dkamount"><?php echo $pcount; ?></span></td>
                <td>手机卡总数：<span class="dkamount"><?php echo $cphone; ?></span></td>
                <td>微信账号总数：<span class="dkamount"><?php echo $wxamouont; ?></span></td>
                <td>微信总粉丝量：<span class="dkamount"><?php echo $wxfans; ?> 万</span></td>
            </tr>
        </table>
    </div>
    <script src="__PUBLIC__js/jquery.min.js"></script>
    <script src="__PUBLIC__js/pulibc.js"></script>
    <script type="text/javascript" src="__PUBLIC__js/echarts.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__js/echarts-gl.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__js/fixed-table.js"></script>
    <script>
        document.querySelector('.table-content-wrap').onscroll = function () {
            document.querySelector('.table-title-wrap').scrollLeft = this.scrollLeft
            document.querySelector('.table-row-wrap').scrollTop = this.scrollTop
            document.querySelector('.table-fixed-left-body').scrollTop = this.scrollTop
        }

        function dyfans(id, type) {
            $.ajax({
                url: url + 'Index/index/dyfans',
                type: 'POST',
                data: {
                    'id': id,
                    'type': type
                },
                success: function (res) {
                    var result = JSON.parse(res);
                    var title; //定义图表标题
                    var times = []; //横坐标
                    var fans = []; //粉丝
                    var titleText = '';
                    if (res != null) {
                        $('.echart-box').show();
                        $('#main').show();
                        switch (type) {
                            case 'dy':
                                title = '抖音';
                                titleText = result[0].dyaccount;
                                for (var i = 0; i < result.length; i++) {
                                    times[i] = result[i]['dytime'];
                                    fans[i] = result[i]['dyfans'];
                                }
                                break;
                            case 'ks':
                                titleText = result[0].ksaccount;
                                title = '快手';
                                for (var i = 0; i < result.length; i++) {
                                    times[i] = result[i]['kstime'];
                                    fans[i] = result[i]['ksfans'];
                                }
                                break;
                            case 'wx':
                                titleText = result[0].wxaccount;
                                title = '微信';
                                for (var i = 0; i < result.length; i++) {
                                    times[i] = result[i]['wxtime'];
                                    fans[i] = result[i]['wxfans'];
                                }
                                break;
                        };


                        var app = {};
                        option = null;
                        app.title = '坐标轴刻度与标签对齐';
                        // 指定图表的配置项和数据
                        var myChart = echarts.init(document.getElementById('main'));
                        var option = {
                            backgroundColor: "#fff",
                            title: {
                                text: titleText + title + ' 柱状图'
                            },
                            color: ['#3398DB'],
                            tooltip: {
                                trigger: 'axis',
                                axisPointer: { // 坐标轴指示器，坐标轴触发有效
                                    type: 'shadow' // 默认为直线，可选为：'line' | 'shadow'
                                }
                            },
                            grid: {

                                containLabel: true
                            },
                            xAxis: [{
                                type: 'category',
                                data: times,
                                axisTick: {
                                    alignWithLabel: true
                                }
                            }],
                            yAxis: [{
                                type: 'value'
                            }],
                            series: [{
                                name: '粉丝量（万）',
                                type: 'bar',
                                barWidth: '20%',
                                data: fans
                            }]
                        };
                        // 使用刚指定的配置项和数据显示图表。
                        myChart.setOption(option);
                        $('.echart-box').click(function () {
                            $('.echart-box').hide();
                            $('#main').hide();

                        })
                    } else {
                        alert('数据为空');
                    }
                }
            });
        }
    </script>
</body>

</html>