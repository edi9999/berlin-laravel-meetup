var m=angular.module('meetup',['ngResource']);


m.factory("Item",function($resource) {
	return $resource('/items/:id',{"id":'@id'});
});


m.controller('ItemController',['$scope','$http','Item',function ($scope,$http,Item)
{
	$scope.items=Item.query(); //All Items

	$scope.edit=function (item) {
		item.editing=!item.editing;
		if (!item.editing)
			item.$update()
	}

	$scope.delete=function (item) {
		item.$delete({},(function  (item) {
			var index=$scope.items.indexOf(item)-1;
 			$scope.items.splice(index,1);
		}));
	}

	$scope.add=function (name) {
		var item=new Item({name:name});
		item.$save({},function(item) {
 			$scope.items.push(item);
		});
	}

}]);
