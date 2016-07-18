<div ng-app="UserModule">
    <div ng-view>
    </div>
</div>

<?php
$this->registerJsFile('@web/js/angular-locale_vi-vn.js', ['depends' => [frontend\assets\AppAsset::className()]]);
$this->registerJsFile('@web/js/ui-bootstrap-tpls-1.3.3.min.js', ['depends' => [frontend\assets\AppAsset::className()]]);
$this->registerJsFile('@web/js/user/module.js', ['depends' => [frontend\assets\AppAsset::className()]]);
$this->registerJsFile('@web/js/user/controller.js', ['depends' => [frontend\assets\AppAsset::className()]]);
$this->registerJsFile('@web/js/user/service.js', ['depends' => [frontend\assets\AppAsset::className()]]);
$this->registerJsFile('@web/js/helpers/upload.js', ['depends' => [frontend\assets\AppAsset::className()]]);
$this->registerJsFile('@web/js/helpers/datetime-picker.min.js', ['depends' => [frontend\assets\AppAsset::className()]]);
?>