var app = angular.module('UserModule', ['ngRoute', 'ui.bootstrap', 'ui.bootstrap.datetimepicker']);

// configure our routes
app.config(function ($routeProvider) {
    $routeProvider

    // route for the list page
        .when('/login', {
            templateUrl: 'user/login',
            controller: 'LoginController'
        })
});