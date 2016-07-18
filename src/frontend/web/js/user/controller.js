app.controller('LoginController', function ($scope, UserService) {
    AgencyService.getAgencies()
        .then(function (result) {
            $scope.agencies = result.data;
        }, function (error) {

        });
});
