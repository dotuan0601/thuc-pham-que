<?php
$assets_url = 'resources/assets/';
?>


<?php $__env->startSection('content'); ?>
    <div ng-app="AgencyModule">
        <div ng-view>
        </div>
    </div>
    <script src="<?php echo $assets_url;?>js/agency/module.js"></script>
    <script src="<?php echo $assets_url;?>js/agency/controller.js"></script>
    <script src="<?php echo $assets_url;?>js/agency/service.js"></script>
    <script src="<?php echo $assets_url;?>js/helpers/upload.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>