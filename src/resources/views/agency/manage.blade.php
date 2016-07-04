<?php
$assets_url = 'resources/assets/';
?>

<!-- Page Title -->
<div class="section section-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?php echo trans('label.agency_info');?></h1>
            </div>
        </div>
    </div>
</div>

<!-- Product -->
<div class="section">
    <div class="container">
        <div class="row tabbable">

            <!-- Sidebar -->
            <div class="col-sm-3 blog-sidebar">
                <ul class="custom-menu nav nav-pills nav-stacked blog-categories">
                    <li class="active"><a href="javascript:;" data-target="#tab1"
                                          data-toggle="tab"><?php echo trans('label.common_info');?></a></li>
                    <li><a href="javascript:;" data-target="#tab2"
                           data-toggle="tab"><?php echo trans('label.food');?></a></li>
                    <li><a href="javascript:;" data-target="tab" data-toggle="tab"><?php echo trans('label.food');?></a>
                    </li>
                    <li><a href="javascript:;" data-target="tab" data-toggle="tab"><?php echo trans('label.food');?></a>
                    </li>
                </ul>
            </div>


            <div class="col-sm-9 tab-content">
                <!-- Common info -->
                <div class="basic-login tab-pane active" id="tab1">
                    <form role="form" name="infoForm" ng-submit="save()">
                        <div class="form-group">
                            <label for="agency_name"><i class="glyphicon glyphicon-user"></i>&nbsp;
                                <b><?php echo trans('label.agency_name');?> <span class="text-danger">*</span></b>
                            </label>
                            <input class="form-control" id="agency_name" name="agency_name" type="text" placeholder=""
                                   ng-model="agency.name" autofocus required>
                            <div class="has-error" ng-show="infoForm.agency_name.$dirty">
                                <span class="text-danger" ng-show="infoForm.agency_name.$error.required">
                                    <?php echo Lang::get('message.required_field', ['field' => trans('label.agency_name')]);?>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="agency_phone"><i class="glyphicon glyphicon-earphone"></i>&nbsp;
                                <b><?php echo trans('label.phone');?> <span class="text-danger">*</span></b>
                            </label>
                            <input class="form-control" id="agency_phone" name="agency_phone" type="text" placeholder=""
                                   ng-model="agency.phone" required
                                   ng-pattern="/^(\+84)?[(]{0,1}[0-9]{2,4}[)\.\- ]{0,1}[0-9]{3}[\.\- ]{0,1}[0-9]{4}$/">
                            <div ng-show="infoForm.agency_phone.$dirty">
                                <div class="text-danger" ng-show="infoForm.agency_phone.$error.required">
                                    <?php echo Lang::get('message.required_field', ['field' => trans('label.phone')]);?>
                                </div>
                                <div class="text-danger" ng-show="infoForm.agency_phone.$error.pattern">
                                    <?php echo Lang::get('message.invalid_field', ['field' => trans('label.phone')]);?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="agency_email"><i class="glyphicon glyphicon-envelope"></i>&nbsp;
                                <b><?php echo trans('label.email');?></b></label>
                            <input class="form-control" id="agency_email" name="agency_email" type="email"
                                   placeholder="" ng-model="agency.email">
                            <div class="has-error" ng-show="infoForm.agency_email.$dirty">
                                <span class="text-danger" ng-show="infoForm.agency_email.$error.email">
                                    <?php echo Lang::get('message.invalid_field', ['field' => trans('label.email')]);?>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="agency_address"><i class="glyphicon glyphicon-home"></i>&nbsp;
                                <b><?php echo trans('label.address');?></b></label>
                            <input class="form-control" id="agency_address" name="agency_address" type="text"
                                   placeholder="" ng-model="agency.address">
                        </div>
                        <div class="form-group">
                            <label for="agency_avatar"><i class="glyphicon glyphicon-picture"></i>&nbsp;
                                <b><?php echo trans('label.avatar');?></b></label>
                            <div class="input-group">
                                <img ng-src="@{{getAvatar()}}" alt="avatar">
                                <label class="img-select">
                                    <span class="btn btn-primary">
                                        <?php echo trans('label.replace');?>
                                        <input type="file" style="display: none;" file-model="avatar" accept="image/*"
                                               onchange="angular.element(this).scope().setFile(this)">
                                    </span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn pull-right" ng-disabled="infoForm.$invalid">
                                <?php echo trans('label.save');?>
                            </button>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>

                <!-- Food list -->
                <div class="tab-pane" id="tab2">
                    <ul class="custom-menu nav nav-pills" ng-init="selectedCategoryId=categories[0].id">
                        <li ng-class="selectedCategoryId==category.id?'active':''" ng-repeat="category in categories"
                            ng-click="changeCategory(category.id)">
                            <a href="javascript:;" data-target="tab" data-toggle="tab">
                                <span ng-bind="category.name"></span>
                                <span class="badge"
                                      ng-bind="(agencyProducts | filter:{categoryId:category.id}).length"></span>
                            </a>
                        </li>
                    </ul>
                    <div class="basic-login">
                        <table class="table custom-table">
                            <thead>
                            <tr>
                                <th style="width: 20%"><?php echo trans('label.first_name');?></th>
                                <th style="width: 20%"><?php echo trans('label.avatar');?></th>
                                <th style="width: 20%"><?php echo trans('label.unit');?></th>
                                <th style="width: 20%"><?php echo trans('label.price');?></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr ng-repeat="product in agencyProducts | filter:{categoryId:selectedCategoryId}">
                                <td><span ng-bind="product.name"></span></td>
                                <td>image</td>
                                <td><span ng-bind="(units | filter:{id:product.unitId})[0].name"></span></td>
                                <td><span ng-bind="product.price"></span> đ/<span
                                            ng-bind="(units | filter:{id:product.unitId})[0].name"></span>
                                </td>
                                <td>
                                    <button class="btn btn-sm btn-primary"><?php echo trans('label.edit');?></button>
                                    <button class="btn btn-sm btn-danger"><?php echo trans('label.delete');?></button>
                                </td>
                            </tr>
                            </tbody>
                            <tfoot ng-form="foodForm">
                            <tr>
                                <td><input class="form-control" type="text" placeholder="" required
                                           ng-model="selectedProduct"
                                           typeahead-on-select="selectProduct($item, $model, $label)"
                                           uib-typeahead="product as product.name for product in products | filter:{name:$viewValue} | limitTo:5">
                                </td>
                                <td>
                                    <div class="input-group">
                                        <label class="input-group-btn">
                                                <span class="btn btn-primary">
                                                    <?php echo trans('label.browse');?><input type="file"
                                                                                              style="display: none;">
                                                </span>
                                        </label>
                                        <input type="text" class="form-control" readonly>
                                    </div>
                                </td>
                                <td>
                                    <select class="form-control" ng-model="addProductUnit" required
                                            ng-init="addProductUnit=units[0]"
                                            ng-options="unit as unit.name for unit in units track by unit.id">
                                    </select>
                                </td>
                                <td>
                                    <div class="input-group">
                                        <input class="form-control" type="text" placeholder="" required
                                               ng-model="addProductPrice" aria-describedby="basic-addon1">
                                            <span class="input-group-addon" id="basic-addon1">
                                                đ/<span ng-bind="addProductUnit.name"></span>
                                            </span>
                                    </div>
                                </td>
                                <td>
                                    <button class="btn" ng-disabled="foodForm.$invalid" ng-click="addProduct()">
                                        <?php echo trans('label.add');?>
                                    </button>
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>