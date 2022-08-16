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
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body ng-controller="memberdata" ng-init="fetch()">
	<!-- nav -->
    <?php include_once('header.php'); ?>
    <!-- END nav -->
<div class="container-fluid">
<h1 class="page-header text-center">Timeout</h1>
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
                        <th ng-click="sort('att_login_id')" class="text-center">ID
                        	<span class="pull-right">
                       			<i class="fa fa-sort gray" ng-show="sortKey!='att_login_id'"></i>
                       			<i class="fa fa-sort" ng-show="sortKey=='att_login_id'" ng-class="{'fa fa-sort-asc':reverse,'fa fa-sort-desc':!reverse}"></i>
                       		</span>
                        </th>
                        <th ng-click="sort('emp_name')" class="text-center">Employee Name
	                        <span class="pull-right">
	                       		<i class="fa fa-sort gray" ng-show="sortKey!='emp_name'"></i>
	                       		<i class="fa fa-sort" ng-show="sortKey=='emp_name'" ng-class="{'fa fa-sort-asc':reverse,'fa fa-sort-desc':!reverse}"></i>
	                       	</span>
                        </th>
                        <th ng-click="sort('timein')" class="text-center">Time In
                        	<span class="pull-right">
                       			<i class="fa fa-sort gray" ng-show="sortKey!='timein'"></i>
                       			<i class="fa fa-sort" ng-show="sortKey=='timein'" ng-class="{'fa fa-sort-asc':reverse,'fa fa-sort-desc':!reverse}"></i>
                       		</span>
                       	</th>
						   <th ng-click="sort('description')" class="text-center">Description
                        	<span class="pull-right">
                       			<i class="fa fa-sort gray" ng-show="sortKey!='description'"></i>
                       			<i class="fa fa-sort" ng-show="sortKey=='description'" ng-class="{'fa fa-sort-asc':reverse,'fa fa-sort-desc':!reverse}"></i>
                       		</span>
                       	</th>
                       	<th class="text-center">Action</th>
                    </tr>
                </thead>
				<tbody>
					<tr dir-paginate="member in members|orderBy:sortKey:reverse|filter:search|itemsPerPage:10">
						<td>{{ member.att_login_id }}</td>
						<td>{{ member.emp_name }}</td>
						<td>{{ member.timein }}</td>
						<td>{{ member.description }}</td>
						<td>
							<button style="height: 30px; font-size: 12px" type="button" class="btn btn-danger" ng-click="showDelete(); selectMember(member);"> <i class="fa fa-trash"></i> Timeout</button>
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
	<?php include('attendance-timeout-modal.php'); ?>
</div>
<script src="js/dirPaginate.js"></script>
<script src="js/attendance-angular.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
<?php
} else {
     header("Location: index.php");
     exit();
}
?>