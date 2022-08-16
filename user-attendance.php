<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
	
?>
<!DOCTYPE html>
<html lang="en" ng-app="app">
<head>
    <meta charset="utf-8">
    
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script> -->
	<script src="js/angular.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body ng-controller="memberdata" ng-init="fetch()">
	<!-- nav -->
    <?php include_once('user-header.php'); ?>
    <!-- END nav -->
<div class="container">
<h1 class="page-header text-center">Personal Attendance Report</h1>
    <div class="row">
		<div class="col-md-8 col-md-offset-2">
			
			<div class="row">
				<div class="col-md-12">
					
					<span class="pull-right">
						<input type="text" ng-model="search" class="form-control" placeholder="Search">
					</span>
				</div>
			</div>
			<table class="table table-bordered table-striped" style="margin-top:10px;">
				<thead>
                    <tr>
                        <th ng-click="sort('firstname')" class="text-center">Timein
                        	<span class="pull-right">
                       			<i class="fa fa-sort gray" ng-show="sortKey!='firstname'"></i>
                       			<i class="fa fa-sort" ng-show="sortKey=='firstname'" ng-class="{'fa fa-sort-asc':reverse,'fa fa-sort-desc':!reverse}"></i>
                       		</span>
                        </th>
                        <th ng-click="sort('lastname')" class="text-center">Timeout
	                        <span class="pull-right">
	                       		<i class="fa fa-sort gray" ng-show="sortKey!='lastname'"></i>
	                       		<i class="fa fa-sort" ng-show="sortKey=='lastname'" ng-class="{'fa fa-sort-asc':reverse,'fa fa-sort-desc':!reverse}"></i>
	                       	</span>
                        </th>
                        <th ng-click="sort('address')" class="text-center">Total Hours
                        	<span class="pull-right">
                       			<i class="fa fa-sort gray" ng-show="sortKey!='address'"></i>
                       			<i class="fa fa-sort" ng-show="sortKey=='address'" ng-class="{'fa fa-sort-asc':reverse,'fa fa-sort-desc':!reverse}"></i>
                       		</span>
                       	</th>
                       
                    </tr>
                </thead>
				<tbody>
					<tr dir-paginate="member in members|orderBy:sortKey:reverse|filter:search|itemsPerPage:8">
						<td>{{ member.timein }}</td>
						<td>{{ member.timeout }}</td>
						<td>{{ member.total_min/60 }}</td>
						
					</tr>
				</tbody>
			</table>
			<div class="pull-right" style="margin-top:-30px;">
				<dir-pagination-controls
				   max-size="10"
				   direction-links="true"
				   boundary-links="true" >
				</dir-pagination-controls>
			</div>
		</div>
	</div>
	
</div>
<script src="js/dirPaginate.js"></script>
<script src="js/userattendance-angular.js"></script>
</body>
</html>
<?php
} else {
  header("Location: index.php");
  exit();
}
?>