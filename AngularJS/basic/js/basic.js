var myApp = angular.module('MyApp1', []);

myApp.controller('BasicController', ['$window', '$scope', function($window, $scope) {
	$scope.data = {name: "Hello"};
	$scope.click = function() { $window.alert($scope.data.name); window.alert('test2'); };
}]);

myApp.filter('world', function() {
	return function(text) {
		return text + ' World';
	}
});

