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
        <a href="quanly" class=" btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-flag"></i>
                    </span>
            <span class="text" >---QUẢN LÝ DỰ ÁN--</span>
        </a>
    </li>
    <hr>
    <li>
        <a href="qlthanhvien" class=" btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-flag"></i>
                    </span>
            <span class="text" >---QL THÀNH VIÊN--</span>
        </a>
    </li>

    <hr>
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

    <!-- Sidebar Toggler (Sidebar) -->
    <hr class="sidebar-divider my-3">
</ul>

<div style="width: 100%;background-color: #a5cae0" class="content" >
    <div class="container-fluid">
        <nav style="background-color: #dddfeb">
            <h4>---QUẢN LÝ DỰ ÁN---</h4>
        </nav>
        <br>
        <div class="row clearfix">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-8 ">
<!--                 <button class="w3-button w3-xlarge w3-circle w3-teal">+</button>-->
                <div class="info-box hover-expand-effect">
                    <div class="icon">
                        <button id="btn-add"  data-toggle="modal" data-target="#myModal"  class="w3-button w3-lg w3 w3-pink bg-gradient-success" ng-click="modal('add')">+ THÊM MỚI DỰ ÁN</button>
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
                                    <div class="container bg-light">
                                        <table class="table table-bordered table-responsive table-striped ">
                                            <thead>
                                            <tr style="font-size: 13px">
                                                <th>MÃ DỰ ÁN</th>
                                                <th>TÊN DỰ ÁN</th>
                                                <th>CHI PHÍ DỰ ÁN</th>
                                                <th>SỐ THÀNH VIÊN THỰC HIỆN</th>
                                                <th>NGÀY BẮT ĐẦU</th>
                                                <th>NGÀY KẾT THÚC</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr ng-repeat="da in duans">
                                                <td>{{ da.id }}</td>
                                                <td>{{ da.tenduan }}</td>
                                                <td>{{ da.chiphi }}</td>
                                                <td>{{ da.sothanhvien }}</td>
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
                                            <div class="modal-dialog " style="color: #1c294e;">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-gradient-light">
                                                    <h4 class="modal-title">{{ frmTitle }}</h4>
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
                                                                <label for="inputEmail3" class="col-sm-3 control-label">Chi Phí Dự Án</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control" id="chiphi" name="chiphi" placeholder="Vui lòng nhập nhiệm vụ" ng-model="chiphi"  ng-required="true" />
                                                                    <span style="color: red; padding-left:30px;" id="helpBlock2" class="help-block" ng-show="frmDuAn.chiphi.$error.required">Vui lòng nhập Chức năng</span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="inputEmail3" class="col-sm-4 control-label">Số Thành Viên</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control" id="sothanhvien" name="sothanhvien" placeholder="Vui lòng nhập người thực hiện" ng-model="sothanhvien" ng-required="true" >
                                                                    <span style="color: red; padding-left:30px;" id="helpBlock2" class="help-block" ng-show="frmDuAn.sothanhvien.$error.required">Vui lòng nhập Tên công việc</span>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="inputEmail3" class="col-sm-3 control-label">Ngày Bắt Đầu</label>
                                                                <div class="col-sm-9">
                                                                    <input type="date" class="form-control" id="ngaybatdau" name="ngaybatdau" placeholder="Vui lòng nhập ngày kết thúc" ng-model="ngaybatdau" ng-required="true" />
                                                                    <span style="color: red; padding-left:30px;" id="helpBlock2" class="help-block" ng-show="frmDuAn.ngaybatdau.$error.required">Vui lòng nhập ngày Bắt đầu</span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="inputEmail3" class="col-sm-4 control-label">Ngày Kết Thúc</label>
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
