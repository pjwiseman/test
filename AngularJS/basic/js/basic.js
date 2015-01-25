var myApp = angular.module('MyApp1', []);

myApp.factory('Data', function() {
	return {word1: 'Crikey ', word2: 'Croc' };
});

myApp.controller('BasicController', ['$window', '$scope', 'Data', function($window, $scope, Data) {
	$scope.data = {name: Data.word1 + "Hello"};
	$scope.click = function() { $window.alert($scope.data.name); window.alert('test2'); };
}]);

myApp.filter('world', ['Data', function(Data) {
	return function(text) {
		return text + [' World', Data.word2].join(' ');
	}
}]);

myApp.directive("superman", function() {
  return {
    restrict: "E",
    template: "<div> Here I am to save the day </div>"
  }
});
