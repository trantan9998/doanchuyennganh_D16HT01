<!DOCTYPE html>
<html lang="en" ng-app="my-app" ng-controller="DuAnController">
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

<div id="wrapper">
    <!-- #Top Bar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #1c294e;height: 600px;">
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
            <div style="color: white" >DAILY-WORK<sup>(^^)</sup></div>
        </a>
        <!-- Divider -->
        <hr class="sidebar-divider my-3">
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
            <a href="quanly">
                <i>
                    <span class="text" >QUẢN LÝ DỰ ÁN</span>
                </i>
            </a>
        </li>
        <hr>
        <li>
            <a href="">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-flag" >
                        QUẢN LÝ THÀNH VIÊN
                    </i>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="qlthanhvien">THÀNH VIÊN</a>
                    <a class="dropdown-item" href="">BÁO CÁO DỰ ÁN</a>

                </div>
            </a>
        </li>
        <hr>


        <!-- Sidebar Toggler (Sidebar) -->
        <hr class="sidebar-divider my-3">
    </ul>

    <div style="width: 100%;background-color: #a5cae0" class="content" >
        <nav style="background-color: #dddfeb">
            <h4>TIẾN ĐỘ DỰ ÁN CỦA CÁC THÀNH VIÊN</h4>
        </nav>
        <br>

        <div class="container">
            <div class="row">
                <table class="table">
                    <caption class="bg-gradient-light">Danh sách thành viên đã đăng ký</caption>
                    <thead>
                    <tr>
                        <th>MÃ SỐ</th>
                        <th>HỌ VÀ TÊN</th>
                        <th>SỐ ĐIỆN THOẠI</th>
                        <th>HOÀN THÀNH</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>teo123</td>
                        <td>Huynh Van Teo</td>
                        <td>huynhvanteo@gmail.com</td>
                        <td>Thành viên</td>
                        <td><a href="chinh-sua-thanh-vien.php?id=1">Sửa</a> <a href="xoa-thanh-vien.php?id=1">Xóa</a></td>
                    </tr>

                    </tbody>
                </table>
            </div>

        </div><!-- /.container -->

    </div>


    <script type="text/javascript" src="angularjs/angular.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!--<script type="text/javascript" src="angularjs/angular.js"></script>-->
    <!--<script type="text/javascript" src="angularjs/angular-route.js"></script>-->
    <!--<script type="text/javascript" src="angularjs/singlepage.js"></script>-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script type="text/javascript" src="app/app.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>

</div>
</body>

</html>
