<!DOCTYPE html>
<html lang="en">
<head>
	<script src="js/vendor/angular.js"></script>
	<script src="js/vendor/angular-resource.js"></script>
	<script src="js/item.js"></script>
	<meta charset="UTF-8">
	<title></title>
</head>
<body ng-app="meetup">

<div ng-controller="ItemController">

	<div ng-repeat="item in items">
		<span ng-show="!item.editing">{{item.name}}</span>
		<input ng-show="item.editing" type="text" ng-model="item.name">
		<input type="checkbox" ng-model="item.checked">
		<button ng-click="edit(item)">Edit</button>
		<button ng-click="delete(item)">Delete</button>
	</div>
	<form action="" ng-submit="add(itemName)">
		<input type="text" placeholder="Add item" ng-model="itemName">
	</form>
</div>
</body>
</html>
