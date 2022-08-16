<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>
<!DOCTYPE html>
<html lang="en" ng-app="app">
<head>
<meta charset="utf-8">
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
<div class="container">
    <h1 class="page-header text-center">Compute Payroll</h1>
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
						<th ng-click="sort('emp_name')" class="text-center">Employee
                        	<span class="pull-right">
                       			<i class="fa fa-sort gray" ng-show="sortKey!='emp_name'"></i>
                       			<i class="fa fa-sort" ng-show="sortKey=='emp_name'" ng-class="{'fa fa-sort-asc':reverse,'fa fa-sort-desc':!reverse}"></i>
                       		</span>
                        </th>
						<th ng-click="sort('date_start')" class="text-center">Date Start
                        	<span class="pull-right">
                       			<i class="fa fa-sort gray" ng-show="sortKey!='date_start'"></i>
                       			<i class="fa fa-sort" ng-show="sortKey=='date_start'" ng-class="{'fa fa-sort-asc':reverse,'fa fa-sort-desc':!reverse}"></i>
                       		</span>
                        </th>
						<th ng-click="sort('date_end')" class="text-center">Date End
                        	<span class="pull-right">
                       			<i class="fa fa-sort gray" ng-show="sortKey!='date_end'"></i>
                       			<i class="fa fa-sort" ng-show="sortKey=='date_end'" ng-class="{'fa fa-sort-asc':reverse,'fa fa-sort-desc':!reverse}"></i>
                       		</span>
                        </th>
                        <th ng-click="sort('worktime')" class="text-center">Worktime (h)
                        	<span class="pull-right">
                       			<i class="fa fa-sort gray" ng-show="sortKey!='worktime'"></i>
                       			<i class="fa fa-sort" ng-show="sortKey=='worktime'" ng-class="{'fa fa-sort-asc':reverse,'fa fa-sort-desc':!reverse}"></i>
                       		</span>
                        </th>
                        <th ng-click="sort('overtime')" class="text-center">Overtime (h)
	                        <span class="pull-right">
	                       		<i class="fa fa-sort gray" ng-show="sortKey!='overtime'"></i>
	                       		<i class="fa fa-sort" ng-show="sortKey=='overtime'" ng-class="{'fa fa-sort-asc':reverse,'fa fa-sort-desc':!reverse}"></i>
	                       	</span>
                        </th>
						<th ng-click="sort('total')" class="text-center">Total (h)
	                        <span class="pull-right">
	                       		<i class="fa fa-sort gray" ng-show="sortKey!='total'"></i>
	                       		<i class="fa fa-sort" ng-show="sortKey=='total'" ng-class="{'fa fa-sort-asc':reverse,'fa fa-sort-desc':!reverse}"></i>
	                       	</span>
                        </th>
                       	<th class="text-center">Action</th>
						   <th style="display: none;" class="text-center">v1</th>
						   <th style="display: none;" class="text-center">v2</th>
						   <th style="display: none;" class="text-center">v3</th>
						   <th style="display: none;" class="text-center">v4</th>
						
                    </tr>
                </thead>
				<tbody>
					<tr dir-paginate="member in members|orderBy:sortKey:reverse|filter:search|itemsPerPage:10">
						<td>{{ member.emp_name }}</td>
						<td>{{ member.date_start }}</td>
						<td>{{ member.date_end }}</td>
						<td>{{ member.worktime }}</td>
						<td>{{ member.overtime }}</td>
						<td>{{ member.total }}</td>
						
						<td>
						<button type="button" class="btn btn-success" ng-click="showEdit(); selectMember(member);"><i class="fa fa-edit"></i> Compute</button> 
						</td>
						<td style="display: none;">{{ member.v1 }}</td>
						<td style="display: none;">{{ member.v2 }}</td>
						<td style="display: none;">{{ member.v3 }}</td>
						<td style="display: none;">{{ member.v4 }}</td>

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
	<?php include('payroll-modal.php'); ?>
</div>
<script src="js/dirPaginate.js"></script>
<script src="js/payroll-angular.js"></script>
</body>
</html>
<?php
} else {
  header("Location: index.php");
  exit();
}
?>