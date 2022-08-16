<div class="myModal" ng-show="EditModal">
	<div class="modalContainer">
	<div class="editHeader">
			<span class="headerTitle">Payroll</span>
			<button class="closeDelBtn pull-right" ng-click="DeleteModal = false">&times;</button>
		</div>
		<div class="modalBody">
			
			<h2 class="text-center">Deductions</h2>
			<h4 class="text-center">Name: {{clickMember.emp_name}}</h4>
			<div class="row">
				<div class="col-md-6">
				<div class="form-group">
                        <label>SSS Contribution:<label style="color: red;">*</label> </label>
                        <input type="number" class="form-control" ng-model="clickMember.v1" required />
                    </div>
				</div>
				<div class="col-md-6">
				<div class="form-group">
                        <label>PhilHealth Contribution: <label style="color: red;">*</label></label>
                        <input type="number" class="form-control" ng-model="clickMember.v2" required />
                    </div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
				<div class="form-group">
                        <label>Pag-ibig Contribution: <label style="color: red;">*</label></label>
                        <input type="number" class="form-control" ng-model="clickMember.v3" required />
                    </div>

				</div>
				<div class="col-md-6">
				<div class="form-group">
                        <label>Other Deduction/Loan: </label>
                        <input type="number" class="form-control" ng-model="clickMember.v4" required />
                    </div>
				</div>
			</div>
			
			
		</div>
		<hr>
		<div class="modalFooter">
			<div class="footerBtn pull-right">
				<button class="btn btn-default" ng-click="EditModal = false"><span class="glyphicon glyphicon-remove"></span> Cancel</button> <button class="btn btn-success" ng-click="EditModal = false; updateMember();"><span class="glyphicon glyphicon-check"></span> Compute</button>
			</div>
		</div>
	</div>
</div>