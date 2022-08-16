var app = angular.module('app', ['angularUtils.directives.dirPagination']);
app.controller('memberdata', function($scope, $http, $window) {

    $scope.AddModal = false;
    $scope.EditModal = false;
    $scope.DeleteModal = false;

    $scope.errorFirstname = false;

    $scope.showAdd = function() {
        $scope.firstname = null;
        $scope.lastname = null;
        $scope.address = null;
        $scope.errorFirstname = false;
        $scope.errorLastname = false;
        $scope.errorAddress = false;
        $scope.AddModal = true;
    }

    $scope.fetch = function() {
        $http.get("project-fetch.php").success(function(data) {
            $scope.members = data;
        });
    }

    $scope.sort = function(keyname) {
        $scope.sortKey = keyname;
        $scope.reverse = !$scope.reverse;
    }

    $scope.clearMessage = function() {
        $scope.success = false;
        $scope.error = false;
    }

    $scope.selectMember = function(member) {
        $scope.clickMember = member;
    }

    $scope.showEdit = function() {
        $scope.EditModal = true;
    }

    $scope.addnew = function() {
        $http.post("project-add.php", $scope.clickMember)
            .success(function(data) {
                if (data.error) {
                    $scope.error = true;
                    $scope.errorMessage = data.message;
                    $scope.fetch();
                } else {
                    $scope.success = true;
                    $scope.successMessage = data.message;
                }
            });

    }



    $scope.updateMember = function() {
        $http.post("project-edit.php", $scope.clickMember)
            .success(function(data) {
                if (data.error) {
                    $scope.error = true;
                    $scope.errorMessage = data.message;
                    $scope.fetch();
                } else {
                    $scope.success = true;
                    $scope.successMessage = data.message;
                }
            });
    }

    $scope.showDelete = function() {
        $scope.DeleteModal = true;
    }

    $scope.deleteMember = function() {
        $http.post("project-delete.php", $scope.clickMember)
            .success(function(data) {
                if (data.error) {
                    $scope.error = true;
                    $scope.errorMessage = data.message;
                } else {
                    $scope.success = true;
                    $scope.successMessage = data.message;
                    $scope.fetch();
                }
            });
    }




});