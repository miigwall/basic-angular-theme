app.service('$wpApi', [ '$http', function ($http) {

	var WP_API_ENDPOINT = '/wp-json/';

	this.get = function(endpoint, data, callback) {

		$http({ 
			 method: 'GET'
			,url: WP_API_ENDPOINT + endpoint
			// ,data: data
			,headers: { 'Content-Type' : 'application/json' }})
		.then((response) => {
			callback(response.data, null);
		}, (error) => {
			callback(null, error);
		});
	
	};

}]);