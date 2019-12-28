<!DOCTYPE html>
<html lang="en" >
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

<!-- #END# Search Bar -->
<!-- Top Bar -->
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
            <a href="thongtinthanhvien">
                <b style="color: lavender">
                    <span class="text" >QUẢN LÝ DỰ ÁN</span>
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
            <h3 style="color: #4f1915"><b>QUẢN LÝ CÔNG VIỆC CỦA THÀNH VIÊN</b> </h3>
            <br>
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-8 ">
                    <!--                 <button class="w3-button w3-xlarge w3-circle w3-teal">+</button>-->
                    <div class="info-box hover-expand-effect">
                        <div class="icon">
                        </div>

                    </div>

                </div>
            </div>
            <hr>
            <div class="row clearfix" >
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="container-fluid">
                                    <div class="row content">
                                        <div class="container bg-gradient-light">
                                            <table class="table table-bordered table-responsive table-striped ">
                                                <thead>
                                                <h3 style="color: #122b40;">THÀNH VIÊN THỰC HIỆN CÔNG VIỆC</h3>
                                                <tr style="font-size: 13px">
                                                    <th style="width: 15em">THÀNH VIÊN THỰC HIỆN</th>
                                                    <th style="width: 12em">VAI TRÒ</th>
                                                    <th style="width: 13em">CHỨC NĂNG</th>
                                                    <th style="width: 13em">TÊN CÔNG VIỆC</th>
                                                    <th style="width: 13em">NHIỆM VỤ</th>
                                                    <th><button id="btn-add"  data-toggle="modal" data-target="#myModal"  class="w3-button w3-lg w3 w3-pink bg-gradient-secondary" ng-click="modal('add')">➕ THÊM MỚI</button></th>
                                                </tr>
                                                </thead>
                                                <tbody style="color: #1c294e">
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <button class="glyphicon glyphicon-pencil btn btn-success btn-xs btn-detail" id="btn-edit" data-toggle="modal" data-target="#myModal" ng-click="modal('edit',da.id)" >Chỉnh Sửa</button>
                                                    <button class="glyphicon glyphicon-remove btn btn-danger btn-xs btn-delete" ng-click="cfDelete(da.id)">Xóa</button>
                                                </td>
                                                </tbody>

                                            </table>
                                            <!-- Modal -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div>
                        <h4 style="color: aliceblue; border-radius: 90px;  background: rgba(100, 20, 80, 0.1)"><center> THEO DÕI CÔNG VIỆC CỦA THÀNH VIÊN</center></h4>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="card" style="width: 15rem; border-radius: 2em">
                                <img class="card-img-top" src="img/fsdf.png" alt="Card image cap" style="height: 12em;">
                                <div class="card-body">
                                    <h5 class="card-title">Nguyễn Văn A</h5>
                                    <p class="card-text">Chuyên viên phân tích hệ thống</p>
                                    <a href="thongkebaocao" class="btn btn-primary">XEM CHI TIẾT</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card" style="width: 15rem; border-radius: 2em">
                                <img class="card-img-top" src="img/fsdf.png" alt="Card image cap" style="height: 12em;">
                                <div class="card-body">
                                    <h5 class="card-title">Nguyễn Văn A</h5>
                                    <p class="card-text">Chuyên viên phân tích hệ thống</p>
                                    <a href="thongkebaocao" class="btn btn-primary">XEM CHI TIẾT</a>
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
