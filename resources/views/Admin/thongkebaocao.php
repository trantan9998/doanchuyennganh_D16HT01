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
                    <span class="text" >THÔNG TIN DỰ ÁN</span>
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
            <nav style="background-color: #dddfeb">
                <h4>THỐNG KÊ BÁO CÁO CỦA THÀNH VIÊN TRONG DỰ ÁN</h4>
            </nav>
            <br>

            <hr>
            <div class="row clearfix" >
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="container-fluid">
                                    <div class="row content">
                                        <div class="container bg-gradient-light">
                                            <h3>DỰ ÁN:</h3>
                                            <table class="table table-bordered table-responsive table-striped ">
                                                <thead>
                                                <tr style="font-size: 13px">
                                                    <th style="width: 15em">THÀNH VIÊN THỰC HIỆN</th>
                                                    <th style="width: 15em">TIẾN ĐỘ</th>
                                                    <th style="width: 19em">MỨC ĐỘ HOÀN THÀNH CÔNG VIỆC</th>
                                                </tr>
                                                </thead>
                                                <tbody style="color: #1c294e">
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div>
                        <h4 style="color: aliceblue; border-radius: 90px;  background: rgba(100, 20, 80, 0.1)"><center> NỘI DUNG THỰC HIỆN CÔNG VIỆC</center></h4>
                    </div>
                    <div class="card">
                        <div class="card-header">
                           PHẦN THỰC THI CÔNG VIỆC
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">FILE CHỨA CÔNG VIỆC</h5>
                            <p class="card-text"> FILE NỘI DUNG </p>

                            <a href="#" class="btn btn-primary">TẢI XUỐNG</a>
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
