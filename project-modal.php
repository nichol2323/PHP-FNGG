<!-- Add Modal -->
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.2/angular.min.js">
    </script>
<div class="myModal" ng-show="AddModal">
    <div class="modalContainer">
        <div class="deleteHeader">
            <span class="headerTitle">Delete project</span>
            <button class="close pull-right" ng-click="AddModal = false">&times;</button>
        </div>
        <div class="modalBody">
            <h5 class="text-center">Are you sure you want to delete project</h5>
            <h2 class="text-center">{{clickMember.name}}</h2>
        </div>
        <hr>
        <div class="modalFooter">
            <div class="footerBtn pull-right">
                <button class="btn btn-default" ng-click="AddModal = false"><span
                        class="glyphicon glyphicon-remove"></span> Cancel</button> <button class="btn btn-danger"
                    ng-click="addnew(); AddModal = false;"><span class="glyphicon glyphicon-floppy-disk"></span>
                    Delete</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Modal -->
<div ng-app="app1" class="myModal" ng-show="EditModal">
    <div class="modalContainer">
        <div class="editHeader">
            <span class="headerTitle">Manage Project</span>
            <button class="closeEditBtn pull-right" ng-click="EditModal = false">&times;</button>
        </div>
        <div class="modalBody" >
        
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Project Name: </label>
                        <input type="text" class="form-control" ng-model="clickMember.name">
                    </div>
                </div>
            </div>
            <div class="row" >
                <div class="col-md-6">
                    
                    
                    <b>Start Date:</b><input class="form-control" type="date" id="txtDate1"
                        value="{{clickMember.start_date}}" ng-model="clickMember.start_date" disabled>

                        
                </div>
                <div class="col-md-6">
                    <script>
                    $(function() {
                        var dtToday = new Date();

                        var month = dtToday.getMonth() + 1;
                        var day = dtToday.getDate();
                        var year = dtToday.getFullYear();
                        if (month < 10)
                            month = '0' + month.toString();
                        if (day < 10)
                            day = '0' + day.toString();

                        var maxDate = year + '-' + month + '-' + day;
                        $('#txtDate2').attr('min', maxDate);
                    });
                    </script>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                    <b>End Date: {{ ddMMyyyy }}</b><input class="form-control" type="date" id="txtDate2"
                        value="{{clickMember.end_date}}" ng-model="clickMember.end_date">
                    </div>
            </div>
            <div class="row">

                <div class="col-md-12">
                    <div class="form-group">
                        <label>Status:</label>
                        <select class="form-control" ng-model="clickMember.status">
                            <option value="ACTIVE">ACTIVE</option>
                            <option value="DONE">DONE</option>
                        </select>
                        <script>
                            
                        </script>
                    </div>
                </div>
            </div>

        </div>
        <hr>
        <div class="modalFooter">
            <div class="footerBtn pull-left" style="margin-left: 10px;">


                <!-- <button class="btn btn-danger" ng-click="EditModal = false"><span
                        class="glyphicon glyphicon-trash" ng-click="EditModal = false; addnew();"></span> Delete this Project</button> -->
            </div>
            <div class="footerBtn pull-right">
                <button class="btn btn-default" ng-click="EditModal = false"><span
                        class="glyphicon glyphicon-remove"></span> Cancel</button> <button class="btn btn-success"
                    ng-click="EditModal = false; updateMember();"><span class="glyphicon glyphicon-save"></span>
                    Save</button>
            </div>
        </div>
    </div>
</div>

<!-- Delete Modal -->
<div class="myModal" ng-show="DeleteModal">
    <div class="modalContainer">
        <div class="modalHeader">
            <span class="headerTitle"> {{clickMember.name}}</span>
            <button class="closeBtn pull-right" ng-click="DeleteModal = false">&times;</button>
        </div>
        <div class="modalBody">
            <div class="form-group">
                <input type="text" value="{{clickMember.name}}" ng-model="clickMember.name" style="display: none;">
                <input type="text" value="{{clickMember.project_id}}" ng-model="clickMember.project_id"
                    style="display: none;">
                <label>Select Employee:</label>
                <select class="form-control" ng-model="clickMember.qr_text">
                    <?php
						$servername = "localhost";
						$username = "root";
						$password = "";
						$dbname = "fngg";

						// Create connection
						$conn = new mysqli($servername, $username, $password, $dbname);
						// Check connection
						if ($conn->connect_error) {
							die("Connection failed: " . $conn->connect_error);
						}

						$sql = "SELECT * FROM employee WHERE project_id = 0";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							// output data of each row
							while ($row = $result->fetch_assoc()) {
								echo '<option value="' . $row["qr_text"] .'">' .$row["qr_text"] . '</option>';
							}
						} else {
							echo "0 results";
						}
						$conn->close();
					?>
                </select>

            </div>
        </div>
        <hr>
        <div class="modalFooter">
            <div class="footerBtn pull-right">
                <button class="btn btn-default" ng-click="DeleteModal = false"><span
                        class="glyphicon glyphicon-remove"></span> Cancel</button> <button class="btn btn-primary"
                    ng-click="DeleteModal = false; deleteMember(); "><span class="glyphicon glyphicon-save"></span>
                    Save</button>
            </div>
        </div>
    </div>
</div>