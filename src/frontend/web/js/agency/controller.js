app.controller('ListController', function ($scope, AgencyService) {
    AgencyService.getAgencies()
        .then(function (result) {
            $scope.agencies = result.data;
        }, function (error) {

        });

    $scope.remove = function (agency) {
        $scope.agencies.splice($scope.agencies.indexOf(agency), 1);
    };
});

app.controller('DetailController', function ($scope, $routeParams, $location, AgencyService) {
    if ($routeParams.id) {
        $scope.title = "Edit";
        AgencyService.getAgency($routeParams.id)
            .then(function (result) {
                $scope.agency = result.data;
            }, function (error) {

            });
    } else {
        $scope.title = "Add";
    }

    $scope.save = function () {
        if (!$routeParams.id) {
            // $scope.agency.id = AgencyService.index++;
            // AgencyService.agencies.push($scope.agency);
        }
        $location.path("list");
    };
});

app.controller('InfoController', function ($scope, $routeParams, $location, AgencyService) {
});

app.controller('ManageController', function ($scope, $routeParams, $location, $uibModal, AgencyService) {
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
        {
            id: 1, name: "Thịt lợn", categoryId: 1, unitId: 1, price: 180000, image: "product1.jpg",
            imageList: "product1.jpg;product2.jpg;product3.jpg"
        },
        {
            id: 2, name: "Thịt bò", categoryId: 1, unitId: 1, price: 250000, image: "product1.jpg",
            imageList: "product1.jpg;product2.jpg;product3.jpg"
        },
        {id: 3, name: "Thịt gà", categoryId: 1, unitId: 1, price: 200000},
        {id: 4, name: "Rau muống", categoryId: 2, unitId: 2, price: 8000},
        {id: 5, name: "Rau cải", categoryId: 2, unitId: 2, price: 10000}
    ];


    // Change category
    $scope.changeCategory = function (categoryId) {
        $scope.selectedCategoryId = categoryId;
    };

    // Get agency avatar or from selected image
    $scope.getAvatar = function () {
        if ($scope.agency.avatarList && $scope.agency.avatarList.length)
            return $scope.agency.avatarList[$scope.agency.avatarList.length - 1].src;
        if ($scope.agency && $scope.agency.avatar)
            return '../images/' + $scope.agency.avatar;
        return '../images/user.png';
    };

    // Click button save common info
    $scope.save = function () {
        // Upload avatar
        if ($scope.avatarUpload) {
            fileUpload.uploadFileToUrl($scope.avatar, 'public')
                .success(function (result) {
                })

                .error(function (error) {
                });
        }
    };

    // Add product
    $scope.addProduct = function () {
        var modalInstance = $uibModal.open({
            animation: true,
            templateUrl: 'productModal.html',
            controller: 'ProductModalController',
            resolve: {
                product: function () {
                    return null;
                },
                units: function () {
                    return $scope.units;
                },
                categories: function () {
                    return $scope.categories;
                },
                selectedCategoryId: function () {
                    return $scope.selectedCategoryId;
                }
            }
        });

        modalInstance.result.then(function (product) {
            $scope.agencyProducts.push(product);
            $scope.selectedCategoryId = product.categoryId;
        });
    };

    // Edit product
    $scope.editProduct = function (product) {
        var modalInstance = $uibModal.open({
            animation: true,
            templateUrl: 'productModal.html',
            controller: 'ProductModalController',
            resolve: {
                product: function () {
                    return $.extend(true, {}, product);
                },
                units: function () {
                    return $scope.units;
                },
                categories: function () {
                    return $scope.categories;
                },
                selectedCategoryId: function () {
                    return $scope.selectedCategoryId;
                }
            }
        });

        modalInstance.result.then(function (editedProduct) {
            $scope.agencyProducts.splice($scope.agencyProducts.indexOf(product), 1, editedProduct);
            $scope.selectedCategoryId = editedProduct.categoryId;
        });
    };

    // Edit product
    $scope.deleteProduct = function (product) {
        $scope.agencyProducts.splice($scope.agencyProducts.indexOf(product), 1);
    };

    // Get product image url
    $scope.getImage = function (img) {
        return getImage(img);
    };

    var fromDate = new Date();
    var toDate = new Date();
    toDate.setMonth(toDate.getMonth() + 1);
    $scope.fromDate = {
        date: fromDate,
        dateOptions: {
            showWeeks: false,
            maxDate: toDate
        },
        timeOptions: {
            showMeridian: false,
            minuteStep: 5
        }
    };
    $scope.toDate = {
        date: toDate,
        dateOptions: {
            showWeeks: false,
            minDate: fromDate
        },
        timeOptions: {
            showMeridian: false,
            minuteStep: 5
        }
    };

    $scope.changeDate = function () {
        $scope.fromDate.dateOptions.maxDate = $scope.toDate.date;
        $scope.toDate.dateOptions.minDate = $scope.fromDate.date;
    };

    $scope.checkStatus = function () {
        var hasUncheck = false;
        var products = $scope.agencyProducts.filter(function (product) {
            return product.categoryId == $scope.selectedCategoryId;
        });
        products.forEach(function (product) {
            if (!product.selected) {
                hasUncheck = true;
                return false;
            }
        });
        $scope.isCheckAll = !hasUncheck && products.length;
        return $scope.isCheckAll;
    };

    $scope.checkAll = function () {
        $scope.isCheckAll = !$scope.isCheckAll;
        $scope.agencyProducts.filter(function (product) {
            return product.categoryId == $scope.selectedCategoryId;
        }).forEach(function (product) {
            product.selected = $scope.isCheckAll;
        });
    };
});

app.controller('ProductModalController', function ($scope, $uibModalInstance, product, units, categories, selectedCategoryId) {
    $scope.categories = categories;
    $scope.selectedCategoryId = selectedCategoryId;
    $scope.units = units;
    $scope.product = product;
    $scope.isEdit = product ? true : false;

    // Select product from typeahead
    $scope.selectProduct = function ($item, product) {
        product.name = $item.name;
        product.unitId = $item.unitId;
        product.price = $item.price;
        product.description = $item.description;
        product.image = $item.image;
        product.imageList = $item.imageList;
    };

    $scope.save = function () {
        //$scope.product.name = $scope.product.product ? $scope.product.product.name : $scope.product.name;
        $uibModalInstance.close($scope.product);
    };

    $scope.cancel = function () {
        $uibModalInstance.dismiss('cancel');
    };

    // Get product image url
    $scope.getImage = function (img) {
        return getImage(img);
    };

    $scope.getMainImage = function (product) {
        // If no image and has image files
        if (!product.image && product.imageFiles && product.imageFiles.length)
            product.image = product.imageFiles[0];

        return $scope.getImage(product.image);
    };

    // Get limit number of upload image
    $scope.getLimitImage = function (product) {
        var limit = 0;

        if (product.imageList)
            limit += product.imageList.split(';').length;

        if (product.imageFiles)
            limit += product.imageFiles.length;

        return 6 - limit; // Limit 6 img per product
    };

    // Delete image
    $scope.deleteImage = function (img, product) {
        var list = [];
        if (product.imageList) list = product.imageList.split(';');

        // If image in imageFiles
        if (img.src && product.imageFiles) {
            // Delete from imageFiles
            product.imageFiles.splice(product.imageFiles.indexOf(img), 1);
        }

        // Else
        else {
            // Delete from imageList
            list.splice(list.indexOf(img), 1);
            product.imageList = list.length ? list.join(';') : null;
        }

        // Reselect main image
        if ($.inArray(product.image, list) == -1 && $.inArray(product.image, product.imageFiles) == -1)
            product.image = list.length ? list[0] : null;
        if (!product.image)
            product.image = product.imageFiles.length ? product.imageFiles[0] : null;
    };

    $scope.products = [
        {
            id: 1,
            name: "Thịt lợn",
            categoryId: 1,
            unitId: 1,
            price: 180000,
            image: "product1.jpg",
            imageList: "product1.jpg;product2.jpg;product3.jpg"
        },
        {
            id: 2,
            name: "Thịt bò",
            categoryId: 1,
            unitId: 1,
            price: 250000,
            image: "product1.jpg",
            imageList: "product1.jpg;product2.jpg;product3.jpg"
        },
        {id: 3, name: "Thịt gà", categoryId: 1, unitId: 1, price: 200000},
        {id: 4, name: "Rau muống", categoryId: 2, unitId: 2, price: 8000},
        {id: 5, name: "Rau cải", categoryId: 2, unitId: 2, price: 10000},
        {id: 6, name: "Rau bí", categoryId: 2, unitId: 2, price: 8000},
        {id: 7, name: "Rau ngót", categoryId: 2, unitId: 2, price: 10000},
        {id: 8, name: "Rau mùng tơi", categoryId: 2, unitId: 2, price: 10000},
        {id: 9, name: "Rau bắp cải", categoryId: 2, unitId: 2, price: 10000}
    ];
});

function getImage(img) {
    // If no image
    if (!img) return '../images/no-img.jpg';

    // If image is file
    if (img.src) return img.src;

    // If not base64 image
    if (img.indexOf('data:image') == -1) return '../images/' + img;

    return img;
}