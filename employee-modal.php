<!-- Edit Modal -->
<div class="myModal" ng-show="EditModal">
	<div class="modalContainer">
		<div class="editHeader">
			<span class="headerTitle">Edit Employee</span>
			<button class="closeEditBtn pull-right" ng-click="EditModal = false">&times;</button>
		</div>
		<div class="modalBody">
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<label>Firstname:</label>
						<input type="text" class="form-control" ng-model="clickMember.fname">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label>Middlename:</label>
						<input type="text" class="form-control" ng-model="clickMember.mname">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label>Lastname:</label>
						<input type="text" class="form-control" ng-model="clickMember.lname">
					</div>
				</div>
			</div> 
		
			<!--  -->
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Date of Birth:</label>
						<input type="text" class="form-control" ng-model="clickMember.date_of_birth">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Place of Birth:</label>
						<input type="text" class="form-control" ng-model="clickMember.place_of_birth">
					</div>
				</div>
			</div>
			<!--  -->
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<label>Sex:</label>
						<input type="text" class="form-control" ng-model="clickMember.sex">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label>Civil Status:</label>
						<input type="text" class="form-control" ng-model="clickMember.civil_status">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label>Nationality:</label>
						<input type="text" class="form-control" ng-model="clickMember.nationality">
					</div>
				</div>
			</div>
			<!--  -->
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Phone:</label>
						<input type="text" class="form-control" ng-model="clickMember.phone">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Address:</label>
						<input type="text" class="form-control" ng-model="clickMember.address">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<label>SSS:</label>
						<input type="text" class="form-control" ng-model="clickMember.sss_id" disabled>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label>TIN:</label>
						<input type="text" class="form-control" ng-model="clickMember.tin_id" disabled>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label>NBI:</label>
						<input type="text" class="form-control" ng-model="clickMember.nbi_id" disabled>
					</div>
				</div>
			</div>

			<!-- <div class="row">
				<div class="col-md-6">
					<label>Select Project:</label>
				</div>
				<div class="col-md-6">
					<select class="form-control" ng-model="clickMember.project_id">						
						<?php

						// $servername = "localhost";
						// $username = "root";
						// $password = "";
						// $dbname = "fngg";

						// // Create connection
						// $conn = new mysqli($servername, $username, $password, $dbname);
						// // Check connection
						// if ($conn->connect_error) {
						// 	die("Connection failed: " . $conn->connect_error);
						// }

						// $sql = "SELECT * FROM project WHERE status = 'ACTIVE'";
						// $result = $conn->query($sql);

						// if ($result->num_rows > 0) {
						// 	// output data of each row
						// 	while ($row = $result->fetch_assoc()) {
						// 		echo '<option value="' . $row["project_id"]." ".$row["name"] .'">' .$row["project_id"]. " ". $row["name"] . '</option>';
						// 	}
						// } else {
						// 	echo "0 results";
						// }
						// $conn->close();
						?>

					</select>
				</div>
			</div> -->



		</div>
		<hr>
		<div class="modalFooter">
			<div class="footerBtn pull-right">
				<button class="btn btn-default" ng-click="EditModal = false"><span class="glyphicon glyphicon-remove"></span> Cancel</button> <button class="btn btn-success" ng-click="EditModal = false; updateMember();"><span class="glyphicon glyphicon-check"></span> Save</button>
			</div>
		</div>
	</div>
</div>

<!-- Delete Modal -->
<div class="myModal" ng-show="DeleteModal">
	<div class="modalContainer">
		<div class="deleteHeader">
			<span class="headerTitle">Delete Employee</span>
			<button class="closeDelBtn pull-right" ng-click="DeleteModal = false">&times;</button>
		</div>
		<div class="modalBody">
			<h5 class="text-center">Are you sure you want to delete Employee</h5>
			<h2 class="text-center">{{clickMember.fname}} {{clickMember.lname}}</h2>
		</div>
		<hr>
		<div class="modalFooter">
			<div class="footerBtn pull-right">
				<button class="btn btn-default" ng-click="DeleteModal = false"><span class="glyphicon glyphicon-remove"></span> Cancel</button> <button class="btn btn-danger" ng-click="DeleteModal = false; deleteMember(); "><span class="glyphicon glyphicon-trash"></span> Yes</button>
			</div>
		</div>
	</div>
</div>