var app = angular.module('MyApp1', []);

app.factory('Data', function() {
	return {word1: 'Crikey ', word2: 'Croc' };
});

app.controller('BasicController', ['$window', '$scope', 'Data', function($window, $scope, Data) {
	$scope.data = {name: Data.word1 + "Hello"};
	$scope.click = function() { $window.alert($scope.data.name); window.alert('test2'); };
	console.log("Created basic controller");
}]);

app.filter('world', ['Data', function(Data) {
	return function(text) {
		return text + [' World', Data.word2].join(' ');
	}
}]);

app.directive("superman", function() {
  return {
    restrict: "E",
    template: "<div> Here I am to save the day </div>"
  }
});

app.directive("well", function(){
 return function(scope, element) {
	element.addClass('well');
    }
});

app.directive("panel", function(){
 return function(scope, element) {
	element.addClass('panel');
    }
});

app.directive("flag", function(){
 return function(scope, element) {
	element.addClass('flag');
    }
});

app.directive("enter", function(){
 return function(scope, element) {
      element.bind("mouseenter", function(){
		element.addClass('well');
      })
    }
});

app.directive("kid", function() {
  return {
    restrict: "E",
	scope: {},
    template: 'Kid: <input type="text" ng-model="chore"> {{chore}}'
  };
});
