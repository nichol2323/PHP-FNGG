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
			
			<h1 id="title" class="page-header text-center">Payroll Report</h1>
			<div id="wholepage" class="row">
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
								<th ng-click="sort('work_time')" class="text-center">Worktime
									<span class="pull-right">
										<i class="fa fa-sort gray" ng-show="sortKey!='work_time'"></i>
										<i class="fa fa-sort" ng-show="sortKey=='work_time'" ng-class="{'fa fa-sort-asc':reverse,'fa fa-sort-desc':!reverse}"></i>
									</span>
								</th>
								<th ng-click="sort('overtime')" class="text-center">Overtime
									<span class="pull-right">
										<i class="fa fa-sort gray" ng-show="sortKey!='overtime'"></i>
										<i class="fa fa-sort" ng-show="sortKey=='overtime'" ng-class="{'fa fa-sort-asc':reverse,'fa fa-sort-desc':!reverse}"></i>
									</span>
								</th>
								<th ng-click="sort('total_worktime')" class="text-center">Total Hour(s)
									<span class="pull-right">
										<i class="fa fa-sort gray" ng-show="sortKey!='total_worktime'"></i>
										<i class="fa fa-sort" ng-show="sortKey=='total_worktime'" ng-class="{'fa fa-sort-asc':reverse,'fa fa-sort-desc':!reverse}"></i>
									</span>
								</th>
								<th ng-click="sort('deduction')" class="text-center">Total Deduction
									<span class="pull-right">
										<i class="fa fa-sort gray" ng-show="sortKey!='deduction'"></i>
										<i class="fa fa-sort" ng-show="sortKey=='deduction'" ng-class="{'fa fa-sort-asc':reverse,'fa fa-sort-desc':!reverse}"></i>
									</span>
								</th>
								<th ng-click="sort('gross_pay')" class="text-center">Gross Pay
									<span class="pull-right">
										<i class="fa fa-sort gray" ng-show="sortKey!='gross_pay'"></i>
										<i class="fa fa-sort" ng-show="sortKey=='gross_pay'" ng-class="{'fa fa-sort-asc':reverse,'fa fa-sort-desc':!reverse}"></i>
									</span>
								</th>
								<th ng-click="sort('net_pay')" class="text-center">Net Pay
									<span class="pull-right">
										<i class="fa fa-sort gray" ng-show="sortKey!='net_pay'"></i>
										<i class="fa fa-sort" ng-show="sortKey=='net_pay'" ng-class="{'fa fa-sort-asc':reverse,'fa fa-sort-desc':!reverse}"></i>
									</span>
								</th>
								<th ng-click="sort('date_create')" class="text-center">Payroll Date
									<span class="pull-right">
										<i class="fa fa-sort gray" ng-show="sortKey!='date_create'"></i>
										<i class="fa fa-sort" ng-show="sortKey=='date_create'" ng-class="{'fa fa-sort-asc':reverse,'fa fa-sort-desc':!reverse}"></i>
									</span>
								</th>

								<th class="text-center">Action</th>
							</tr>
						</thead>
						<tbody>
							<tr dir-paginate="member in members|orderBy:sortKey:reverse|filter:search|itemsPerPage:10">
								<td>{{ member.emp_name }}</td>
								<td>{{ member.work_time }}</td>
								<td>{{ member.overtime }}</td>
								<td>{{ member.total_worktime }}</td>
								<td>{{ member.deduction }}</td>
								<td>{{ member.gross_pay }}</td>
								<td>{{ member.net_pay }}</td>
								<td>{{ member.date_create }}</td>
								<td>
									<button type="button" class="btn btn-primary" ng-click="showEdit(); selectMember(member);"><i class="fa fa-print"></i> Print</button>
								</td>

							</tr>
						</tbody>
					</table>
					<div class="pull-right" style="margin-top:-30px;">
						<dir-pagination-controls max-size="10" direction-links="true" boundary-links="true">
						</dir-pagination-controls>
					</div>
				</div>
			</div>
			<?php include('payroll-report-modal.php'); ?>
		</div>
		<script src="js/dirPaginate.js"></script>
		<script src="js/payroll-report-angular.js"></script>
	</body>

	</html>
<?php
} else {
	header("Location: index.php");
	exit();
}
?>