var app = angular.module('ProductModule', ['ngRoute']);

// configure our routes
app.config(function ($routeProvider) {
    $routeProvider

    // route for the list page
        .when('/list', {
            templateUrl: 'productList',
            controller: 'ProductController'
        })

        .otherwise({
            redirectTo: '/list'
        })
});