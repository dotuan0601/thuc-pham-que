<?php
$assets_url = 'resources/assets/';
?>

@extends('layouts.layout')
@section('content')
    <div ng-app="ProductModule">
        <div ng-view>
        </div>
    </div>
    <script src="<?php echo $assets_url;?>js/product/module.js"></script>
    <script src="<?php echo $assets_url;?>js/product/controller.js"></script>
    <script src="<?php echo $assets_url;?>js/product/service.js"></script>
@stop