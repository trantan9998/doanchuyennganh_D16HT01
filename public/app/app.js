var app = angular.module('my-app',[]);
app.controller('DuAnController',function($scope,$http,$filter){
	$http.get("http://127.0.0.1:8000/list")
	.then(function mySuccess (response){
		$scope.duans = response.data ;
	});
	$scope.modal = function(state,id) {
		$scope.state = state;
		switch (state){
			case "add":
				$scope.frmTitle = "KHỞI TẠO DỰ ÁN";
				$scope.tenduan = null;
				$scope.chiphi = null;
				$scope.sothanhvien = null;
				$scope.nguoichiutrachnhiem = null;
				$scope.ngaybatdau = null;
				$scope.ngayketthuc = null;
				break;
			case "edit":
				$scope.frmTitle = "CẬP NHẬP LẠI DỰ ÁN";
				$scope.id = id;
				$http.get('http://127.0.0.1:8000/' +'edit/'+ id)
				.then(function mySuccess (response){
					$scope.tenduan = response.data.tenduan;
					$scope.chiphi = response.data.chiphi;
					$scope.sothanhvien = response.data.sothanhvien;
					$scope.nguoichiutrachnhiem = response.data.nguoichiutrachnhiem;
					$scope.ngaybatdau =  new Date(response.data.ngaybatdau);
					$scope.ngayketthuc = new Date(response.data.ngayketthuc);
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
			var dateStart = $filter('date')(new Date($scope.ngaybatdau), 'MM/dd/yyyy');
			var dateEnd = $filter('date')(new Date($scope.ngayketthuc), 'MM/dd/yyyy');
			var data = $.param({tenduan:$scope.tenduan, chiphi:$scope.chiphi, sothanhvien:$scope.sothanhvien, nguoichiutrachnhiem:$scope.nguoichiutrachnhiem, ngaybatdau: dateStart, ngayketthuc: dateEnd});
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
			var dateStart = $filter('date')(new Date($scope.ngaybatdau), 'MM/dd/yyyy');
			var dateEnd = $filter('date')(new Date($scope.ngayketthuc), 'MM/dd/yyyy');
            var data = $.param({tenduan:$scope.tenduan, chiphi:$scope.chiphi, sothanhvien:$scope.sothanhvien, nguoichiutrachnhiem:$scope.nguoichiutrachnhiem, ngaybatdau: dateStart, ngayketthuc: dateEnd});
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
