
app.controller("LoginController", ["$scope", "$location", "$window", "UserService",function ($scope, $location, $window, UserService) {
    $scope.userInfo = null;
    $scope.login = function () {
        UserService.login($scope.userName, $scope.password)
            .then(function (result) {
                $scope.userInfo = result;
                $location.path("/");
            }, function (error) {
                $window.alert("Invalid scredentials");
                console.log(error);
            });
    };

    $scope.cancel = function () {
        $scope.userName = "";
        $scope.password = "";
    };
}]);