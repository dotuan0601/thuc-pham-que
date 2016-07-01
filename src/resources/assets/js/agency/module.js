var app = angular.module('AgencyModule', ['ngRoute']);

// configure our routes
app.config(function ($routeProvider) {
    $routeProvider

    // route for the list page
        .when('/list', {
            templateUrl: 'agencyList',
            controller: 'ListController'
        })

        // route for the add page
        .when('/detail', {
            templateUrl: 'agencyDetail',
            controller: 'DetailController'
        })

        // route for the add page
        .when('/detail/:id', {
            templateUrl: 'agencyDetail',
            controller: 'DetailController'
        })

        .otherwise({
            redirectTo: '/list'
        })
});