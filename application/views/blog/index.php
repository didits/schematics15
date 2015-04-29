<html>
<head>
<title>core-ajax</title>
<script src="<?php echo base_url(); ?>bower_components/webcomponentsjs/webcomponents.js"></script>
<link rel="import" href="<?php echo base_url(); ?>bower_components/core-ajax/core-ajax.html">
</head>
<body>
<core-ajax auto url="<?php echo base_url(); ?>assets/studentList.json" handleAs="json" id="studentDataSource"> </core-ajax>
<template id="student-table-template" bind="{{studentArray}}">
	<table border="1">
		<thead>
			<tr>
				<th>NAME</th>
				<th>COURSE</th>
				<th>MARK</th>
				<th>COUNTRY</th>
			</tr>
		</thead>
		<tbody>
			<template repeat="{{data}}">
				<tr >
					<td>{{name}}</td>
					<td>{{course}}</td>
					<td>{{mark}}</td>
					<td>{{country}}</td>
				</tr>
			</template>
		</tbody>
	</table>
</template>
<script> 
var APP ={ /*AJAX Success Callback Method*/ 
ajaxCallbackHandler : function(e) { document.querySelector('#student-table-template').model = { studentArray: e.detail.response }; } } 
document.addEventListener('polymer-ready', 
function() { var ajax = document.querySelector("#studentDataSource"); 
ajax.addEventListener("core-response",APP.ajaxCallbackHandler); }); 
</script>
</body>
</html>