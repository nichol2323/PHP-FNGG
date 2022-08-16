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
    <script src="js/angular.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body ng-controller="memberdata" ng-init="fetch()">
    <!-- nav -->
    <?php include_once('header.php'); ?>
    <!-- END nav -->
    <div class="container">
        <h1 class="page-header text-center">Project</h1>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="alert alert-success text-center" ng-show="success">
                    
                    <i class="fa fa-check"></i> {{ successMessage }}
                </div>
                <div class="alert alert-danger text-center" ng-show="error">
                    
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
                            <th ng-click="sort('name')" class="text-center">Name
                                <span class="pull-right">
                                    <i class="fa fa-sort gray" ng-show="sortKey!='name'"></i>
                                    <i class="fa fa-sort" ng-show="sortKey=='name'"
                                        ng-class="{'fa fa-sort-asc':reverse,'fa fa-sort-desc':!reverse}"></i>
                                </span>
                            </th>
                            <th ng-click="sort('start_date')" class="text-center">Start Date
                                <span class="pull-right">
                                    <i class="fa fa-sort gray" ng-show="sortKey!='start_date'"></i>
                                    <i class="fa fa-sort" ng-show="sortKey=='start_date'"
                                        ng-class="{'fa fa-sort-asc':reverse,'fa fa-sort-desc':!reverse}"></i>
                                </span>
                            </th>
                            <th ng-click="sort('end_date')" class="text-center">End Date
                                <span class="pull-right">
                                    <i class="fa fa-sort gray" ng-show="sortKey!='end_date'"></i>
                                    <i class="fa fa-sort" ng-show="sortKey=='end_date'"
                                        ng-class="{'fa fa-sort-asc':reverse,'fa fa-sort-desc':!reverse}"></i>
                                </span>
                            </th>
                            <th ng-click="sort('status')" class="text-center">Status
                                <span class="pull-right">
                                    <i class="fa fa-sort gray" ng-show="sortKey!='status'"></i>
                                    <i class="fa fa-sort" ng-show="sortKey=='status'"
                                        ng-class="{'fa fa-sort-asc':reverse,'fa fa-sort-desc':!reverse}"></i>
                                </span>
                            </th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr dir-paginate="member in members|orderBy:sortKey:reverse|filter:search|itemsPerPage:5">
                            <td>{{ member.name }}</td>
                            <td>{{ member.start_date| date:'MM/dd/yyyy' }}</td>
                            <td>{{ member.end_date | date:'MM/dd/yyyy' }}</td>
                            <td>{{ member.status }}</td>
                            <td>
                                <button type="button" class="btn btn-primary"
                                    ng-click="showDelete(); selectMember(member);"> <i class="fa fa-plus"></i>
                                    Insert</button>
                                <button type="button" class="btn btn-success"
                                    ng-click="showEdit(); selectMember(member);"><i class="fa fa-edit"></i>
                                    Edit</button>
                                    <button href="" class="btn btn-danger" ng-click="showAdd(); selectMember(member);"><i class="fa fa-plus"></i> Delete</button>
                                    
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="pull-right" style="margin-top:-30px;">
                    <dir-pagination-controls max-size="5" direction-links="true" boundary-links="true">
                    </dir-pagination-controls>
                </div>
            </div>
        </div>
        <?php include('project-modal.php'); ?>
        
    </div>
    
    <script src="js/dirPaginate.js"></script>
    <script src="js/project-angular.js"></script>

</body>



</html>
<?php
} else {
  header("Location: index.php");
  exit();
}
?>