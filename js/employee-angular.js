var app = angular.module('app', ['angularUtils.directives.dirPagination']);
app.controller('memberdata',function($scope, $http, $window){
	$scope.AddModal = false;
    $scope.EditModal = false;
    $scope.DeleteModal = false;

    $scope.errorfname = false;
	$scope.errormname = false;
	$scope.errorlname = false;
	$scope.errordate_of_birth = false;
	$scope.errorplace_of_birth = false;
	$scope.errorsex = false;
	$scope.errorcivil_status = false;
	$scope.errornationality = false;
	$scope.errorphone = false;
	$scope.erroraddress = false;
	$scope.errorsss_id = false;
	$scope.errortin_id = false;
	$scope.errornbi_id = false;
	

    $scope.showAdd = function(){
    	$scope.fname = null;
    	$scope.mname = null;
		$scope.lname = null;
		$scope.date_of_birth = null;
		$scope.place_of_birth = null;
		$scope.sex = null;
		$scope.civil_status = null;
		$scope.nationality = null;
		$scope.phone = null;
		$scope.address = null;
		$scope.sss_id = null;
		$scope.tin_id = null;
		$scope.nbi_id = null;
		

    	
    	$scope.errorfname = false;
		$scope.errormname = false;
		$scope.errorlname = false;
		$scope.errordate_of_birth = false;
		$scope.errorplace_of_birth = false;
		$scope.errorsex = false;
		$scope.errorcivil_status = false;
		$scope.errornationality = false;
		$scope.errorphone = false;
		$scope.erroraddress = false;
		$scope.errorsss_id = false;
		$scope.errortin_id = false;
		$scope.errornbi_id = false;
		

    	$scope.AddModal = true;
    }
  
    $scope.fetch = function(){
    	$http.get("employee-fetch.php").success(function(data){ 
	        $scope.members = data; 
	    });
    }

    $scope.sort = function(keyname){
        $scope.sortKey = keyname;   
        $scope.reverse = !$scope.reverse;
    }

    $scope.clearMessage = function(){
    	$scope.success = false;
    	$scope.error = false;
    }

    $scope.addnew = function(){
    	$http.post(
            "employee-add.php", {
                'fname': $scope.fname,
                'mname': $scope.mname,
				'lname': $scope.lname,
				'date_of_birth': $scope.date_of_birth,
				'place_of_birth': $scope.place_of_birth,
				'sex': $scope.sex,
				'civil_status': $scope.civil_status,
				'nationality': $scope.nationality,
				'phone': $scope.phone,
				'address': $scope.address,
				'sss_id': $scope.sss_id,
				'tin_id': $scope.tin_id,
				'nbi_id': $scope.nbi_id,
				
            }
        ).success(function(data) {
        	if(data.fname){
        		$scope.errorfname = true;
				$scope.errormname = false;
				$scope.errorlname = false;
				$scope.errordate_of_birth = false;
				$scope.errorplace_of_birth = false;
				$scope.errorsex = false;
				$scope.errorcivil_status = false;
				$scope.errornationality = false;
				$scope.errorphone = false;
				$scope.erroraddress = false;
				$scope.errorsss_id = false;
				$scope.errortin_id = false;
				$scope.errornbi_id = false;
        		$scope.errorMessage = data.message;
        		$window.document.getElementById('fname').focus();
        	}
        	else if(data.errormname){
        		$scope.errorfname = false;
				$scope.errormname = true;
				$scope.errorlname = false;
				$scope.errordate_of_birth = false;
				$scope.errorplace_of_birth = false;
				$scope.errorsex = false;
				$scope.errorcivil_status = false;
				$scope.errornationality = false;
				$scope.errorphone = false;
				$scope.erroraddress = false;
				$scope.errorsss_id = false;
				$scope.errortin_id = false;
				$scope.errornbi_id = false;
        		$scope.errorMessage = data.message;
        		$window.document.getElementById('mname').focus();
        	}
			else if(data.errorlname){
        		$scope.errorfname = false;
				$scope.errormname = false;
				$scope.errorlname = true;
				$scope.errordate_of_birth = false;
				$scope.errorplace_of_birth = false;
				$scope.errorsex = false;
				$scope.errorcivil_status = false;
				$scope.errornationality = false;
				$scope.errorphone = false;
				$scope.erroraddress = false;
				$scope.errorsss_id = false;
				$scope.errortin_id = false;
				$scope.errornbi_id = false;
        		$scope.errorMessage = data.message;
        		$window.document.getElementById('lname').focus();
        	}
			else if(data.errordate_of_birth){
        		$scope.errorfname = false;
				$scope.errormname = false;
				$scope.errorlname = false;
				$scope.errordate_of_birth = true;
				$scope.errorplace_of_birth = false;
				$scope.errorsex = false;
				$scope.errorcivil_status = false;
				$scope.errornationality = false;
				$scope.errorphone = false;
				$scope.erroraddress = false;
				$scope.errorsss_id = false;
				$scope.errortin_id = false;
				$scope.errornbi_id = false;
        		$scope.errorMessage = data.message;
        		$window.document.getElementById('date_of_birth').focus();
        	}
			else if(data.errorplace_of_birth){
        		$scope.errorfname = false;
				$scope.errormname = false;
				$scope.errorlname = false;
				$scope.errordate_of_birth = false;
				$scope.errorplace_of_birth = true;
				$scope.errorsex = false;
				$scope.errorcivil_status = false;
				$scope.errornationality = false;
				$scope.errorphone = false;
				$scope.erroraddress = false;
				$scope.errorsss_id = false;
				$scope.errortin_id = false;
				$scope.errornbi_id = false;
        		$scope.errorMessage = data.message;
        		$window.document.getElementById('place_of_birth').focus();
        	}
			else if(data.errorsex){
        		$scope.errorfname = false;
				$scope.errormname = false;
				$scope.errorlname = false;
				$scope.errordate_of_birth = false;
				$scope.errorplace_of_birth = false;
				$scope.errorsex = true;
				$scope.errorcivil_status = false;
				$scope.errornationality = false;
				$scope.errorphone = false;
				$scope.erroraddress = false;
				$scope.errorsss_id = false;
				$scope.errortin_id = false;
				$scope.errornbi_id = false;
        		$scope.errorMessage = data.message;
        		$window.document.getElementById('sex').focus();
        	}
			else if(data.errorcivil_status){
        		$scope.errorfname = false;
				$scope.errormname = false;
				$scope.errorlname = false;
				$scope.errordate_of_birth = false;
				$scope.errorplace_of_birth = false;
				$scope.errorsex = false;
				$scope.errorcivil_status = true;
				$scope.errornationality = false;
				$scope.errorphone = false;
				$scope.erroraddress = false;
				$scope.errorsss_id = false;
				$scope.errortin_id = false;
				$scope.errornbi_id = false;
        		$scope.errorMessage = data.message;
        		$window.document.getElementById('civil_status').focus();
        	}
			else if(data.errornationality){
        		$scope.errorfname = false;
				$scope.errormname = false;
				$scope.errorlname = false;
				$scope.errordate_of_birth = false;
				$scope.errorplace_of_birth = false;
				$scope.errorsex = false;
				$scope.errorcivil_status = false;
				$scope.errornationality = true;
				$scope.errorphone = false;
				$scope.erroraddress = false;
				$scope.errorsss_id = false;
				$scope.errortin_id = false;
				$scope.errornbi_id = false;
        		$scope.errorMessage = data.message;
        		$window.document.getElementById('nationality').focus();
        	}
			else if(data.errorphone){
        		$scope.errorfname = false;
				$scope.errormname = false;
				$scope.errorlname = false;
				$scope.errordate_of_birth = false;
				$scope.errorplace_of_birth = false;
				$scope.errorsex = false;
				$scope.errorcivil_status = false;
				$scope.errornationality = false;
				$scope.errorphone = true;
				$scope.erroraddress = false;
				$scope.errorsss_id = false;
				$scope.errortin_id = false;
				$scope.errornbi_id = false;
        		$scope.errorMessage = data.message;
        		$window.document.getElementById('phone').focus();
        	}
			else if(data.erroraddress){
        		$scope.errorfname = false;
				$scope.errormname = false;
				$scope.errorlname = false;
				$scope.errordate_of_birth = false;
				$scope.errorplace_of_birth = false;
				$scope.errorsex = false;
				$scope.errorcivil_status = false;
				$scope.errornationality = false;
				$scope.errorphone = false;
				$scope.erroraddress = true;
				$scope.errorsss_id = false;
				$scope.errortin_id = false;
				$scope.errornbi_id = false;
        		$scope.errorMessage = data.message;
        		$window.document.getElementById('address').focus();
        	}
			else if(data.errorsss_id){
        		$scope.errorfname = false;
				$scope.errormname = false;
				$scope.errorlname = false;
				$scope.errordate_of_birth = false;
				$scope.errorplace_of_birth = false;
				$scope.errorsex = false;
				$scope.errorcivil_status = false;
				$scope.errornationality = false;
				$scope.errorphone = false;
				$scope.erroraddress = false;
				$scope.errorsss_id = true;
				$scope.errortin_id = false;
				$scope.errornbi_id = false;
        		$scope.errorMessage = data.message;
        		$window.document.getElementById('sss_id').focus();
        	}
			else if(data.errortin_id){
        		$scope.errorfname = false;
				$scope.errormname = false;
				$scope.errorlname = false;
				$scope.errordate_of_birth = false;
				$scope.errorplace_of_birth = false;
				$scope.errorsex = false;
				$scope.errorcivil_status = false;
				$scope.errornationality = false;
				$scope.errorphone = false;
				$scope.erroraddress = false;
				$scope.errorsss_id = false;
				$scope.errortin_id = true;
				$scope.errornbi_id = false;
        		$scope.errorMessage = data.message;
        		$window.document.getElementById('tin_id').focus();
        	}
			else if(data.errornbi_id){
        		$scope.errorfname = false;
				$scope.errormname = false;
				$scope.errorlname = false;
				$scope.errordate_of_birth = false;
				$scope.errorplace_of_birth = false;
				$scope.errorsex = false;
				$scope.errorcivil_status = false;
				$scope.errornationality = false;
				$scope.errorphone = false;
				$scope.erroraddress = false;
				$scope.errorsss_id = false;
				$scope.errortin_id = false;
				$scope.errornbi_id = true;
        		$scope.errorMessage = data.message;
        		$window.document.getElementById('nbi_id').focus();
        	}
        	else if(data.error){
        		$scope.errorfname = false;
				$scope.errormname = false;
				$scope.errorlname = false;
				$scope.errordate_of_birth = false;
				$scope.errorplace_of_birth = false;
				$scope.errorsex = false;
				$scope.errorcivil_status = false;
				$scope.errornationality = false;
				$scope.errorphone = false;
				$scope.erroraddress = false;
				$scope.errorsss_id = false;
				$scope.errortin_id = false;
				$scope.errornbi_id = false;

        		$scope.error = true;
        		$scope.errorMessage = data.message;
        	}
        	else{
        		$scope.AddModal = false;
        		$scope.success = true;
        		$scope.successMessage = data.message;
        		$scope.fetch();
        	}
        });
    }

    $scope.selectMember = function(member){
    	$scope.clickMember = member;
    }

    $scope.showEdit = function(){
    	$scope.EditModal = true;
    }

    $scope.updateMember = function(){
    	$http.post("employee-edit.php", $scope.clickMember)
    	.success(function(data) {
        	if(data.error){
        		$scope.error = true;
        		$scope.errorMessage = data.message;
        		$scope.fetch();
        	}
        	else{
        		$scope.success = true;
        		$scope.successMessage = data.message;
        	}
        });
    }

    $scope.showDelete = function(){
    	$scope.DeleteModal = true;
    }

    $scope.deleteMember = function(){
    	$http.post("employee-delete.php", $scope.clickMember)
    	.success(function(data) {
        	if(data.error){
        		$scope.error = true;
        		$scope.errorMessage = data.message;
        	}
        	else{
        		$scope.success = true;
        		$scope.successMessage = data.message;
        		$scope.fetch();
        	}
        });
    }

});