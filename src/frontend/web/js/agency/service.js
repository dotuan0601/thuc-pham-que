app.service('AgencyService', ['$http', function ($http) {
    this.getAgencies = function () {
        return $http.get('/thuc-pham-que/src/api/web/agency/list');
    };

    this.getAgency = function (id) {
        return $http.get('/thuc-pham-que/src/api/web/agency/get/' + id);
    };
}]);