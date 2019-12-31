// dangnhap.controller('HomeController',$window ,function ($scope, $location, $rootScope, $sce, $http) {
//     // document.getElementById("abc").style.display = "block";
//     // document.getElementById("IsVisible").style.display = "none";
//     // document.getElementById("register").style.display = "block";
//     $scope.mydata;
//     $http.get("http://127.0.0.1:8000/listregister")
//         .then(function (response) {
//             $scope.mydata = response.data;
//             angular.forEach($scope.mydata, function (item) {
//             })
//         });
//
//     $scope.login = function () {
//         var stat = "false";
//         angular.forEach($scope.mydata, function (item) {
//             if ($scope.loginform.$valid) {
//                 if ((item.tendangnhap == $scope.tentaikhoan && (item.matkhau == $scope.matkhau)) ){
//                     alert('login successful');
//                     $rootScope.isLoggedIn = true;
//                     $window.open('http://127.0.0.1:8000/duan','_blank')
//                 }
//                 else {
//                     $rootScope.isLoggedIn = false;
//                     window.localStorage.setItem("isLoggedIn", $rootScope.isLoggedIn);
//                     $scope.loginMessage = $sce.trustAsHtml('<i class="fa fa-exclamation-triangle"></i> check your email id and password');
//                     console.log($scope.loginMessage);
//                 }
//             }
//
//         });
//     };
// });
