var myApp = angular.module('MyApp1', []);

myApp.controller('BasicController', ['$scope', function($scope) {
	$scope.data = {name: "Hello"};
}]);

function BasicController($scope){
	$scope.data = {name: "World"};
}
