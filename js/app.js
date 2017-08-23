var app = angular.module("basicAngularThemeApp", [
	"ngRoute"
]);

app.config(function($routeProvider) {
    $routeProvider
    .when("/", {
        templateUrl : themeUrl + "/templates/frontpage.html",
        controller : "frontPageCtrl"
    })
});

app.controller("frontPageCtrl", function ($scope) {
    $scope.msg = "I love London";
});