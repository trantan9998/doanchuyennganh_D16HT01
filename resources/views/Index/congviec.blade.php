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

</head>

<body>
<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #1c294e">
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
        <li>
            <a href="duan" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-flag"></i>
                    </span>
                <span class="text" style="background-color: #1c294e">DỰ ÁN</span>
            </a>
        </li>
        <hr class="sidebar-divider my-3">
        <li>
            <a href="congviec" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white">
                      <i class="fas fa-flag"></i>
                    </span>
                <span class="text" style="background-color: #1c294e;">CÔNG VIỆC</span>
            </a>
        </li>
        <hr class="sidebar-divider my-3">
        <li>
            <a href="postbai" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-flag"></i>
                    </span>
                <span class="text" style="background-color: #1c294e">BÁO CÁO</span>
            </a>
        </li>
        <!-- Sidebar Toggler (Sidebar) -->
        <hr class="sidebar-divider my-3">

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
    </ul>

    <div style="width: 100%">
        <!-- Topbar -->
        <nav class="navbar navbar-light bg-gray-400 topbar mb-4 static-shadow">
            <marquee>
                <p class="category" style="font-size: 17px">DỰ ÁN ĐƯỢC TRIỂN KHAI KHI CÓ <b>THÔNG BÁO</b>
                    <span>- CHÚC CÁC THÀNH VIÊN NHÓM HOÀN THÀNH TỐT CÔNG VIỆC</span>
                </p>
            </marquee>
        </nav>
        <nav class="navbar navbar-light bg-gray topbar mb static-shadow">
            <h2 style="opacity: 0.8; "><u>DỰ ÁN:</u>
                @foreach($congviec as $Congviec)
                    {{$Congviec -> Tenduan}}
                @endforeach

                <a name="" id="" class="btn btn-primary " href="" role="button" style="margin-left: 600px">Hoàn thành</a>
                <a name="" id="" class="btn btn-primary " href="" role="button" >Chưa hoàn thành</a>
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
                            <li>{{$Congviec->Tencongviec}}</li>
                        @endforeach
                    </ul>
                    <!-- <button class="add-card-btn btn">Add a card</button> -->
                </div>
                <div class="list" >
                    <h3 class="list-title">CÔNG VIỆC CẦN LÀM</h3>
                    <ul class="list-items">
                        @foreach($congviec as $Congviec)
                            <li>{{$Congviec->Tenchucnang}}</li>
                        @endforeach
                    </ul>
                    {{--                <button class="add-card-btn btn">Add a card</button>--}}
                </div>
                <div class="list" style="background-color: #1F77D0">
                    <h3 class="list-title" style="color: white">THỜI GIAN BẮT ĐẦU</h3>
                    <ul class="list-items">
                        @foreach($congviec as $Congviec)
                            <li>{{$Congviec->Ngaybatdau}}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="list" style="background-color: firebrick" >

                    <h3 class="list-title" style="color: white">THỜI GIAN KẾT THÚC </h3>

                    <ul class="list-items" >
                        @foreach($congviec as $Congviec)
                            <li>{{$Congviec->Ngayketthuc}}</li>
                        @endforeach
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
<script src="vendor/jquery/jquery.min.js"></script>
<script src="js/sb-admin-2.min.js"></script>
</body>
</html>
