<?php
$assets_url = 'resources/assets/';
?>

@extends('layouts.layout')
@section('content')
    <div ng-app="OrderModule">
        <div ng-view>
        </div>
    </div>
    <script src="<?php echo $assets_url;?>js/order/module.js"></script>
    <script src="<?php echo $assets_url;?>js/order/controller.js"></script>
    <script src="<?php echo $assets_url;?>js/order/service.js"></script>
@stop