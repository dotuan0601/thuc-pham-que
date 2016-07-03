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

app.controller('InfoController', function ($scope, $routeParams, $location, AgencyService) {
});

app.controller('ManageController', function ($scope, $routeParams, $location, AgencyService, fileUpload) {
    // Get agency info
    // AgencyService.getAgencyById($routeParams.id)
    //     .success(function (result) {
    //         $scope.agency = result;
    //     })
    //     .error(function (error) {
    //     });

    $scope.agency = {
        id: 1,
        name: "Đại lý 1",
        address: "Số 1 Phạm Văn Đồng",
        phone: "01234567890",
        email: "daily1@gmail.com",
        avatar: null//"user2.jpg"
    };

    $scope.units = [
        {id: 1, name: "kg"},
        {id: 2, name: "bó"}
    ];

    $scope.categories = [
        {id: 1, name: "Thịt,cá"},
        {id: 2, name: "Rau, củ"},
        {id: 3, name: "Ngũ cốc"},
        {id: 4, name: "Hoa quả"}
    ];

    $scope.agencyProducts = [
        {id: 1, name: "Thịt lợn", categoryId: 1, unitId: 1, price: 180000},
        {id: 1, name: "Thịt bò", categoryId: 1, unitId: 1, price: 250000},
        {id: 1, name: "Thịt gà", categoryId: 1, unitId: 1, price: 200000},
        {id: 1, name: "Rau muống", categoryId: 2, unitId: 2, price: 8000},
        {id: 1, name: "Rau cải", categoryId: 2, unitId: 2, price: 10000}
    ];

    // Change category
    $scope.changeCategory = function (categoryId) {
        $scope.selectedCategoryId = categoryId;
    };

    // Get agency avatar or from selected image
    $scope.getAvatar = function () {
        if ($scope.image_source)
            return $scope.image_source;
        if ($scope.agency && $scope.agency.avatar)
            return 'resources/assets/img/' + $scope.agency.avatar;
        return 'resources/assets/img/user.png';
    };

    // Select avatar
    $scope.setFile = function (element) {
        $scope.currentFile = element.files[0];
        var reader = new FileReader();

        reader.onload = function (event) {
            $scope.image_source = event.target.result;
            $scope.$apply();
        };
        // when the file is read it triggers the onload event above.
        reader.readAsDataURL(element.files[0]);
    };

    // Click button save common info
    $scope.save = function () {
        // Upload avatar
        /*if ($scope.image_source){
            fileUpload.uploadFileToUrl($scope.avatar, 'resources/assets/img/');
        }*/
    };
});