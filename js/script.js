	// create the module and name it vitApp
	var vitApp = angular.module('vitApp', ['ngRoute', 'routeStyles']);

	// configure our routes
	vitApp.config(function($routeProvider, $locationProvider) {

		// use the HTML5 History API & set HTM5 mode true
    $locationProvider.html5Mode(true);
		$routeProvider

			// route for the home page
			.when('/vit/', {
				templateUrl : 'home',
				controller  : 'mainController',
				css: 'css/home.css'
			})

			// route for the about page
			.when('/vit/about', {
				templateUrl : 'about',
				controller  : 'aboutController',
				css: 'css/about.css'
			})

			// route for the contact page
			.when('/vit/contact', {
				templateUrl : 'pages/contact.html',
				controller  : 'contactController'
			});



	});

	// create the controller and inject Angular's $scope
	vitApp.controller('mainController', function($scope) {
		// create a message to display in our view
		$scope.message = 'Everyone come and see how good I look!';
		
		$scope.init = function()
		     {
		     	$('.slider').slider({full_width: true});
		        // I'd like to run this on document ready
		     }

		     

	});

	vitApp.controller('aboutController', function($scope) {
		$scope.init = function()
		{
			$('.parallax').parallax();
		}
	});

	vitApp.controller('contactController', function($scope) {
		$scope.message = 'Contact us! PK. This is just a demo.';
	});