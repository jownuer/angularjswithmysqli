<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Angular JS - INSERT DATA</title>
	<!-- Angular JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.0-rc.2/angular.min.js"></script>
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- JQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container" style="width: 500px;">
		<h3 align="center">Angular JS with MySQL Database</h3>
		<div ng-app="myApp" ng-controller="usercontroller" ng-init="disPlayData()">
			<label>FirstName :</label>
				<input type="text" name="fName" ng-model="fName" class="form-control">
			<label>LastName :</label>
				<input type="text" name="lName" ng-model="lName" class="form-control">
			<br>
			<input type="submit" name="btnInsert" ng-click="insertData()" class="btn btn-info" value="{{btnName}}">
			<br><br>
			<table class="table table-bordered">
				<tr>
					<th>ID</th>
					<th>FirstName</th>
					<th>LastName</th>
					<th>Update</th>
					<th>Delete</th>
				</tr>
				<tr ng-repeat="x in names">
					<td>{{ x.id }}</td>
					<td>{{ x.fname }}</td>
					<td>{{ x.lname }}</td>
					<td><button class="btn btn-info btn-xs" ng-click="updateData(x.id, x.fname, x.lname)">Update</button></td>
					<td><button class="btn btn-danger btn-xs" ng-click="deleteData(x.id)">Delete</button></td>
				</tr>
			</table>

		</div>
	</div>
	
	<!-- Script -->
	<script src="app.js"></script>

	<!-- Sweet Alert -->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>