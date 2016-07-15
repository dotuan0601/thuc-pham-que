var app = angular.module('AgencyModule', ['ngRoute', 'ui.bootstrap', 'ui.bootstrap.datetimepicker']);

// configure our routes
app.config(function ($routeProvider) {
    $routeProvider

    // route for the list page
        .when('/list', {
            templateUrl: 'agency/list',
            controller: 'ListController'
        })

        // route for the add page
        .when('/detail', {
            templateUrl: 'agency/detail',
            controller: 'DetailController'
        })

        // route for the add page
        .when('/detail/:id', {
            templateUrl: 'agency/detail',
            controller: 'DetailController'
        })

        .when('/info/:id', {
            templateUrl: 'agency/info',
            controller: 'InfoController'
        })

        .when('/manage', {
            templateUrl: 'agency/manage',
            controller: 'ManageController'
        })

        .when('/manage/:id', {
            templateUrl: 'agency/manage',
            controller: 'ManageController'
        })

        .otherwise({
            redirectTo: '/manage'
        });
});