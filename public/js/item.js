function ItemController($scope,$http)
{
	$http.get("items?_token="+App.token).success(function(result)
	{
		$scope.items=result;
		for (var i = 0; i < $scope.length; i++) {
			$scope[i].editing=false;
		};
	});

	$scope.addItem=function(newItem)
	{
		$http.post("items?name="+newItem+"&_token="+App.token).success(function(r)
		{
			$scope.items.push(r);
		});
	}

	$scope.delete=function(item)
	{
		$http.delete("items/"+item.id+"?_token="+App.token).success(function(r)
		{
			var i=$scope.items.indexOf(item);
 			$scope.items.splice(i,1);
		});
	}

	$scope.toggleEdit=function(item)
	{
		if(item.editing)
		{
			$http.put("items/"+item.id+"?name="+item.name+"&checked="+item.checked+"&_token="+App.token).
				success(function(r){
					item.editing=false;
				})
			//save item

		}
		else
			item.editing=true;
	}

}
