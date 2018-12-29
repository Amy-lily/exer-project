<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:84:"D:\wwwroot\XinmeitiAcc\public_html\public/../application/index\view\index\login.html";i:1542789961;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>登录</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="快道营销账号管理系统" />
    <meta content="kuaidao" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <link href="__PUBLIC__css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__css/app.min.css" rel="stylesheet" type="text/css" />
</head>

<body class="authentication-bg">
    <div class="account-pages mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="text-center w-75 m-auto">
                                <a href="index.html">
                                    <p>新媒体账号管理系统</p>
                                </a>
                            </div>
                            <form action="#" method="POST">
                                <div class="form-group mb-3">
                                    <label for="emailaddress">账户</label>
                                    <input class="form-control" name="uname" type="text" id="emailaddress" required="" placeholder="请输入您的用户名">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="password">密码</label>
                                    <input class="form-control" name="upass" type="password" required="" id="password" placeholder="请输入您的密码">
                                </div>
                                <div class="form-group mb-0 text-center">
                                    <button class="btn btn-primary btn-block" type="submit"> 登陆 </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="__PUBLIC__js/vendor.min.js"></script>
    <script src="__PUBLIC__js/app.min.js"></script>
</body>

</html>