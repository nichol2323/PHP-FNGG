<script>
        function printpayslip(){
            document.getElementById('not').style.display = 'none';
			document.getElementById('buttons').style.display = 'none';
			document.getElementById('wholepage').style.display = 'none';
			document.getElementById('title').style.display = 'none';
            window.print();
			
			document.getElementById('not').style.display = 'block';
			document.getElementById('buttons').style.display = 'block';
			document.getElementById('wholepage').style.display = 'block';
			document.getElementById('title').style.display = 'block';
        }
</script>
<div class="myModal" ng-show="EditModal">
	<div class="modalContainer">
	<div id="not" class="editHeader">
			
		</div>
		<div class="modalBody">
		<table id="my-section" border="1px solid black" align="center" style="text-align: center;">
			<tr>
				<th>EmployeeName</th>
				<td>{{ clickMember.emp_name }}</td>
			</tr>
			<tr>
				<th>Worktime</th>
				<td>{{ clickMember.work_time }}</td>
			</tr>
			<tr>
				<th>Overtime</th>
				<td>{{ clickMember.overtime }}</td>
			</tr>
			<tr>
				<th>Total</th>
				<td>{{ clickMember.total_worktime }}</td>
			</tr>
			<tr>
				<th>SSS Contribution</th>
				<td>{{ clickMember.sss_contribution }}</td>
			</tr>
			<tr>
				<th>PhilHealth Contribution</th>
				<td>{{ clickMember.philhealth_contribution }}</td>
			</tr>
			<tr>
				<th>Pag-ibig Contribution</th>
				<td>{{ clickMember.pagibig_contribution }}</td>
			</tr>
			<tr>
				<th>Other Deduction</th>
				<td>{{ clickMember.other_deduction }}</td>
			</tr>
			<tr>
				<th>Total Deduction</th>
				<td>{{ clickMember.deduction }}</td>
			</tr>
			<tr>
				<th>GrossPay</th>
				<td>{{ clickMember.gross_pay }}</td>
			</tr>
			<tr>
				<th>NetPay</th>
				<td> {{ clickMember.net_pay }}</td>
			</tr>
			<tr>
				<th>PayrollDate </th>
				<td> {{ clickMember.date_create }} </td>
			</tr>
			<tr>
				<th>StartingDate</th>
				<td> {{ clickMember.starting_date }} </td>
			</tr>
			<tr>
				<th>EndingDate</th>
				<td> {{ clickMember.ending_date }} </td>
			</tr>
			<tr>
				<th>Status</th>
				<td style="text-align: center;"> {{ clickMember.payroll_status }} </td>
			</tr>
				
			</table>
			
		</div>
		<hr>
		<div id="buttons" class="modalFooter">
			<div class="footerBtn pull-right">
				<button class="btn btn-default" ng-click="EditModal = false"><span class="glyphicon glyphicon-remove"></span> Cancel</button> 
				<button class="btn btn-primary"  onclick="printpayslip();"><span class="glyphicon glyphicon-print" target="_blank"></span> Print</button> 
			</div>
		</div>
	</div>
</div>