app.controller("siteCtrl", [ '$scope', '$sce', '$wpApi', function ($scope, $sce, $wpApi) {
	
	$scope.menus = {
		main: [],
		top: []
	};

	$scope.current = {
		primaryTitle: 'Angular.js based WordPress Theme',
		primarySubTitle: 'This theme is controlled by Angular.js' 
	};

	$scope.getMainMenu = function () {
		$wpApi.get('basic-angular-theme/v1/menu-locations/main-menu', null, function (data) {
			$scope.menus.main = data;
		});
	};

	$scope.getTopMenu = function () {
		$wpApi.get('basic-angular-theme/v1/menu-locations/top-menu', null, function (data) {
			$scope.menus.top = data;
		});
	};

	$scope.trustAsHtml = function (str) {
		return $sce.trustAsHtml(str);
	};

}]);

app.controller("frontPageCtrl", [ '$scope', '$wpApi', function ($scope, $wpApi) {
   
    $scope.articles = [];
    
    $scope.init = function () {
    	$wpApi.get('wp/v2/posts', null, function (data) {
    		$scope.articles = data;
    	});
    };

}]);