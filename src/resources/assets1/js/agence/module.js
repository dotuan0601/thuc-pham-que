var app = angular.module('agenceModule', ['ngRoute']);

// configure our routes
app.config(function ($routeProvider) {
    $routeProvider

    // route for the list page
        .when('/list', {
            templateUrl: 'agenceList',
            controller: 'listController'
        })

        // route for the add page
        .when('/detail', {
            templateUrl: 'agenceDetail',
            controller: 'detailController'
        })

        // route for the add page
        .when('/detail/:id', {
            templateUrl: 'agenceDetail',
            controller: 'detailController'
        })

        .otherwise({
            redirectTo: '/list'
        })
});