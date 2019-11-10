
// var app = angular.module('app',[]).component('hellworld', {
//     template: "hello {{$ctrl.name}}, I'M {{$ctrl.app}}"  ,
//     bindings: {name:'@'},
//     controller:function(){
//     this.app='van';
// }
// });


var Myapp = angular.module("Myapp", ["ngRoute"])


.config(['$routeProvider',function($routeProvider){
    $routeProvider
    .when('/User',{
        templateUrl:'User.html',
        controller:'Usercontroller'
    })
    .when('/congviec',{
        templateUrl:"congviec.html",
        controller:'congvieccontroller'
    })
}])
// Myap.controller('plancontroller',['$scope', function($scope){
    
//  }]);
Myapp.controller("User",['$scope', function($scope){
     

 }]);

 Myapp.controller("congvieccontroller",['$scope', function($scope){

 }]);
