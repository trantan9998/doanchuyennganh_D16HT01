<!DOCTYPE html>
<html lang="en" ng-app="my-app" ng-controller="DuAnController">
<head>
    <meta charset="UTF-8" />

    <title>QUẢN LÝ DỰ ÁN </title>
    <!-- Load Bootstrap CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
<body class="theme-red">
<nav class="navbar navbar-expand-sm navbar-dark bg-gradient-warning" style="height: 2em">
    <div class="navbar-collapse collapse w-25 order-1 order-xl-0 dual-collapse2">
        <ul class="navbar-nav mr-auto text-white">
            <b> BỘ PHẬN - QUẢN LÝ</b>
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
            <span style="color: white">QUẢN LÝ</span>
        </li>
        <hr>
        <!-- Nav Item - Dashboard -->
        <li>
            <a href="quanly">
                <b style="color: lavender ;">
                    <span class="text" >QUẢN LÝ DỰ ÁN</span>
                </b>
            </a>
        </li>
        <hr>
        <li>
            <a href="khachhang">
                <b style="color: lavender ;">
                    <span class="text" >KHÁCH HÀNG</span>
                </b>
            </a>
        </li>
    </ul>

     <div style="width: 100%;background-color: #a5cae0" class="content" >
    <div class="container-fluid">
        <br>
        <nav >
            <h5 class="bg-gradient-primary text-white"><b>QUẢN LÝ DỰ ÁN  \</b></h5>
        </nav>
        <br>
        <div class="row clearfix">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-8 ">
<!--                 <button class="w3-button w3-xlarge w3-circle w3-teal">+</button>-->
                <div class="info-box hover-expand-effect">
                    <div class="icon">
                        <button id="btn-add"  data-toggle="modal" data-target="#myModal"  class="w3-button bg-gradient-light border rounded text-dark" ng-click="modal('add')"><b>+ TRIỂN KHAI DỰ ÁN</b></button>
                    </div>

                </div>

            </div>
        </div>
        <hr>
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
                                            <b>
                                                <th >MÃ SỐ</th>
                                                <th style="width: 16em">TÊN DỰ ÁN</th>
                                                <th>CHI PHÍ DỰ ÁN</th>
                                                <th  style="width: 18em">SỐ THÀNH VIÊN THỰC HIỆN</th>
                                                <th  style="width: 13em">NGƯỜI PHỤ TRÁCH</th>
                                                <th style="color: white;width: 10em;" bgcolor="#00008b">NGÀY BẮT ĐẦU</th>
                                                <th style="color: white;width: 10em;" bgcolor="#8b0000">NGÀY KẾT THÚC</th>
                                            </b>
                                            </thead>
                                            <tbody style="color: #1c294e">
                                            <tr ng-repeat="da in duans">
                                                <td>{{ da.id }}</td>
                                                <td>{{ da.tenduan }}</td>
                                                <td><b style="color: #4f1915">{{ da.chiphi }}</b> (VND)</td>
                                                <td>{{ da.sothanhvien }} <b>THÀNH VIÊN</b></td>
                                                <td>{{ da.nguoichiutrachnhiem }}</td>
                                                <td><i>{{ da.ngaybatdau }}</i></td>
                                                <td><i>{{ da.ngayketthuc }}</i></td>
                                                <td>
                                                    <button class="glyphicon glyphicon-pencil btn btn-default btn-xs btn-detail bg-success text-white" id="btn-edit" data-toggle="modal" data-target="#myModal" ng-click="modal('edit',da.id)" >CHỈNH SỬA</button>
                                                    <button class="glyphicon glyphicon-remove btn btn-danger btn-xl w-100 btn-delete" ng-click="cfDelete(da.id)">GỠ BỎ</button>
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
                                                        <form name="frmDuAn" action="getAdd" method="POST" class="form-horizontal text-primary ">
                                                            <b>
                                                            <div class="form-group">
                                                                <label for="inputEmail3" class="col-sm-3 control-label">DỰ ÁN</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control" id="tenduan" name="tenduan" placeholder="Vui lòng nhập tên dự án" ng-model="tenduan" ng-required="true" />
                                                                    <span style="color: red; padding-left:30px;" id="helpBlock2" class="help-block" ng-show="frmDuAn.tenduan.$error.required">Vui lòng nhập tên dự án</span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="inputEmail3" class="col-sm-12 control-label">CHI PHÍ CHO DỰ ÁN</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control" id="chiphi" name="chiphi" placeholder="Vui lòng nhập số tiền " ng-model="chiphi"  ng-required="true" />
                                                                    <span style="color: red; padding-left:30px;" id="helpBlock2" class="help-block" ng-show="frmDuAn.chiphi.$error.required">vui lòng nhập số tiền <i style="color: #985f0d">(ĐƠN VỊ: ĐỒNG)</i></span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="inputEmail3" class="col-sm-12 control-label">SỐ THÀNH VIÊN THAM GIA</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control" id="sothanhvien" name="sothanhvien" placeholder="Vui lòng nhập số thành viên thực hiện" ng-model="sothanhvien" ng-required="true" >
                                                                    <span style="color: red; padding-left:30px;" id="helpBlock2" class="help-block" ng-show="frmDuAn.sothanhvien.$error.required">Vui lòng nhập số thành viên thực hiện </span>
                                                                </div>
                                                            </div>
                                                                <div class="form-group">
                                                                    <label for="inputEmail3" class="col-sm-12 control-label">NGƯỜI PHỤ TRÁCH</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" id="nguoichiutrachnhiem" name="nguoichiutrachnhiem" placeholder="Vui lòng nhập người phụ trách" ng-model="nguoichiutrachnhiem" ng-required="true" >
                                                                        <span style="color: red; padding-left:30px;" id="helpBlock2" class="help-block" ng-show="frmDuAn.nguoichiutrachnhiem.$error.required">Vui lòng nhập người phụ trách</span>
                                                                    </div>
                                                                </div>

                                                            <div class="form-group">
                                                                <label for="inputEmail3" class="col-sm-12 control-label">NGÀY BẮT ĐẦU DỰ ÁN</label>
                                                                <div class="col-sm-9">
                                                                    <input type="date" class="form-control" id="ngaybatdau" name="ngaybatdau" placeholder="Vui lòng nhập ngày bắt đầu dự án" ng-model="ngaybatdau" ng-required="true" />
                                                                    <span style="color: red; padding-left:30px;" id="helpBlock2" class="help-block" ng-show="frmDuAn.ngaybatdau.$error.required">Vui lòng nhập ngày Bắt đầu</span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="inputEmail3" class="col-sm-12 control-label">NGÀY KẾT THÚC DỰ ÁN</label>
                                                                <div class="col-sm-9">
                                                                    <input type="date" class="form-control" id="ngayketthuc" name="ngayketthuc" placeholder="Vui lòng nhập ngày kết thúc dự án" ng-model="ngayketthuc" ng-required="true" />
                                                                    <span style="color: red; padding-left:30px;" id="helpBlock2" class="help-block" ng-show="frmDuAn.ngayketthuc.$error.required">Vui lòng nhập ngày kết thúc</span>
                                                                </div>
                                                            </div>
                                                            </b>
                                                        </form>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary" ng-click="save(state,id)">HOÀN TẤT DỰ ÁN</button>
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

</body>

</html>
