<?php
$assets_url = 'resources/assets/';
?>

@extends('layouts.layout')
@section('content')
    <div ng-app="HomeModule">
        <div ng-view>
        </div>
    </div>
    <script src="<?php echo $assets_url;?>js/home/module.js"></script>
    <script src="<?php echo $assets_url;?>js/home/controller.js"></script>
    <script src="<?php echo $assets_url;?>js/home/service.js"></script>
@stop