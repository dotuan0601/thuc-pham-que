var app = angular.module('HomeModule', ['ngRoute']);

// configure our routes
app.config(function ($routeProvider) {
    $routeProvider

    // route for the list page
        .when('/search', {
            templateUrl: 'search',
            controller: 'SearchController'
        })

        .otherwise({
            redirectTo: '/search'
        })
});