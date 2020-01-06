<!DOCTYPE html>
<html lang="en" ng-app="my-app" ng-controller="registerController">
<head>
    <meta charset="UTF-8" />
    <title>ADMIN</title>
    <!-- Load Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <!--    <link href="css/trello.css" rel="stylesheet">-->
</head>

<body class="theme-red">

<nav class="navbar navbar-expand-sm navbar-dark bg-gradient-success" style="height: 2em">
    <div class="navbar-collapse collapse w-25 order-1 order-xl-0 dual-collapse2">
        <ul class="navbar-nav mr-auto text-white">
            <b> BỘ PHẬN - TRƯỞNG NHÓM</b>
        </ul>
    </div>

    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">TÀI KHOẢN</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Thông tin user</a>
                    <a class="dropdown-item" href="#">Đăng xuất</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"></a>
                </div>
            </li>
        </ul>
    </div>
</nav>

<div id="wrapper">
    <!-- #Top Bar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #1c294e;height: 600px;">
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
            <div style="color: white" >DAILY-WORK<sup>(^^)</sup></div>
        </a>
        <!-- Divider -->
        <li>
            <img src="img/login.png" width="100px" ;height="100px">
        </li>
        <br>
        <li>
            <span style="color: white">ADMIN</span>
        </li>
        <hr>
        <!-- Nav Item - Dashboard -->
        <li>
            <a href="thongtinduan">
                <b style="color: lavender">
                    <span class="text" >THÔNG TIN DỰ ÁN </span>
                </b>
            </a>
        </li>
        <hr>
        <li>
            <a href="">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <b class="fas fa-flag" style="color: lavender" >
                        QUẢN LÝ THÀNH VIÊN
                    </b>
                </a>
                <div class="list-group">
                    <a href="qlthanhvien" class="list-group-item bg-gray-700 text-white">Thông tin thành viên</a>
                    <a href="baocaoduan" class="list-group-item bg-gray-700 text-white">Công việc thành viên</a>
                    <a href="thongkebaocao" class="list-group-item bg-gray-700 text-white">Theo dõi quá trình</a>
                </div>
            </a>
        </li>

        <!-- Sidebar Toggler (Sidebar) -->
        <hr class="sidebar-divider my-3">
    </ul>
    <div style="width: 100%;background-color: #a5cae0" class="content" >

        <div class="container-fluid">
            <br>
            <nav >
                <h5 class="bg-gradient-primary text-white"><b>THÔNG TIN DỰ ÁN \</b></h5>
            </nav>
            <br>
    <!-- Lists container -->
    <div class="row clearfix"  >
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
            <div class="card">
                <div class="header">
                    <div class="row clearfix">
                        <div class="container-fluid">
                            <div class="row content">
                                <div class="container bg-gradient-light">
                                    <table class="table table-bordered table-responsive table-striped ">
                                        <thead style="font-size: 13px;color: #985f0d">
                                        <b >
                                            <th >MÃ DỰ ÁN</th>
                                            <th style="width: 16em">TÊN DỰ ÁN</th>
                                            <th style="width: 10em">CHI PHÍ DỰ ÁN</th>
                                            <th  style="width: 19em">SỐ THÀNH VIÊN THỰC HIỆN</th>
                                            <th style="color: white;width: 15em;" bgcolor="#00008b">NGÀY BẮT ĐẦU</th>
                                            <th style="color: white;width: 15em;" bgcolor="#8b0000">NGÀY KẾT THÚC</th>
                                        </b>
                                        </thead>
                                        <tbody style="color: #1c294e">
                                        <tr >
                                            <td>
                                                @foreach($thongtinduan as $Thongtinduan)
                                                    {{$Thongtinduan -> id}}
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach($thongtinduan as $Thongtinduan)
                                                    {{$Thongtinduan -> tenduan}}
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach($thongtinduan as $Thongtinduan)
                                                    {{$Thongtinduan -> chiphi}} <b>VND</b>
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach($thongtinduan as $Thongtinduan)
                                                   {{$Thongtinduan -> sothanhvien}}  <b>THÀNH VIÊN</b>
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach($thongtinduan as $Thongtinduan)
                                                 <i>  {{$Thongtinduan -> ngaybatdau}}</i>
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach($thongtinduan as $Thongtinduan)
                                                  <i> {{$Thongtinduan -> ngayketthuc}}</i>
                                                @endforeach
                                            </td>

                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    </div>
</div>


    <script type="text/javascript" src="angularjs/angular.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!--<script type="text/javascript" src="angularjs/angular.js"></script>-->
    <!--<script type="text/javascript" src="angularjs/angular-route.js"></script>-->
    <!--<script type="text/javascript" src="angularjs/singlepage.js"></script>-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script type="text/javascript" src="app/register.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>

</div>
</body>

</html>
