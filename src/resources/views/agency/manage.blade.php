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
                                        <input type="file" style="display: none;" accept="image/*" my-file-select
                                               file-list="agency.avatarList">
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
                                <th style="width: 10%"><?php echo trans('label.unit');?></th>
                                <th style="width: 20%"><?php echo trans('label.price');?></th>
                                <th style="width: 30%"><?php echo trans('label.avatar');?></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr ng-form="namesForm_@{{$index}}"
                                ng-repeat="product in agencyProducts | filter:{categoryId:selectedCategoryId}">
                                <td>
                                    <span ng-if="!product.isEdit" ng-bind="product.name"></span>
                                    <input ng-if="product.isEdit" class="form-control" type="text" placeholder=""
                                           required ng-model="product.editProduct.name"
                                           typeahead-on-select="selectProduct($item, product.editProduct)"
                                           uib-typeahead="p as p.name for p in products | filter:{name:$viewValue} | limitTo:5">
                                </td>
                                <td>
                                    <span ng-if="!product.isEdit"
                                          ng-bind="(units | filter:{id:product.unitId})[0].name"></span>
                                    <select ng-if="product.isEdit" class="form-control"
                                            ng-model="product.editProduct.productUnit" required
                                            ng-init="product.editProduct.productUnit = (units | filter:{id:product.editProduct.unitId})[0]"
                                            ng-options="unit as unit.name for unit in units track by unit.id">
                                    </select>
                                </td>
                                <td>
                                    <div ng-if="!product.isEdit">
                                        <span ng-bind="product.price"></span>
                                        đ/<span ng-bind="(units | filter:{id:product.unitId})[0].name"></span>
                                    </div>
                                    <div ng-if="product.isEdit" class="input-group">
                                        <input class="form-control" type="text" placeholder="" required
                                               ng-model="product.editProduct.price">
                                            <span class="input-group-addon">
                                                đ/<span ng-bind="product.editProduct.productUnit.name"></span>
                                            </span>
                                    </div>
                                </td>
                                <td>
                                    <div class="product-img">
                                        <img alt="img" ng-if="!product.isEdit"
                                             ng-src="@{{getMainImage(product)}}">
                                        <img alt="img" ng-if="product.isEdit"
                                             ng-src="@{{getMainImage(product.editProduct)}}">
                                    </div>
                                    <div ng-if="product.isEdit" class="product-img input-group">
                                        <label class="input-group-btn">
                                                <span class="btn btn-grey btn-sm">
                                                    <?php echo trans('label.add');?>
                                                    <input type="file" style="display: none;" accept="image/*" multiple
                                                           file-list="product.editProduct.imageFiles" my-file-select
                                                           limit-file="getLimitImage(product.editProduct)">
                                                </span>
                                        </label>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div ng-if="!product.isEdit" class="product-img-list"
                                         ng-repeat="img in product.imageList.split(';') track by $index">
                                        <img ng-src="@{{getImage(img)}}" alt="img">
                                    </div>
                                    <div ng-if="!product.isEdit" class="product-img-list"
                                         ng-repeat="img in product.imageFiles track by $index">
                                        <img ng-src="@{{getImage(img)}}" alt="img">
                                    </div>
                                    <div ng-if="product.isEdit"
                                         ng-repeat="img in product.editProduct.imageList.split(';') track by $index"
                                         class="product-img-list editable @{{img==product.editProduct.image?'selected':''}}">
                                        <img ng-src="@{{getImage(img)}}" alt="img"
                                             ng-click="product.editProduct.image=img">
                                        <div ng-if="product.isEdit" class="glyphicon glyphicon-remove-circle"
                                             ng-click="deleteImage(img, product.editProduct)"></div>
                                    </div>
                                    <div ng-if="product.isEdit"
                                         ng-repeat="img in product.editProduct.imageFiles track by $index"
                                         class="product-img-list editable @{{img.id==product.editProduct.image.id?'selected':''}}">
                                        <img ng-src="@{{getImage(img)}}" alt="img"
                                             ng-click="product.editProduct.image=img">
                                        <div ng-if="product.isEdit" class="glyphicon glyphicon-remove-circle"
                                             ng-click="deleteImage(img, product.editProduct)"></div>
                                    </div>
                                </td>
                                <td>
                                    <button ng-if="!product.isEdit" class="btn btn-sm btn-primary"
                                            ng-click="editProduct(product)"><?php echo trans('label.edit');?></button>
                                    <button ng-if="!product.isEdit" class="btn btn-sm btn-danger"
                                            ng-click="deleteProduct(product)"><?php echo trans('label.delete');?></button>
                                    <button ng-if="product.isEdit" class="btn btn-sm"
                                            ng-disabled="namesForm_@{{$index}}.$invalid"
                                            ng-click="saveProduct(product)"><?php echo trans('label.save');?></button>
                                    <button ng-if="product.isEdit" class="btn btn-sm btn-grey"
                                            ng-click="product.isEdit=false"><?php echo trans('label.cancel');?></button>
                                </td>
                            </tr>
                            </tbody>
                            <tfoot ng-form="foodForm">
                            <tr>
                                <td><input class="form-control" type="text" placeholder="" required
                                           ng-model="addProduct.product"
                                           typeahead-on-select="selectProduct($item, addProduct)"
                                           uib-typeahead="product as product.name for product in products | filter:{name:$viewValue} | limitTo:5">
                                </td>
                                <td>
                                    <select class="form-control" ng-model="addProduct.productUnit" required
                                            ng-init="addProduct.productUnit=units[0]"
                                            ng-options="unit as unit.name for unit in units track by unit.id">
                                    </select>
                                </td>
                                <td>
                                    <div class="input-group">
                                        <input class="form-control" type="text" placeholder="" required
                                               ng-model="addProduct.price" aria-describedby="basic-addon1">
                                            <span class="input-group-addon" id="basic-addon1">
                                                đ/<span ng-bind="addProduct.productUnit.name"></span>
                                            </span>
                                    </div>
                                </td>
                                <td>
                                    <div class="product-img">
                                        <img alt="img" ng-src="@{{getMainImage(addProduct)}}">
                                    </div>
                                    <div class="product-img input-group">
                                        <label class="input-group-btn">
                                                <span class="btn btn-grey btn-sm">
                                                    <?php echo trans('label.add');?>
                                                    <input type="file" style="display: none;" accept="image/*" multiple
                                                           file-list="addProduct.imageFiles" my-file-select
                                                           limit-file="getLimitImage(addProduct)">
                                                </span>
                                        </label>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div ng-repeat="img in addProduct.imageFiles track by $index"
                                         class="product-img-list editable @{{img.id==addProduct.image.id?'selected':''}}">
                                        <img ng-src="@{{getImage(img)}}" alt="img"
                                             ng-click="addProduct.image=img">
                                        <div class="glyphicon glyphicon-remove-circle"
                                             ng-click="deleteImage(img, addProduct)"></div>
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