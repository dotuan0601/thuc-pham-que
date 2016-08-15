
app.controller("LoginController", ["$scope", "$location", "$window", "UserService",function ($scope, $location, $window, UserService) {
    $scope.userInfo = null;
    alert('vao day');
    $scope.login = function () {
        UserService.login($scope.userName, $scope.password)
            .then(function (result) {
                $scope.userInfo = result;
                $location.path("/");
            }, function (error) {
                $window.alert("Invalid credentials");
                console.log(error);
            });
    };

    $scope.cancel = function () {
        $scope.userName = "";
        $scope.password = "";
    };
}]);