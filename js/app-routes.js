app.config(function($routeProvider, $locationProvider) {
   
    $routeProvider.when("/", {
        templateUrl: themeUrl + "/templates/frontpage.html",
        controller: "frontPageCtrl"
    });

    $locationProvider.html5Mode(true);

});