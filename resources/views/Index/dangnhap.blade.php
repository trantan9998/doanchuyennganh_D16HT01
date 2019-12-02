<!DOCTYPE html>
<html lang="en" ng-app="my-dangnhap" ng-controller="HomeController">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>DAILY WORK</title>
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/trello.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

</head>

<body>
<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #1c294e">
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" >
            <div class="sidebar-brand-icon rotate-n-15">
            </div>
            <div class="sidebar-brand-text mx-3 ">TEAM-WORK<sup>**)</sup></div>
        </a>
        <!-- Divider -->
        <br>

        <!-- Nav Item - Dashboard -->

        <hr class="sidebar-divider my-3">
        <li>
            <a href="" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white">
                      <i class="fas fa-flag"></i>
                    </span>
                <span class="text" style="background-color: #1c294e;">THÀNH VIÊN</span>
            </a>
        </li>
        <hr class="sidebar-divider my-3">



        <div class="text-lg-right " style="margin-top:40px">
            <span id="sidebarToggle"> <span class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-10">
                      <i class="fas fa-flag"></i>
                    </span>
                    <span class="text" style="background-color: #a3b6ee">↔</span>
                    <span class="icon text-white-10">
                      <i class="fas fa-flag"></i>
                    </span>
                </span>
            </span>
        </div>

    </ul>

    <div style="width: 100%; ">
        <div class="container">
            <div class="row"  style="background-color:ghostwhite ;border-radius: 30px;margin-top:30px; height: 40em;width: 100em;">
                <div class="col"><img src="https://i.pinimg.com/originals/d1/b8/5c/d1b85c34a2d3c64051e1ea924b78ba1c.jpg" width="300" height="300" class="Avatar" style="margin-top: 30px;margin-left: 100px; border-radius: 20px;" ></div>
                <div class="col">
                    <form class="login100-form validate-form" method=post >
                        <h3 align="center" style="font-size: 3em;margin-top: 30px;"><b>ĐĂNG NHẬP</b></h3> <br>
                        <div class="container" style="font-size: 1.5em;">
                            <i class="fa fa-users"></i>
                            <label for="">TÊN TÀI KHOẢN</label>
                            <input type="text" class="form-control" placeholder="nhập tài khoản của bạn" style="font-size: 13px;">
                            <br>
                            <i class="fa fa-key"></i>
                            <label for="">MẬT KHẨU</label>
                            <input type="password" class="form-control" placeholder="nhập mật khẩu" style="font-size: 13px;">
                        </div>
                        <br>
                        <div class="col" >
                            <a href="duan" style="text-decoration: none">

                            <button type="button" class="btn btn-outline-primary" style="margin-left: 12em;font-size: 1.5em;">
                                ĐỒNG Ý
                            </button>
                            </a>

                        </div>

                    </form>
                </div>
            </div>
        </div>

{{--        <div class="login-form">--}}
{{--            <form name="loginform" ng-submit="login()">--}}
{{--                <div class="single-login">--}}
{{--                    <label>Tên đăng nhập<span>*</span></label>--}}
{{--                    <input type="tendangnhap" name="tendangnhap" ng-model="tendangnhap" class="form-control" placeholder="Email..." required/>--}}
{{--                </div>--}}
{{--                <div class="alert alert-danger" ng-show="loginform.tendangnhap.$dirty && loginform.tendangnhap.$invalid">--}}
{{--                    <span ng-show="loginform.tendangnhap.$error.required">Email is required.</span>--}}
{{--                    <span ng-show="loginform.tendangnhap.$error.tendangnhap">Invalid email address.</span>--}}
{{--                </div>--}}
{{--                <div class="single-login">--}}
{{--                    <label>Passwords <span>*</span></label>--}}
{{--                    <input type="password" type="matkhau" name="matkhau" ng-model="matkhau" placeholder="Password..."/>--}}
{{--                </div>--}}
{{--                <div class="single-login single-login-2">--}}
{{--                    <input id="rememberme" type="checkbox" name="rememberme" value="forever">--}}
{{--                    <span>Remember me</span>--}}
{{--                </div>--}}
{{--                <div class="g-recaptcha" data-sitekey="6Ld5Cr0UAAAAAJCGVCDjc0cSYPpZq7jM6IWCoNxq"></div>--}}
{{--                <span class="badge" ng-bind-html="loginMessage"></span>--}}
{{--                <button type="submit" class="btn btn-success btn-simple btn-round btn-block" ng-disabled="loginform.$invalid">Log In</button>--}}
{{--                <a href="#">Lost your password?</a>--}}
{{--            </form>--}}
{{--        </div>--}}
    </div>
    <!-- Bootstrap core JavaScript-->
</div>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="js/sb-admin-2.min.js"></script>
<script src="app/dangnhap.js"></script>
</body>
</html>
