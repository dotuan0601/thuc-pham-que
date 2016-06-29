app.controller('listController', function ($scope, agenceService) {
    $scope.agences = agenceService.agences;

    $scope.remove = function (agence) {
        $scope.agences.splice($scope.agences.indexOf(agence), 1);
    };
});

app.controller('detailController', function ($scope, $routeParams, $location, agenceService) {
    if ($routeParams.id) {
        $scope.title = "Edit";
        if (agenceService.agences) {
            $scope.agence = agenceService.agences.filter(function (agence) {
                return agence.id == $routeParams.id;
            })[0];
        }
    } else {
        $scope.title = "Add";
    }

    $scope.save = function () {
        if (!$routeParams.id) {
            $scope.agence.id = agenceService.index++;
            agenceService.agences.push($scope.agence);
        }
        $location.path("list");
    };
});