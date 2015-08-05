	// create the module and name it vitApp
	var vitApp = angular.module('vitApp', ['ngRoute', 'routeStyles']);
    
	// configure our routes
	vitApp.config(function($routeProvider, $locationProvider) {




		// use the HTML5 History API & set HTM5 mode true
    $locationProvider.html5Mode(true);
		$routeProvider

			//ROUTE FOR HOME SECTION AND SUBSECTIONS//

			// route for the home page
			.when('/vit/', {
				templateUrl : 'home',
				controller  : 'mainController',
				css: '/vit/css/home.css'
			})

			//ROUTE FOR ABOUT SECTION AND SUBSECTIONS//

			// route for the about page
			.when('/vit/about', {
				templateUrl : 'about/overview/overviewPage',
				controller  : 'aboutController',
				css: '/vit/css/about.css'
			})

			// route for the about/leadership page
			.when('/vit/about/leadership', {
				templateUrl : 'leadership/leadershipPage',
				controller  : 'leadershipController',
				css: '/vit/css/leadership.css'
			})

			// route for the about/communityOutreach page
			.when('/vit/about/community', {
				templateUrl : 'community/communityPage',
				controller  : 'communityController',
				css: '/vit/css/communityOutreach.css'
			})

			// route for the about/career page
			.when('/vit/about/career', {
				templateUrl : 'career/careerPage',
				controller  : 'careerController',
				css: '/vit/css/career.css'
			})

			//ROUTE FOR ACADEMICS SECTION AND SUBSECTIONS//

			// route for the academics page
			.when('/vit/academics', {
				templateUrl : 'academics/overview/overviewPage',
				controller  : 'academicsController',
				css: '/vit/css/academics.css'
			})

			//ROUTE FOR ADMISSIONS SECTION AND SUBSECTIONS//

			// route for the admissions page
			.when('/vit/admissions', {
				templateUrl : 'admissions/overview/overviewPage',
				controller  : 'admissionsController',
				css: '/vit/css/admissions.css'
			})

			// route for the admissions/UGAdmissions page
			.when('/vit/admissions/ug', {
				templateUrl : 'ugadmission/ugAdmissionPage',
				controller  : 'ugAdmissionController',
				css: '/vit/css/ugAdmission.css'
			})

			//ROUTE FOR PLACEMENT SECTION AND SUBSECTIONS//

			// route for the placement page
			.when('/vit/placement', {
				templateUrl : 'placement/overview/overviewPage',
				controller  : 'placementController',
				css: '/vit/css/placement.css'
			})

			//ROUTE FOR CAMPUS LIFE SECTION AND SUBSECTIONS//

			// route for the campus page
			.when('/vit/campus', {
				templateUrl : 'campus/overview/overviewPage',
				controller  : 'campusController',
				css: '/vit/css/campus.css'
			})

			// route for the motor sport teams page
			.when('/vit/campus/motorsportteams', {
				templateUrl : 'motorsportteams/motorSportTeamsPage',
				controller  : 'motorSportTeamsController',
				css: '/vit/css/motorSportTeams.css'
			})

			// route for the creation labs page
			.when('/vit/campus/creationlabs', {
				templateUrl : 'creationlabs/creationLabsPage',
				controller  : 'creationLabsController',
				css: '/vit/css/creationLabs.css'
			})

			//ROUTE FOR CMS//


	});


	/*CONFIG*/
vitApp.run(function ($rootScope, $location,$route) {

    $rootScope.config = {};
    $rootScope.config.app_url = $location.url();
    $rootScope.config.app_path = $location.path();
    $rootScope.layout = {};
    $rootScope.layout.loading = false;

    $rootScope.$on('$routeChangeStart', function () {

        //show loading gif
        $rootScope.layout.loading = true;


    });
    $rootScope.$on('$routeChangeSuccess', function () {

        //hide loading gif
        $rootScope.layout.loading = false;


    });
    $rootScope.$on('$routeChangeError', function () {

        //hide loading gif
        alert('wtff');
        $rootScope.layout.loading = false;

    });
});

	//CONTROLLERS FOR HOME SECTION AND SUBSECTIONS//

	// create the controller and inject Angular's $scope
	vitApp.controller('mainController', function($scope) {

		//loader script
		
	//]]>
		$scope.init = function()
	    {	    
	     	//To call and execute the slider everytime the view is injected
	    	$('.slider').slider({full_width: true});
	    	

	    	//take the below code to footer
	    	// Initialize collapse button
			$('.button-events').sideNav({
			  menuWidth: 300, // Default is 240
			  edge: 'right', // Choose the horizontal origin
			  closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
			}
			);
	    }
	});

	//CONTROLLERS FOR ABOUT SECTION AND SUBSECTIONS//

	vitApp.controller('aboutController', function($scope) {
 $scope.$on('$viewContentLoaded', function() { // makes sure the whole site is loaded
			$('#status').fadeOut(); // will first fade out the loading animation
			$('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
			$('body').delay(350).css({'overflow':'visible'});
		});
		 
		$scope.init = function()
		{
	     	//To call and execute the parallax everytime the view is injected
			$('.parallax').parallax();

			//take the below code to footer
	    	// Initialize collapse button
			$('.button-events').sideNav({
			  menuWidth: 300, // Default is 240
			  edge: 'right', // Choose the horizontal origin
			  closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
			}
			);
		}
	});

	vitApp.controller('leadershipController', function($scope) {
		$scope.init = function()
		{
	     	//To call and execute the parallax everytime the view is injected
			$('.parallax').parallax();

			//take the below code to footer
	    	// Initialize collapse button
			$('.button-events').sideNav({
			  menuWidth: 300, // Default is 240
			  edge: 'right', // Choose the horizontal origin
			  closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
			}
			);
		}
	});

	vitApp.controller('communityController', function($scope) {
		$scope.init = function()
		{
	     	//To call and execute the parallax everytime the view is injected
			$('.parallax').parallax();
			

			//take the below code to footer
	    	// Initialize collapse button
			$('.button-events').sideNav({
			  menuWidth: 300, // Default is 240
			  edge: 'right', // Choose the horizontal origin
			  closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
			}
			);
		}
	});

	vitApp.controller('careerController', function($scope) {
		$scope.init = function()
		{
	     	//To call and execute the parallax everytime the view is injected
			$('.parallax').parallax();
			$('.modal-trigger').leanModal();
			 $('.collapsible').collapsible({
     		 accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
    		});

			//take the below code to footer
	    	// Initialize collapse button
			$('.button-events').sideNav({
			  menuWidth: 300, // Default is 240
			  edge: 'right', // Choose the horizontal origin
			  closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
			}
			);
		}
	});

	//CONTROLLERS FOR ACADEMICS SECTION AND SUBSECTIONS//

	vitApp.controller('academicsController', function($scope) {
		$scope.init = function()
		{
	     	//To call and execute the parallax everytime the view is injected
			$('.parallax').parallax();

			//take the below code to footer
	    	// Initialize collapse button
			$('.button-events').sideNav({
			  menuWidth: 300, // Default is 240
			  edge: 'right', // Choose the horizontal origin
			  closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
			}
			);
		}
	});

	//CONTROLLERS FOR ADMISSIONS SECTION AND SUBSECTIONS//

	vitApp.controller('admissionsController', function($scope) {
		$scope.init = function()
		{
	     	//To call and execute the parallax everytime the view is injected
			$('.parallax').parallax();

			//take the below code to footer
	    	// Initialize collapse button
			$('.button-events').sideNav({
			  menuWidth: 300, // Default is 240
			  edge: 'right', // Choose the horizontal origin
			  closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
			}
			);
		}
	});

	vitApp.controller('ugAdmissionController', function($scope) {
		$scope.init = function()
		{
	     	//To call and execute the parallax everytime the view is injected
			$('.parallax').parallax();

			//take the below code to footer
	    	// Initialize collapse button
			$('.button-events').sideNav({
			  menuWidth: 300, // Default is 240
			  edge: 'right', // Choose the horizontal origin
			  closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
			}
			);
		}
	});

	//CONTROLLERS FOR PLACEMENTS SECTION AND SUBSECTIONS//

	vitApp.controller('placementController', function($scope) {
		$scope.init = function()
		{
	     	//To call and execute the parallax everytime the view is injected
			$('.parallax').parallax();

			//take the below code to footer
	    	// Initialize collapse button
			$('.button-events').sideNav({
			  menuWidth: 300, // Default is 240
			  edge: 'right', // Choose the horizontal origin
			  closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
			}
			);
		}
	});

	//CONTROLLERS FOR CAMPUS LIFE SECTION AND SUBSECTIONS//

	vitApp.controller('campusController', function($scope) {
		$scope.init = function()
		{
	     	//To call and execute the parallax everytime the view is injected
			$('.parallax').parallax();

			//take the below code to footer
	    	// Initialize collapse button
			$('.button-events').sideNav({
			  menuWidth: 300, // Default is 240
			  edge: 'right', // Choose the horizontal origin
			  closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
			}
			);
		}
	});

	vitApp.controller('creationLabsController', function($scope) {
		$scope.init = function()
		{
	     	//To call and execute the parallax everytime the view is injected
			$('.parallax').parallax();

			//take the below code to footer
	    	// Initialize collapse button
			$('.button-events').sideNav({
			  menuWidth: 300, // Default is 240
			  edge: 'right', // Choose the horizontal origin
			  closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
			}
			);
		}
	});

	vitApp.controller('motorSportTeamsController', function($scope) {
		$scope.init = function()
		{
	     	//To call and execute the parallax everytime the view is injected
			$('.parallax').parallax();

			//take the below code to footer
	    	// Initialize collapse button
			$('.button-events').sideNav({
			  menuWidth: 300, // Default is 240
			  edge: 'right', // Choose the horizontal origin
			  closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
			}
			);
		}
	});

	//CONTROLLERS FOR CMS//

	vitApp.controller('cmsController', function($scope) {
		$scope.init = function()
		{
	     	
		}
	});