<!DOCTYPE html >
<html lang="en" >
<head >
    <meta charset="utf-8" >
    <meta name="robots" content="noindex" >
    <title >login</title >
    <meta name="viewport" content="width=device-width, initial-scale=1" >
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" >
</head >
<body ng-app="AngularJSLogin" ng-controller="AngularJSLoginController as loginCtrl" >
<div class="container" >
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2" >
        <div class="panel panel-success" >
            <div class="panel-heading" >
                <div class="panel-title" > ĐĂNG NHẬP</div >
            </div >
            <div style="padding-top:30px" class="panel-body" >
                <form name="login" ng-submit="loginCtrl.loginForm()" class="form-horizontal"  >
                    <div style="margin-bottom: 25px" class="input-group" >
                        <span class="input-group-addon">  <i class="glyphicon glyphicon-user" >  </i > </span>
                        <input type="text" id="inputusername" class="form-control" required autofocus ng-model="loginCtrl.inputData.tentaikhoan" >
                    </div >

                    <div style="margin-bottom: 25px;" class="input-group " >
                        <span class="input-group-addon "> <i class="glyphicon glyphicon-adjust " > </i > </span >
                        <input type="password" id="inputpassword" class="form-control" required ng-model="loginCtrl.inputData.matkhau" >
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12 controls">
                            <button type="submit" class="btn btn-success pull-left" class="glyphicon glyphicon-log-in"> ĐĂNG NHẬP</button>
                        </div>
                    </div>
                    <div class="alert alert-danger" ng-show="errorMsg">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                            × </button>
                        <span class="glyphicon glyphicon-hand-right">{{errorMsg}} </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.9/angular.min.js"></script >
<script  type="text/javascript" src="loginangularjs.js"></script>
</body>
</html>
