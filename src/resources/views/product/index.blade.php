<?php
$assets_url = 'resources/assets/';
?>

        <!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div ng-app="ProductModule">

    @include('includes.menu')

    <div ng-view>
    </div>

    @include('includes.footer')

</div>
<script src="<?php echo $assets_url;?>js/product/module.js"></script>
<script src="<?php echo $assets_url;?>js/product/controller.js"></script>
<script src="<?php echo $assets_url;?>js/product/service.js"></script>
</body>
</html>