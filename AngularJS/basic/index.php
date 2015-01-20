<!DOCTYPE html>
<head>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- Bootstrap theme -->
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap Javascript -->
    <script src="js/bootstrap.min.js"></script>


</head>

<body>
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">AngularJS Basic</a>
			</div>
		</div>
	</div>

	<div class="container theme-showcase">
		<div class="jumbotron">
			<h1>AngularJS Basic</h1>
			<p>My first AngularJS test</p>
		</div>

		<div ng-app="MyApp1">
			<div ng-controller="BasicController">
				<p>Name: <input type="text" ng-model="data.name"></p>
				<p ng-bind="data.name"></p>
				<p>{{data.name}}</p>
				
				<div class="{{data.name}}">
					<h1>Header</h1>
					<p>The name controls the class of this div.</p>
				</div>
				
				<table class="table table-striped">
					<tr><td>cell 1</td><td>cell 2</td></tr>
					<tr><td>cell 1</td><td>cell 2</td></tr>
					<tr><td>cell 1</td><td>cell 2</td></tr>
				</table>
			</div>
		</div>
	</div>

	<!-- AngularJS -->
	<script src="js/angular.min.js"></script>

	<!-- My Angular Controllers --->
	<script src="js/basic.js"></script>

</body>
