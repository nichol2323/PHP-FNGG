<!-- Delete Modal -->
<div class="myModal" ng-show="DeleteModal">
	<div class="modalContainer">
		<div class="deleteHeader">
			<span class="headerTitle">Timeout Employee</span>
			<button class="closeDelBtn pull-right" ng-click="DeleteModal = false">&times;</button>
		</div>
		<div class="modalBody">
			<h5 class="text-center">Are you sure you want to Timeout Employee</h5>
			<h2 class="text-center">{{clickMember.emp_name}}</h2>
		</div>
		<hr>
		<div class="modalFooter">
			<div class="footerBtn pull-right">
				<button class="btn btn-default" ng-click="DeleteModal = false"><span class="glyphicon glyphicon-remove"></span> Cancel</button> <button class="btn btn-danger" ng-click="DeleteModal = false; deleteMember(); "><span class="glyphicon glyphicon-trash"></span> Yes</button>
			</div>
		</div>
	</div>
</div>