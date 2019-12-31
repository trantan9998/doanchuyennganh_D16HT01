<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>DAILY WORK</title>
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/trello.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-gradient-success" style="height: 2em;font-size: 15px;">
    <div class="navbar-collapse collapse w-25 order-1 order-xl-1 dual-collapse2">
        <ul class="navbar-nav mr-auto text-white">
            <b> BỘ PHẬN - THÀNH VIÊN</b>
        </ul>
    </div>

    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">TÀI KHOẢN</a>
                <div class="dropdown-menu " style="font-size: 13px;">
                    <a class="dropdown-item" href="#">Thông tin user</a>
                    <a class="dropdown-item" href="#">Đăng xuất</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"></a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<!-- Page Wrapper -->
<div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #1c294e; ">
        <!-- Sidebar - Brand -->

        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
            </div>
            <div class="sidebar-brand-text mx-3">DAILY-WORK<sup>(^^)</sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-3">
        <li>
            <img src="img/login.png" width="100px" ;height="100px">
        </li>
        <br>
        <li>
            User:  <span style="color: white"> van tan</span>
        </li>
        <hr>
        <!-- Nav Item - Dashboard -->
        <li >
            <a href="duan" class="btn btn-primary btn-icon-split ">
                    <span class="icon text-white-50">
                      <i class="fas fa-flag"></i>
                    </span>
                <span class="text" style="background-color: #985f0d;font-size: 11px"><b> THÔNG TIN <br>DỰ ÁN</b></span>
            </a>
        </li>
        <hr class="sidebar-divider my-3">
        <li>
            <a href="congviec" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white">
                      <i class="fas fa-flag"></i>
                    </span>
                <span class="text" style="background-color: #4f1915;font-size: 11px"><b>CÔNG VIỆC</b></span>
            </a>
        </li>
        <hr class="sidebar-divider my-3">
        <li>
            <a href="postbai" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-flag"></i>
                    </span>
                <span class="text" style="background-color: #0f6848;font-size: 11px"><b>BÁO CÁO</b></span>
            </a>
        </li>
        <!-- Sidebar Toggler (Sidebar) -->
        <hr class="sidebar-divider my-3">


    </ul>
    <div style="width: 100%">
        <!-- Topbar -->
        <nav style="background: #2d4373;padding: 10px;height: 40px;">
            <marquee>
                <p class="category" style="font-size: 17px;color: white">DỰ ÁN ĐƯỢC TRIỂN KHAI KHI CÓ <b>THÔNG BÁO</b>
                    <span>- CHÚC CÁC THÀNH VIÊN NHÓM HOÀN THÀNH TỐT CÔNG VIỆC</span>
                </p>
            </marquee>
        </nav>
        <nav class="navbar navbar-light bg-gray topbar mb static-shadow">
            <h2 style="opacity: 0.8; "><u>DỰ ÁN:</u> Xây dựng website bán hàng
{{--                @foreach($user as $User)--}}
                {{--                    {{$User -> tenduan}}--}}
                {{--                @endforeach--}}

            </h2>
        </nav>

        <br>
        <div >
            <!-- End of board info bar -->
            <!-- Lists container -->
            <section class="lists-container" >
                <div class="list" >
                    <h3 class="list-title">TÊN CÔNG VIỆC:</h3>
                    <ul class="list-items">
                        @foreach($congviec as $Congviec)
                            <li>{{$Congviec->chucnang}}</li>
                        @endforeach
                    </ul>
                    <!-- <button class="add-card-btn btn">Add a card</button> -->
                </div>
                <div class="list" >
                    <h3 class="list-title">CÔNG VIỆC CẦN LÀM</h3>
                    <ul class="list-items">
                        @foreach($congviec as $Congviec)
                            <li>{{$Congviec->tencongviec}}</li>
                        @endforeach
                    </ul>
                    {{--                <button class="add-card-btn btn">Add a card</button>--}}
                </div>
                <div class="list" style="background-color: #1F77D0">
                    <h3 class="list-title" style="color: white">THỜI GIAN BẮT ĐẦU</h3>
                    <ul class="list-items">
{{--                        @foreach($congviec as $Congviec)--}}
{{--                            <li>{{$Congviec->ngaybatdau}}</li>--}}
{{--                        @endforeach--}}
                            <li>12/02/2019</li>

                    </ul>
                </div>
                <div class="list" style="background-color: firebrick" >

                    <h3 class="list-title" style="color: white">THỜI GIAN KẾT THÚC </h3>

                    <ul class="list-items" >
{{--                        @foreach($congviec as $Congviec)--}}
{{--                            <li>{{$Congviec->ngaybatdau}}</li>--}}
{{--                        @endforeach--}}
                        <li>01/03/2020</li>
                    </ul>
                </div>
                <!-- <div ng-ap="myapp" ng-controller="member">
                <form>
                          <input type="text" ng-model="ID">
                          <input type="text" ng-model="chucnang">
                          <input type="button" value="submit" ng-click="user_datamysql()">
                  </form>
                </div> -->
            </section>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="js/sb-admin-2.min.js"></script>
</body>
</html>
