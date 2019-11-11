var app = angular.module('my-app',[]);
app.controller('DuAnController',function($scope,$http,$filter){
	$http.get("http://localhost/ad/public/list")
	.then(function mySuccess (response){
		$scope.duans = response.data ;	
	})
	$scope.modal = function(state,id) {
		$scope.state = state
		switch (state){
			case "add": 
				$scope.frmTitle = "Thêm Sinh Viên";
				$scope.tenduan = null;
				$scope.nhiemvu = null;
				$scope.nguoithuchien = null;
				$scope.ngaybatdau = null;
				$scope.ngayketthuc = null;
				break;
			case "edit": 
				$scope.frmTitle = "Sửa Sinh Viên";
				$scope.id = id;
				$http.get('http://localhost/ad/public/' +'edit/'+ id)
				.then(function mySuccess (response){
					$scope.tenduan = response.data.tenduan;
					$scope.nhiemvu = response.data.nhiemvu;
					$scope.nguoithuchien = response.data.nguoithuchien;
					$scope.ngaybatdau =  new Date(response.data.ngaybatdau);
					$scope.ngayketthuc = new Date(response.data.ngayketthuc);
				});
				break;
			default : $scope.frmTitle = "...";
				break;
		
		}
		
		
	}
	$scope.save = function(state,id)
	{
		if (state == "add") {
			var url = 'http://localhost/ad/public/add';
			var dateStart = $filter('date')(new Date($scope.ngaybatdau), 'MM/dd/yyyy');
			var dateEnd = $filter('date')(new Date($scope.ngayketthuc), 'MM/dd/yyyy');
			var data = $.param({tenduan:$scope.tenduan, nhiemvu:$scope.nhiemvu, nguoithuchien:$scope.nguoithuchien, ngaybatdau: dateStart, ngayketthuc: dateEnd});
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
			var url = 'http://localhost/ad/public/'+'edit/'+ id;
			var dateStart = $filter('date')(new Date($scope.ngaybatdau), 'MM/dd/yyyy');
			var dateEnd = $filter('date')(new Date($scope.ngayketthuc), 'MM/dd/yyyy');
			var data = $.param({tenduan:$scope.tenduan, nhiemvu:$scope.nhiemvu, nguoithuchien:$scope.nguoithuchien, ngaybatdau: dateStart, ngayketthuc: dateEnd});
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
	}
	$scope.cfDelete = function(id)
	{
		var iscfDelete = confirm('Bạn có muốn xoá không');
		if (iscfDelete = true) {
			$http.get('http://localhost/ad/public/' +'delete/'+ id)
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
