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

app.controller('ManageController', function ($scope, $routeParams, $location, AgencyService) {
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
            imageList: "product1.jpg;product2.jpg;product2.jpg"
        },
        {
            id: 2, name: "Thịt bò", categoryId: 1, unitId: 1, price: 250000, image: "product1.jpg",
            imageList: "product1.jpg;product2.jpg;product3.jpg"
        },
        {id: 3, name: "Thịt gà", categoryId: 1, unitId: 1, price: 200000},
        {id: 4, name: "Rau muống", categoryId: 2, unitId: 2, price: 8000},
        {id: 5, name: "Rau cải", categoryId: 2, unitId: 2, price: 10000}
    ];

    $scope.products = [
        {
            id: 1,
            name: "Thịt lợn",
            categoryId: 1,
            unitId: 1,
            price: 180000,
            image: "product1.jpg",
            imageList: "product1.jpg;product1.jpg;product1.jpg"
        },
        {
            id: 2,
            name: "Thịt bò",
            categoryId: 1,
            unitId: 1,
            price: 250000,
            image: "product1.jpg",
            imageList: "product1.jpg;product1.jpg;product1.jpg"
        },
        {id: 3, name: "Thịt gà", categoryId: 1, unitId: 1, price: 200000},
        {id: 4, name: "Rau muống", categoryId: 2, unitId: 2, price: 8000},
        {id: 5, name: "Rau cải", categoryId: 2, unitId: 2, price: 10000},
        {id: 6, name: "Rau bí", categoryId: 2, unitId: 2, price: 8000},
        {id: 7, name: "Rau ngót", categoryId: 2, unitId: 2, price: 10000},
        {id: 8, name: "Rau mùng tơi", categoryId: 2, unitId: 2, price: 10000},
        {id: 9, name: "Rau bắp cải", categoryId: 2, unitId: 2, price: 10000}
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
            return 'resources/assets/img/' + $scope.agency.avatar;
        return 'resources/assets/img/user.png';
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

    // Select product from typeahead
    $scope.selectProduct = function ($item, product) {
        product.name = $item.name;
        product.productUnit = $scope.units.filter(function (unit) {
            return unit.id == $item.unitId;
        })[0];
        product.price = $item.price;
    };

    // Add product
    $scope.addProduct = function () {
        $scope.agencyProducts.push({
            name: $scope.addProduct.product.name ? $scope.addProduct.product.name : $scope.addProduct.product,
            categoryId: $scope.selectedCategoryId,
            unitId: $scope.addProduct.productUnit.id,
            price: $scope.addProduct.price,
            image: $scope.addProduct.image,
            imageList: $scope.addProduct.imageList,
            imageFiles: $scope.addProduct.imageFiles
        });

        $scope.addProduct = {};
    };

    // Edit product
    $scope.editProduct = function (product) {
        // Bind product info to input
        product.editProduct = $.extend(true, {}, product);

        // Change to edit mode
        product.isEdit = true;
    };

    // Save product
    $scope.saveProduct = function (product) {
        product.name = product.editProduct.name;
        product.unitId = product.editProduct.productUnit.id;
        product.price = product.editProduct.price;
        product.image = product.editProduct.image;
        product.imageList = product.editProduct.imageList;
        product.imageFiles = product.editProduct.imageFiles;

        // Remove to edit mode
        product.isEdit = false;
    };

    // Edit product
    $scope.deleteProduct = function (product) {
        $scope.agencyProducts.splice($scope.agencyProducts.indexOf(product), 1);
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

    // Get product image url
    $scope.getImage = function (img) {
        // If no image
        if (!img) return 'resources/assets/img/no-img.jpg';

        // If image is file
        if (img.src) return img.src;

        // If not base64 image
        if (img.indexOf('data:image') == -1) return 'resources/assets/img/' + img;

        return img;
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

        return 6 - limit; // Limit 6 images per product
    };
});