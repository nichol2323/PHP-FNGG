<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>
<!DOCTYPE html>
<html lang="en" ng-app="app">
<head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script> -->
	<script src="js/angular.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body ng-controller="memberdata" ng-init="fetch()">
	<!-- nav -->
    <?php include_once('header.php'); ?>
    <!-- END nav -->
<div class="container-fluid">
<h1 class="page-header text-center">Employees</h1>
    <div class="row">
	
		<div class="col-md-8 col-md-offset-2">
			<div class="alert alert-success text-center" ng-show="success">
				<button type="button" class="close" ng-click="clearMessage()"><span aria-hidden="true">&times;</span></button>
				<i class="fa fa-check"></i> {{ successMessage }}
			</div>
			<div class="alert alert-danger text-center" ng-show="error">
				<button type="button" class="close" ng-lick="clearMessage()"><span aria-hidden="true">&times;</span></button>
				<i class="fa fa-warning"></i> {{ errorMessage }}
			</div>
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
                        <th ng-click="sort('fname')" class="text-center">Firstname
                        	<span class="pull-right">
                       			<i class="fa fa-sort gray" ng-show="sortKey!='fname'"></i>
                       			<i class="fa fa-sort" ng-show="sortKey=='fname'" ng-class="{'fa fa-sort-asc':reverse,'fa fa-sort-desc':!reverse}"></i>
                       		</span>
                        </th>
                        <th ng-click="sort('lname')" class="text-center">Lastname
	                        <span class="pull-right">
	                       		<i class="fa fa-sort gray" ng-show="sortKey!='lname'"></i>
	                       		<i class="fa fa-sort" ng-show="sortKey=='lname'" ng-class="{'fa fa-sort-asc':reverse,'fa fa-sort-desc':!reverse}"></i>
	                       	</span>
                        </th>
						<th ng-click="sort('date_of_birth')" class="text-center">Date of Birth
	                        <span class="pull-right">
	                       		<i class="fa fa-sort gray" ng-show="sortKey!='date_of_birth'"></i>
	                       		<i class="fa fa-sort" ng-show="sortKey=='date_of_birth'" ng-class="{'fa fa-sort-asc':reverse,'fa fa-sort-desc':!reverse}"></i>
	                       	</span>
                        </th>
						<th ng-click="sort('project_name')" class="text-center">Project Name
	                        <span class="pull-right">
	                       		<i class="fa fa-sort gray" ng-show="sortKey!='project_name'"></i>
	                       		<i class="fa fa-sort" ng-show="sortKey=='project_name'" ng-class="{'fa fa-sort-asc':reverse,'fa fa-sort-desc':!reverse}"></i>
	                       	</span>
                        </th>
						<th ng-click="sort('phone')" class="text-center">Contact
	                        <span class="pull-right">
	                       		<i class="fa fa-sort gray" ng-show="sortKey!='phone'"></i>
	                       		<i class="fa fa-sort" ng-show="sortKey=='phone'" ng-class="{'fa fa-sort-asc':reverse,'fa fa-sort-desc':!reverse}"></i>
	                       	</span>
                        </th>
						<th ng-click="sort('qrtext')" class="text-center">QR Code
	                        <span class="pull-right">
	                       		<i class="fa fa-sort gray" ng-show="sortKey!='qrtext'"></i>
	                       		<i class="fa fa-sort" ng-show="sortKey=='qrtext'" ng-class="{'fa fa-sort-asc':reverse,'fa fa-sort-desc':!reverse}"></i>
	                       	</span>
                        </th>
                        
                       	<th class="text-center">Action</th>
                    </tr>
                </thead>
				<tbody>
					<tr dir-paginate="member in members|orderBy:sortKey:reverse|filter:search|itemsPerPage:10">
						<td>{{ member.fname }}</td>
						<td>{{ member.lname }}</td>
						<td>{{ member.date_of_birth }}</td>
						<td>{{ member.project_name }}</td>
						<td>{{ member.phone }}</td>
						<td> <a href="img/{{member.qr_text}}.png" target="_blank"><img src="img/{{member.qr_text}}.png"></a></td>
						<td>
							<button style="height: 30px; font-size: 12px" type="button" class="btn btn-success" ng-click="showEdit(); selectMember(member);"><i class="fa fa-edit"></i> Edit</button> 
							<button style="height: 30px; font-size: 12px" type="button" class="btn btn-danger" ng-click="showDelete(); selectMember(member);"> <i class="fa fa-trash"></i> Delete</button>
						</td>

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
	<?php include('employee-modal.php'); ?>
</div>
<script src="js/dirPaginate.js"></script>
<script src="js/employee-angular.js"></script>
</body>
</html>
<?php
} else {
  header("Location: index.php");
  exit();
}
?>