<div class="myModal" ng-show="EditModal">
	<div class="modalContainer">
	<div class="editHeader">
			<span class="headerTitle">Payroll</span>
			<button class="closeDelBtn pull-right" ng-click="DeleteModal = false">&times;</button>
		</div>
		<div class="modalBody">
			<h5 class="text-center">Are you sure you want to Confirm Payroll</h5>
			<h2 class="text-center">{{clickMember.emp_name}}</h2>
		</div>
		<hr>
		<div class="modalFooter">
			<div class="footerBtn pull-right">
				<button class="btn btn-default" ng-click="EditModal = false"><span class="glyphicon glyphicon-remove"></span> Cancel</button> <button class="btn btn-success" ng-click="EditModal = false; updateMember();"><span class="glyphicon glyphicon-check"></span> Mark as Paid</button>
			</div>
		</div>
	</div>
</div>