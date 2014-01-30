<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<script src="js/item.js"></script>
	<script src="js/vendor/angular.js"></script>
	<script src="js/vendor/angular-route.js"></script>
	<script src="js/vendor/angular-resource.js"></script>
	<script src="js/vendor/angular-sanitize.js"></script>
<script>
		App={};
		App.token= "<?php echo $_token; ?>";
	</script>
	<title>Laravel PHP Framework</title>
</head>
<body ng-app>

<div ng-controller="ItemController">
<h1>My shopping list</h1>
<ul>
	<li ng-repeat="item in items"> 

		<span ng-if="!item.editing"  ng-bind="item.name"></span>
		<span ng-if="item.editing"> 
			<input type="text" ng-model="item.name"/>		
</span>
		<input type="checkbox" ng-model="item.checked"/>
		<a ng-click="toggleEdit(item)" href="#">Edit me</a>
		<a ng-click="delete(item)" href="#">Delete me</a>
	</li>
	<form ng-submit="addItem(newItem)" ng-valid="">
		<input type="text" ng-model="newItem" ng-valid="text">
	</form>
</ul>

</div>

</body>
</html>
