<?php
$assets_url = 'resources/assets/';
?>

@extends('layouts.layout')
@section('content')
    <div ng-app="AgencyModule">
        <div ng-view>
        </div>
    </div>
    <script src="<?php echo $assets_url;?>js/agency/module.js"></script>
    <script src="<?php echo $assets_url;?>js/agency/controller.js"></script>
    <script src="<?php echo $assets_url;?>js/agency/service.js"></script>
    <script src="<?php echo $assets_url;?>js/helpers/upload.js"></script>
@stop