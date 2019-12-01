var register = angular.module('myregister',[]);
register.controller('registerController',function($scope,$http,$filter){
    $http.get("http://127.0.0.1:8000/list")
        .then(function mySuccess (response){
            $scope.registers = response.data ;
        });
    $scope.modal = function(state,id) {
        $scope.state = state;
        switch (state){
            case "add":
                $scope.frmTitle = "THÊM THÀNH VIÊN";
                $scope.hovaten = null;
                $scope.diachi = null;
                $scope.sdt = null;
                $scope.tentaikhoan=null;
                $scope.matkhau=null;
                break;
            case "edit":
                $scope.frmTitle = "SỬA THÀNH VIÊN";
                $scope.id = id;
                $http.get('http://127.0.0.1:8000/' +'edit/'+ id)
                    .then(function mySuccess (response){
                        $scope.hovaten = null;
                        $scope.diachi = null;
                        $scope.sdt = null;
                        $scope.tentaikhoan=null;
                        $scope.matkhau=null;
                    });
                break;
            default : $scope.frmTitle = "...";
                break;

        }


    };
    $scope.save = function(state,id)
    {
        if (state == "add") {
            var url = 'http://127.0.0.1:8000/add';
            var data = $.param({hovaten:$scope.hovaten, diachi:$scope.diachi, sdt:$scope.sdt,tentaikhoan:$scope.tentaikhoan,matkhau:$scope.matkhau});
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
            var url = 'http://127.0.0.1:8000/'+'edit/'+ id;
            var data = $.param({hovaten:$scope.hovaten, diachi:$scope.diachi, sdt:$scope.sdt,tentaikhoan:$scope.tentaikhoan,matkhau:$scope.matkhau});
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
            $http.get('http://127.0.0.1:8000/' +'delete/'+ id)
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
