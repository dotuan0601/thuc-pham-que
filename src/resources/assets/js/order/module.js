var app = angular.module('OrderModule', ['ngRoute']);

// configure our routes
app.config(function ($routeProvider) {
    $routeProvider

    // route for the list page
        .when('/list', {
            templateUrl: 'orderList',
            controller: 'ListController'
        })

        .otherwise({
            redirectTo: '/list'
        })
});