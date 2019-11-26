<!DOCTYPE html>
<html lang="en" ng-app="my-app" ng-controller="DuAnController">
<head>
    <meta charset="UTF-8" />

    <title>ADMIN</title>
    <!-- Load Bootstrap CSS -->

    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">

<!--    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">-->
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
        <a href="" class=" btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-flag"></i>
                    </span>
            <span class="text" >QUẢN LÝ THÀNH VIÊN</span>
        </a>
    </li>
    <hr>

    <li>
        <a href="" class=" btn-primary btn-icon-split" >
                    <span class="icon text-white-50">
                      <i class="fas fa-flag"></i>
                    </span>
            <span class="text" >CHUYÊN ĐỀ DỰ ÁN 1</span>
        </a>
    </li>
    <hr>

    <li>
        <a href="" class=" btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-flag"></i>
                    </span>
            <span class="text" >CHUYÊN ĐỀ DỰ ÁN 2</span>
        </a>
    </li>
    <hr>

    <li>
        <a href="" class=" btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-flag"></i>
                    </span>
            <span class="text" >CHUYÊN ĐỀ DỰ ÁN 3</span>
        </a>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <hr class="sidebar-divider my-3">
</ul>

<div style="width: 100%" class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>QUẢN LÝ DỰ ÁN</h2>
        </div>

        <div class="row clearfix" >


            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
<!--                 <button class="w3-button w3-xlarge w3-circle w3-teal">+</button>-->
                <div class="info-box bg-pink hover-expand-effect">
                    <div class="icon">
                        <button id="btn-add"  data-toggle="modal" data-target="#myModal"  class="w3-button w3-xlarge w3-circle w3-pink" ng-click="modal('add')">+</button>
                    </div>


                    <div class="content">
                        <div class="text" style="font-size: 15px;">THÊM DỰ ÁN</div>
                    </div>


                </div>

            </div>
        </div>



        <div class="row clearfix" >
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
                <div class="card">
                    <div class="header">
                        <div class="row clearfix">
                            <div class="container-fluid">
                                <div class="row content">
                                    <div class="container">
                                        <table class="table table-bordered table-responsive table-striped">
                                            <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Tên Dự Án</th>
                                                <th>Chức Năng</th>
                                                <th>Tên công việc</th>
                                                <th>Nhiệm vụ</th>
                                                <th>Ngày Bắt Đầu</th>
                                                <th>Ngày Kết Thúc</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr ng-repeat="da in duans">
                                                <td>{{ da.id }}</td>
                                                <td>{{ da.tenduan }}</td>
                                                <td>{{ da.cacchucnang }}</td>
                                                <td>{{ da.tencongviec }}</td>
                                                <td>{{ da.nhiemvu }}</td>
                                                <td>{{ da.ngaybatdau }}</td>
                                                <td>{{ da.ngayketthuc }}</td>

                                                <td>
                                                    <button class="glyphicon glyphicon-pencil btn btn-default btn-xs btn-detail" id="btn-edit" data-toggle="modal" data-target="#myModal" ng-click="modal('edit',da.id)" >Sửa</button>
                                                    <button class="glyphicon glyphicon-remove btn btn-danger btn-xs btn-delete" ng-click="cfDelete(da.id)">Xóa</button>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>

                                        <!-- Modal -->
                                        <div class="modal fade" tabindex="-1" role="dialog" id="myModal">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
{{--                                                        <h4 class="modal-title">{{ frmTitle }}</h4>--}}
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    </div>
                                                    <div class="modal-body" >
                                                        <form name="frmDuAn" action="getAdd" method="POST" class="form-horizontal">
                                                            <div class="form-group">
                                                                <label for="inputEmail3" class="col-sm-3 control-label">Tên Dự Án</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control" id="tenduan" name="tenduan" placeholder="Vui lòng nhập tên dự án" ng-model="tenduan" ng-required="true" />
                                                                    <span style="color: red; padding-left:30px;" id="helpBlock2" class="help-block" ng-show="frmDuAn.tenduan.$error.required">Vui lòng nhập tên dự án</span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="inputEmail3" class="col-sm-3 control-label">các chức năng</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control" id="cacchucnang" name="cacchucnang" placeholder="Vui lòng nhập nhiệm vụ" ng-model="cacchucnang"  ng-required="true" />
                                                                    <span style="color: red; padding-left:30px;" id="helpBlock2" class="help-block" ng-show="frmDuAn.cacchucnang.$error.required">Vui lòng nhập nhiệm vụ</span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="inputEmail3" class="col-sm-3 control-label">Tên công việc</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control" id="tencongviec" name="tencongviec" placeholder="Vui lòng nhập người thực hiện" ng-model="tencongviec" ng-required="true" >
                                                                    <span style="color: red; padding-left:30px;" id="helpBlock2" class="help-block" ng-show="frmDuAn.tencongviec.$error.required">Vui lòng nhập người thực hiện</span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="inputEmail3" class="col-sm-3 control-label">Nhiệm Vụ</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control" id="nhiemvu" name="nhiemvu" placeholder="Vui lòng nhập ngày bắt đầu" ng-model="nhiemvu" ng-required="true" />
                                                                    <span style="color: red; padding-left:30px;" id="helpBlock2" class="help-block" ng-show="frmDuAn.nhiemvu.$error.required">Vui lòng nhập ngày bắt đầu</span>

                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="inputEmail3" class="col-sm-3 control-label">Ngày Bắt Đầu</label>
                                                                <div class="col-sm-9">
                                                                    <input type="date" class="form-control" id="ngaybatdau" name="ngaybatdau" placeholder="Vui lòng nhập ngày kết thúc" ng-model="ngaybatdau" ng-required="true" />
                                                                    <span style="color: red; padding-left:30px;" id="helpBlock2" class="help-block" ng-show="frmDuAn.ngaybatdau.$error.required">Vui lòng nhập ngày kết thúc</span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="inputEmail3" class="col-sm-3 control-label">Ngày Kết Thúc</label>
                                                                <div class="col-sm-9">
                                                                    <input type="date" class="form-control" id="ngayketthuc" name="ngayketthuc" placeholder="Vui lòng nhập ngày kết thúc" ng-model="ngayketthuc" ng-required="true" />
                                                                    <span style="color: red; padding-left:30px;" id="helpBlock2" class="help-block" ng-show="frmDuAn.ngayketthuc.$error.required">Vui lòng nhập ngày kết thúc</span>
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
<script type="text/javascript" src="angularjs/angular.js"></script>
<script type="text/javascript" src="angularjs/angular-route.js"></script>
<!--<script type="text/javascript" src="angularjs/singlepage.js"></script>-->

<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="app/app.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>

</div>
</body>

</html>
