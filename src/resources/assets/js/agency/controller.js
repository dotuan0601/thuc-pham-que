app.controller('ListController', function ($scope, AgencyService) {
    $scope.agencies = AgencyService.agencies;

    $scope.remove = function (agency) {
        $scope.agencies.splice($scope.agencies.indexOf(agency), 1);
    };
});

app.controller('DetailController', function ($scope, $routeParams, $location, AgencyService) {
    if ($routeParams.id) {
        $scope.title = "Edit";
        if (AgencyService.agencies) {
            $scope.agency = AgencyService.agencies.filter(function (agency) {
                return agency.id == $routeParams.id;
            })[0];
        }
    } else {
        $scope.title = "Add";
    }

    $scope.save = function () {
        if (!$routeParams.id) {
            $scope.agency.id = AgencyService.index++;
            AgencyService.agencies.push($scope.agency);
        }
        $location.path("list");
    };
});