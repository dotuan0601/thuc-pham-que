<!-- Page Title -->

<div class="section">
    <div class="container" ng-app="UserModule">
        <div ng-view>
            <div class="row page-content">
                <div class="row control-group">
                    <div class="col-md-3">
                        <label for="userName">User Name </label>
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="userName" ng-model="userName" />
                    </div>
                </div>
                <div class="row control-group">
                    <div class="col-md-3">
                        <label for="password">Password</label>
                    </div>
                    <div class="col-md-3">
                        <input type="password" name="password" ng-model="password" />
                    </div>
                </div>
                <div class="row control-group">
                    <div class="col-md-3">
                        <button class="btn btn-default" ng-click="login()">Login</button>
                    </div>
                    <div class="col-md-3">
                        <button ng-click="cancel()" class="btn btn-link">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    $this->registerJsFile('@web/js/user/module.js', ['depends' => [frontend\assets\AppAsset::className()]]);
    $this->registerJsFile('@web/js/user/controller.js', ['depends' => [frontend\assets\AppAsset::className()]]);
    $this->registerJsFile('@web/js/user/service.js', ['depends' => [frontend\assets\AppAsset::className()]]);
?>