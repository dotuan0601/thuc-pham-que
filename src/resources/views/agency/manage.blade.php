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
            <div class="col-sm-2 blog-sidebar">
                <ul class="custom-menu nav nav-pills nav-stacked blog-categories">
                    <li class="active"><a href="javascript:;" data-target="#tab1"
                                          data-toggle="tab"><?php echo trans('label.common_info');?></a></li>
                    <li><a href="javascript:;" data-target="#tab2"
                           data-toggle="tab"><?php echo trans('label.product');?></a></li>
                    <li><a href="javascript:;" data-target="tab"
                           data-toggle="tab"><?php echo trans('label.product');?></a>
                    </li>
                    <li><a href="javascript:;" data-target="tab"
                           data-toggle="tab"><?php echo trans('label.product');?></a>
                    </li>
                </ul>
            </div>


            <div class="col-sm-10 tab-content">
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
                                <th><?php echo trans('label.first_name');?></th>
                                <th class="hidden-xs"><?php echo trans('label.description');?></th>
                                <th><?php echo trans('label.price');?></th>
                                <th class="hidden-xs"><?php echo trans('label.avatar');?></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr ng-form="namesForm_@{{$index}}"
                                ng-repeat="product in agencyProducts | filter:{categoryId:selectedCategoryId}">
                                <td>
                                    <span ng-bind="product.name"></span>
                                </td>
                                <td class="hidden-xs" style="max-width: 250px">
                                    <span class="pre" ng-bind="product.description" popover-trigger="mouseenter"
                                          uib-popover="@{{ product.description }}"></span>
                                </td>
                                <td>
                                    <div>
                                        <span ng-bind="product.price"></span>
                                        đ/<span ng-bind="(units | filter:{id:product.unitId})[0].name"></span>
                                    </div>
                                </td>
                                <td class="hidden-xs">
                                    <div class="product-img">
                                        <img alt="img" ng-src="@{{getImage(product.image)}}">
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="product-img-list"
                                         ng-repeat="img in product.imageList.split(';') track by $index">
                                        <img ng-src="@{{getImage(img)}}" alt="img">
                                    </div>
                                </td>
                                <td>
                                    <button class="btn btn-primary glyphicon glyphicon-pencil"
                                            ng-click="editProduct(product)">
                                    </button>
                                    <button class="btn btn-danger glyphicon glyphicon-remove"
                                            uib-popover-template="'deleteProductPopover.html'"
                                            popover-title="<?php echo trans('label.sure_delete');?>"
                                            popover-placement="bottom" popover-is-open="product.popoverOpened">
                                    </button>
                                </td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="6">
                                    <button class="btn" ng-click="addProduct()">
                                        <i class="glyphicon glyphicon-plus"></i>
                                        <?php echo trans('label.add_product');?>
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

<!-- Product modal -->
<script type="text/ng-template" id="productModal.html">
    <form name="productForm" ng-submit="save()">
        <div class="modal-header">
            <h3 class="modal-title">
                <span ng-if="!isEdit"><?php echo trans('label.add_product');?></span>
                <span ng-if="isEdit"><?php echo trans('label.edit_product');?></span>
            </h3>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="form-group col-xs-6">
                    <label for="product_category">
                        <b><?php echo trans('label.category');?> <span class="text-danger">*</span></b>
                    </label>
                    <select class="form-control" id="product_category" name="product_category"
                            ng-model="product.categoryId" ng-init="product.categoryId=selectedCategoryId"
                            ng-options="category.id as category.name for category in categories" required></select>
                    <div class="has-error" ng-show="productForm.product_category.$dirty">
                    <span class="text-danger" ng-show="productForm.product_category.$error.required">
                        <?php echo Lang::get('message.required_field', ['field' => trans('label.category')]);?>
                    </span>
                    </div>
                </div>
                <div class="form-group col-xs-6">
                    <label for="product_name">
                        <b><?php echo trans('label.first_name');?> <span class="text-danger">*</span></b>
                    </label>
                    <input class="form-control" type="text" placeholder="" required autofocus ng-model="product.name"
                           typeahead-on-select="selectProduct($item, product)"
                           uib-typeahead="p as p.name for p in products | filter:{name:$viewValue} | limitTo:5">
                    <div class="has-error" ng-show="productForm.product_name.$dirty">
                    <span class="text-danger" ng-show="productForm.product_name.$error.required">
                        <?php echo Lang::get('message.required_field', ['field' => trans('label.first_name')]);?>
                    </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-xs-6">
                    <label for="product_unit">
                        <b><?php echo trans('label.unit');?> <span class="text-danger">*</span></b>
                    </label>
                    <select class="form-control" id="product_unit" name="product_unit"
                            ng-model="product.unitId"
                            ng-options="unit.id as unit.name for unit in units" required></select>
                    <div class="has-error" ng-show="productForm.product_unit.$dirty">
                    <span class="text-danger" ng-show="productForm.product_unit.$error.required">
                        <?php echo Lang::get('message.required_field', ['field' => trans('label.unit')]);?>
                    </span>
                    </div>
                </div>
                <div class="form-group col-xs-6">
                    <label for="product_price">
                        <b><?php echo trans('label.price');?> <span class="text-danger">*</span></b>
                    </label>
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="" required name="product_price"
                               ng-model="product.price" aria-describedby="product_price">
                    <span class="input-group-addon" id="product_price">
                        đ/<span ng-bind="(units | filter:{id:product.unitId})[0].name"></span>
                    </span>
                    </div>
                    <div class="has-error" ng-show="productForm.product_price.$dirty">
                    <span class="text-danger" ng-show="productForm.product_price.$error.required">
                        <?php echo Lang::get('message.required_field', ['field' => trans('label.price')]);?>
                    </span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="product_description">
                    <b><?php echo trans('label.description');?></b>
                </label>
                <textarea class="form-control" id="product_description" name="product_description" rows="3"
                          placeholder="" ng-model="product.description"></textarea>
            </div>
            <div class="form-group">
                <label for="product_image">
                    <b><?php echo trans('label.avatar');?></b>
                </label>
                <div class="input-group">
                    <div class="product-img">
                        <img alt="img" ng-src="@{{getMainImage(product)}}">
                    </div>
                    <div class="product-img input-group">
                        <label class="input-group-btn">
                        <span class="btn btn-grey btn-sm">
                            <?php echo trans('label.add');?>
                            <input type="file" style="display: none;" accept="image/*" multiple my-file-select
                                   file-list="product.imageFiles" limit-file="getLimitImage(product)">
                        </span>
                        </label>
                    </div>
                    <div class="clearfix"></div>
                    <div ng-repeat="img in product.imageList.split(';') track by $index"
                         class="product-img-list editable @{{img==product.image?'selected':''}}">
                        <img ng-src="@{{getImage(img)}}" alt="img" ng-click="product.image=img">
                        <div class="glyphicon glyphicon-remove-circle" ng-click="deleteImage(img, product)"></div>
                    </div>
                    <div ng-repeat="img in product.imageFiles track by $index"
                         class="product-img-list editable @{{img.id==product.image.id?'selected':''}}">
                        <img ng-src="@{{getImage(img)}}" alt="img" ng-click="product.image=img">
                        <div class="glyphicon glyphicon-remove-circle" ng-click="deleteImage(img, product)"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button ng-if="!isEdit" class="btn" type="submit"
                    ng-disabled="productForm.$invalid"><?php echo trans('label.add');?></button>
            <button ng-if="isEdit" class="btn" type="submit"
                    ng-disabled="productForm.$invalid"><?php echo trans('label.edit');?></button>
            <button class="btn btn-grey" type="button" ng-click="cancel()"><?php echo trans('label.close');?></button>
        </div>
    </form>
</script>

<script type="text/ng-template" id="deleteProductPopover.html">
    <div class="input-group">
        <button type="button" ng-click="product.popoverOpened=false;deleteProduct(product)"
                class="btn btn-warning btn-sm"><?php echo trans('label.yes');?></button>
        <span>&nbsp;</span>
        <button type="button" ng-click="product.popoverOpened=false"
                class="btn btn-grey btn-sm"><?php echo trans('label.no');?></button>
    </div>
</script>