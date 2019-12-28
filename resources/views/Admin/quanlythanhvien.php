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
            <nav style="background-color: #dddfeb">
                <h4>QUẢN LÝ THÀNH VIÊN</h4>
            </nav>
            <br>
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-8 ">
                    <!--                 <button class="w3-button w3-xlarge w3-circle w3-teal">+</button>-->
                    <div class="info-box hover-expand-effect">
                        <div class="icon">
                            <button id="btn-add"  data-toggle="modal" data-target="#myModal"  class="w3-button w3-lg w3 w3-pink bg-gradient-secondary" ng-click="modal('add')">+ THÊM MỚI THÀNH VIÊN DỰ ÁN</button>
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
                                                <tr style="font-size: 13px">
                                                    <th>MÃ THÀNH VIÊN</th>
                                                    <th style="width: 15em">HỌ VÀ TÊN</th>
                                                    <th style="width: 12em">ĐỊA CHỈ</th>
                                                    <th style="width: 13em">SỐ ĐIỆN THOẠI</th>
                                                    <th style="width: 13em">EMAIL </th>
                                                    <th style="width: 13em">MẬT KHẨU</th>
                                                </tr>
                                                </thead>
                                                <tbody style="color: #1c294e">
                                                <tr ng-repeat="reg in users">
                                                    <td>{{ reg.id }}</td>
                                                    <td>{{ reg.hovaten }}</td>
                                                    <td>{{ reg.diachi }}</td>
                                                    <td>{{ reg.sdt }}</td>
                                                    <td>{{ reg.email }}</td>
                                                    <td>{{ reg.matkhau }}</td>
                                                    <td>
                                                        <button class="glyphicon glyphicon-pencil btn btn-default btn-xs btn-detail" id="btn-edit" data-toggle="modal" data-target="#myModal" ng-click="modal('edit',reg.id)" >Sửa</button>
                                                        <button class="glyphicon glyphicon-remove btn btn-danger btn-xs btn-delete" ng-click="cfDelete(reg.id)">Xóa</button>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>

                                            <!-- Modal -->
                                            <div class="modal fade" tabindex="-1" role="dialog" id="myModal">
                                                <div class="modal-dialog " style="color: #1c294e;">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-gradient-light">
                                                            <h4 class="modal-title">{{ frmTitle }}</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        </div>
                                                        <div class="modal-body" >
                                                            <form name="frmuser" action="getAddregister" method="POST" class="form-horizontal">
                                                                <div class="form-group">
                                                                    <label for="inputEmail3" class="col-sm-3 control-label">HỌ VÀ TÊN</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" id="hovaten" name="hovaten" placeholder="Vui lòng nhập họ và tên" ng-model="hovaten" ng-required="true" />
                                                                        <span style="color: red; padding-left:30px;" id="helpBlock2" class="help-block" ng-show="frmuser.hovaten.$error.required">Vui lòng nhập họ và tên</span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="inputEmail3" class="col-sm-3 control-label">ĐỊA CHỈ</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" id="diachi" name="diachi" placeholder="Vui lòng nhập chức năng" ng-model="diachi"  ng-required="true" />
                                                                        <span style="color: red; padding-left:30px;" id="helpBlock2" class="help-block" ng-show="frmuser.diachi.$error.required">Vui lòng nhập Chức năng</span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="inputEmail3" class="col-sm-4 control-label">SỐ ĐIỆN THOẠI</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" id="sdt" name="sdt" placeholder="Vui lòng nhập số điện thoại" ng-model="sdt" ng-required="true" >
                                                                        <span style="color: red; padding-left:30px;" id="helpBlock2" class="help-block" ng-show="frmuser.sdt.$error.required">vui lòng nhập số điện thoại</span>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="inputEmail3" class="col-sm-4 control-label">EMAIL</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" id="email" name="email" placeholder="Vui lòng nhập địa chỉ Email" ng-model="email" ng-required="true" />
                                                                        <span style="color: red; padding-left:30px;" id="helpBlock2" class="help-block" ng-show="frmuser.email.$error.required">Vui lòng nhập tên đăng nhập</span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="inputEmail3" class="col-sm-4 control-label">MẬT KHẨU</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" id="matkhau" name="matkhau" placeholder="Vui lòng nhập địa chỉ Email" ng-model="matkhau" ng-required="true" />
                                                                        <span style="color: red; padding-left:30px;" id="helpBlock2" class="help-block" ng-show="frmuser.matkhau.$error.required">Vui lòng nhập tên đăng nhập</span>
                                                                    </div>
                                                                </div>
                                                            </form>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-primary" ng-click="save(state,id)">Lưu</button>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->
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
