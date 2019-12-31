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
            <img src="img/login.png" style="width: 90px; height: 90px">
        </li>
        <br>
        <li>
            User:  <span style="color: white"> van tan</span>
        </li>
        <hr>
        <li>
            <a href="duan" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-flag"></i>
                    </span>
                <span class="text" style="background-color: #1c294e">DỰ ÁN</span>
            </a>
        </li>
        <hr class="sidebar-divider my-3">
        <!-- Nav Item - Dashboard -->
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
        <div >
            <h1 style="background-color: lavender"><u>DỰ ÁN:</u>
                @foreach($postbai as $Postbai)
                    {{$Postbai -> Tenduan}}
                @endforeach
            </h1>
            <hr class="bg-gradient-dark">
            <!-- Lists container -->
            <h4 style="margin-top: 20px;margin-bottom: 20px; color:brown;"><b><u>HOÀN THÀNH CÔNG VIỆC TRƯỚC NGÀY:</u></b>
                @foreach($postbai as $Postbai)
                    {{$Postbai -> Ngayketthuc}}
                @endforeach
            </h4>

            <div class="content" >
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div><br>
                                    <b>DỰ KIẾN:</b> <input class="text" style="margin-left: 68px"><br><br>
                                    <b>HOÀN TẤT CÔNG VIỆC:</b> <input class="text">%
                                    <b style="margin-left: 100px;">CHƯA HOÀN THÀNH:</b> <input class="text">%

                                </div>
                                <div class="content table-responsive table-full-width" style="background-color: lavender">
                                   <div style=" font-size: 15px; margin-left: 100px;margin-top: 20px;">
                                       <span style="color: #1c294e"><u> UPLOAD FILE</u></span>
                                        <form class="md-form">
                                            <div class="file-field">
                                                <a class="btn-floating peach-gradient mt-0 float-left">
                                                    <i class="fas fa-paperclip" aria-hidden="true"></i>
                                                    <input type="file">
                                                </a>
                                            </div>
                                        </form>
                                    </div>
                                    <div  style="width: 900px; margin-top: 100px; margin-left: 100px;">
                                        <h3 style="color: black;" >Nội dung</h3>
                                        <script src="https://cdn.ckeditor.com/4.8.0/full-all/ckeditor.js"></script>
                                        <textarea name="" id="editor" cols="30" rows="60">
                                     </textarea>
                                    </div>
                                    <div style="margin-left: 400px; margin-top: 10px;">
                                        <a name="" id="" class="btn btn-primary" href="#" role="button">Lưu những thay đổi</a>
                                        <a name="" id="" class="btn btn-primary" href="#" role="button">Hủy Bỏ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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
<script src="js/jsckeditor.js"></script>
<script src="assets/javascrip/upload.js"></script>
</body>
</html>
