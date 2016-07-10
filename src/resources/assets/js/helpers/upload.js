app.directive("myFileSelect", function () {
    return {
        restrict: 'A',
        scope: {
            limitFile: '=?',
            fileList: '=',
            addFileToList: '&'
        },
        link: function (scope, element) {
            element.bind("change", function (e) {

                var files = (e.srcElement || e.target).files;
                if (files && files.length) {
                    var reader;
                    scope.fileList = scope.fileList ? scope.fileList : [];
                    scope.limitFile = scope.limitFile || scope.limitFile == 0 ? scope.limitFile : 1;
                    var count = 0;
                    var limit = Math.min(files.length, scope.limitFile);
                    for (i = 0; i < limit; i++) {
                        reader = new FileReader();
                        reader.file = files[i];
                        reader.onload = (function (event) {
                            scope.fileList.push({
                                id: new Date().getTime(),
                                src: event.target.result,
                                file: event.target.file
                            });
                            scope.$apply();
                        });
                        reader.readAsDataURL(files[i]);
                    }
                }
            });
        }
    }
});