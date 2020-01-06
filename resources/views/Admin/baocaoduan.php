<!DOCTYPE html>
<html lang="en" ng-app="my-app" ng-controller="congvieccontroller" >
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
                                                <h3 style="color: #122b40;">PHÂN BỔ CÔNG VIỆC</h3>
                                                <tr style="font-size: 13px">
                                                    <th style="width: 15em">THÀNH VIÊN THỰC HIỆN</th>
                                                    <th style="width: 12em">VAI TRÒ</th>
                                                    <th style="width: 13em">CHỨC NĂNG</th>
                                                    <th style="width: 13em">TÊN CÔNG VIỆC</th>
                                                    <th style="width: 13em">NHIỆM VỤ</th>
                                                    <th><button id="btn-add"  data-toggle="modal" data-target="#myModal"  class="w3-button w3-lg w3 w-100 w3-pink bg-gradient-secondary" ng-click="modal('add')">➕ THÊM MỚI</button></th>
                                                </tr>
                                                </thead>
                                                <tbody style="color: #1c294e">
                                                <tr ng-repeat="cog in congviecs">
                                                    <td>{{ cog.tenthanhvien }}</td>

                                                    <td>{{ cog.vaitro }}</td>
                                                    <td>{{ cog.chucnang }}</td>
                                                    <td>{{ cog.tencongviec }}</td>
                                                    <td>{{ cog.nhiemvu }}</td>
                                                    <td>
                                                        <button class="glyphicon glyphicon-pencil btn btn-default btn-xs w-100 btn-detail bg-success text-white" id="btn-edit" data-toggle="modal" data-target="#myModal" ng-click="modal('edit',cog.id)" >CHỈNH SỬA</button>
                                                        <button class="glyphicon glyphicon-remove btn btn-danger btn-xl w-100 btn-delete" ng-click="cfDelete(cog.id)">GỠ BỎ</button>
                                                    </td>
                                                </tr>
                                                </tbody>

                                            </table>
                                            <div class="modal fade" tabindex="-1" role="dialog" id="myModal">
                                                <div class="modal-dialog " style="color: #1c294e;">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-gradient-light">
                                                            <h4 class="modal-title">{{ frmTitle }}</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        </div>
                                                        <div class="modal-body" >
                                                            <form name="frmcongviec" action="addcongviec" method="POST" class="form-horizontal">
                                                                <div class="form-group">
                                                                    <label for="inputEmail3" class="col-sm-6 control-label">THÀNH VIÊN THỰC HIỆN</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" id="tenthanhvien" name="tenthanhvien" placeholder="Vui lòng nhập thành viên thực hiện" ng-model="tenthanhvien" ng-required="true" />
                                                                        <span style="color: red; padding-left:30px;" id="helpBlock2" class="help-block" ng-show="frmcongviec.tenthanhvien.$error.required">Vui lòng nhập thành viên thực hiện </span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="inputEmail3" class="col-sm-3 control-label">VAI TRÒ</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" id="vaitro" name="vaitro" placeholder="Vui lòng nhập vai trò" ng-model="vaitro"  ng-required="true" />
                                                                        <span style="color: red; padding-left:30px;" id="helpBlock2" class="help-block" ng-show="frmcongviec.vaitro.$error.required">Vui lòng nhập vai trò</span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="inputEmail3" class="col-sm-4 control-label">CHỨC NĂNG</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" id="chucnang" name="chucnang" placeholder="Vui lòng nhập chức năng" ng-model="chucnang" ng-required="true" >
                                                                        <span style="color: red; padding-left:30px;" id="helpBlock2" class="help-block" ng-show="frmcongviec.chucnang.$error.required">vui lòng nhập chức năng</span>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="inputEmail3" class="col-sm-4 control-label">TÊN CÔNG VIỆC</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" id="tencongviec" name="tencongviec" placeholder="Vui lòng nhập tên công việc" ng-model="tencongviec" ng-required="true" />
                                                                        <span style="color: red; padding-left:30px;" id="helpBlock2" class="help-block" ng-show="frmcongviec.tencongviec.$error.required">Vui lòng nhập tên công việc</span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="inputEmail3" class="col-sm-4 control-label">NHIỆM VỤ</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" id="nhiemvu" name="nhiemvu" placeholder="Vui lòng nhập nhiệm vụ" ng-model="nhiemvu" ng-required="true" />
                                                                        <span style="color: red; padding-left:30px;" id="helpBlock2" class="help-block" ng-show="frmcongviec.nhiemvu.$error.required">Vui lòng nhập nhiệm vụ</span>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-primary" ng-click="save(state,id)">LƯU</button>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->
                                            <!-- Modal -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

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

    <script type="text/javascript" src="app/congviec.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>

</div>
</body>

</html>
