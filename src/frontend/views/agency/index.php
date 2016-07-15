<div ng-app="AgencyModule">
    <div ng-view>
    </div>
</div>

<?php
$this->registerJsFile('@web/js/angular-locale_vi-vn.js', ['depends' => [frontend\assets\AppAsset::className()]]);
$this->registerJsFile('@web/js/ui-bootstrap-tpls-1.3.3.min.js', ['depends' => [frontend\assets\AppAsset::className()]]);
$this->registerJsFile('@web/js/agency/module.js', ['depends' => [frontend\assets\AppAsset::className()]]);
$this->registerJsFile('@web/js/agency/controller.js', ['depends' => [frontend\assets\AppAsset::className()]]);
$this->registerJsFile('@web/js/agency/service.js', ['depends' => [frontend\assets\AppAsset::className()]]);
$this->registerJsFile('@web/js/helpers/upload.js', ['depends' => [frontend\assets\AppAsset::className()]]);
$this->registerJsFile('@web/js/helpers/datetime-picker.min.js', ['depends' => [frontend\assets\AppAsset::className()]]);
?>