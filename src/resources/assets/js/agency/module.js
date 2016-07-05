var app = angular.module('AgencyModule', ['ngRoute', 'ui.bootstrap']);

// configure our routes
app.config(function ($routeProvider) {
    $routeProvider

    // route for the list page
        .when('/list', {
            templateUrl: 'agencyList',
            controller: 'ListController'
        })

        // route for the add page
        .when('/detail/:id', {
            templateUrl: 'agencyDetail',
            controller: 'DetailController'
        })

        .when('/info/:id', {
            templateUrl: 'agencyInfo',
            controller: 'InfoController'
        })

        .when('/manage', {
            templateUrl: 'agencyManage',
            controller: 'ManageController'
        })

        .when('/manage/:id', {
            templateUrl: 'agencyManage',
            controller: 'ManageController'
        })

        .otherwise({
            redirectTo: '/list'
        });
});