angular.module('AngularJSLogin', [])
    .controller('AngularJSLoginController', ['$scope', '$http', function($scope, $http) {
        this.loginForm = function() {
            var user_data='tentaikhoan=' + this.inputData.tentaikhoan + '&matkhau='+this.inputData.matkhau;
            $http({
                method: 'POST',
                url: 'login.php',
                data: user_data,
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            })
                .success(function(data) {
                    console.log(data);
                    if ( data.trim() === 'OK') {
                        window.location.href = 'webcomee.php';
                    } else {
                        $scope.errorMsg = "Tên đăng nhập hoặc mật khẩu không đúng";
                    }
                })
        }

    }]);
