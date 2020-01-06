var app = angular.module('my-app',[]);
app.controller('congvieccontroller',function($scope,$http,$filter){
    $http.get("http://127.0.0.1:8000/listcongviec")
        .then(function mySuccess (response){
            $scope.congviecs = response.data ;
        });
    $scope.modal = function(state,id) {
        $scope.state = state;
        switch (state){
            case "add":
                $scope.frmTitle = "PHÂN CHIA CÔNG VIỆC";
                $scope.tenthanhvien = null;
                $scope.vaitro = null;
                $scope.chucnang = null;
                $scope.tencongviec = null;
                $scope.nhiemvu = null;
                break;
            case "edit":
                $scope.frmTitle = "CẬP NHẬP LẠI CÔNG VIỆC";
                $scope.id = id;
                $http.get('http://127.0.0.1:8000/' +'editcongviec/'+ id)
                    .then(function mySuccess (response){
                        $scope.tenthanhvien = response.data.tenthanhvien;
                        $scope.vaitro = response.data.vaitro;
                        $scope.chucnang = response.data.chucnang;
                        $scope.tencongviec = response.data.tencongviec;
                        $scope.nhiemvu = response.data.nhiemvu;

                    });
                break;
            default : $scope.frmTitle = "...";
                break;

        }


    };
    $scope.save = function(state,id)
    {
        if (state == "add") {
            var url = 'http://127.0.0.1:8000/addcongviec';
            var data = $.param({tenthanhvien:$scope.tenthanhvien, vaitro:$scope.vaitro, chucnang:$scope.chucnang, tencongviec:$scope.tencongviec, nhiemvu:$scope.nhiemvu});
            $http({
                method : 'POST',
                url: url,
                data: data,
                headers : {'Content-type':'application/x-www-form-urlencoded'}
            })
                .then(function(response){
                    console.log(response);
                    location.reload();
                });
        }
        if (state == "edit") {
            var url = 'http://127.0.0.1:8000/'+'editcongviec/'+ id;
            var data = $.param({tenthanhvien:$scope.tenthanhvien, vaitro:$scope.vaitro, chucnang:$scope.chucnang, tencongviec:$scope.tencongviec, nhiemvu:$scope.nhiemvu});
            $http({
                method : 'POST',
                url: url,
                data: data,
                headers : {'Content-type':'application/x-www-form-urlencoded'}
            })
                .then(function(response){
                    console.log(response);
                    location.reload();
                });
        }
    };
    $scope.cfDelete = function(id)
    {
        var iscfDelete = confirm('Bạn có muốn xoá không');
        if (iscfDelete ) {
            $http.get('http://127.0.0.1:8000/' +'deletecongviec/'+ id)
                .then(function(response){
                    console.log(response);
                    location.reload();
                });
        }
        else{
            return false;
        }
    }
});
