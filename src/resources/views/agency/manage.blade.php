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
                    <form role="form" ng-submit="save()">
                        <div class="form-group">
                            <label for="agency_name"><i class="glyphicon glyphicon-user"></i>&nbsp;
                                <b><?php echo trans('label.agency_name');?></b></label>
                            <input class="form-control" id="agency_name" type="text" placeholder="" autofocus
                                   ng-model="agency.name">
                        </div>
                        <div class="form-group">
                            <label for="agency_address"><i class="glyphicon glyphicon-home"></i>&nbsp;
                                <b><?php echo trans('label.address');?></b></label>
                            <input class="form-control" id="agency_address" type="text" placeholder=""
                                   ng-model="agency.address">
                        </div>
                        <div class="form-group">
                            <label for="agency_phone"><i class="glyphicon glyphicon-earphone"></i>&nbsp;
                                <b><?php echo trans('label.phone');?></b></label>
                            <input class="form-control" id="agency_phone" type="text" placeholder=""
                                   ng-model="agency.phone">
                        </div>
                        <div class="form-group">
                            <label for="agency_email"><i class="glyphicon glyphicon-envelope"></i>&nbsp;
                                <b><?php echo trans('label.email');?></b></label>
                            <input class="form-control" id="agency_email" type="text" placeholder=""
                                   ng-model="agency.email">
                        </div>
                        <div class="form-group">
                            <label for="agency_avatar"><i class="glyphicon glyphicon-picture"></i>&nbsp;
                                <b><?php echo trans('label.avatar');?></b></label>
                            <div class="input-group">
                                <img ng-src="@{{getAvatar()}}" alt="avatar">
                                <label class="img-select">
                                    <span class="btn btn-primary">
                                        <?php echo trans('label.replace');?><input type="file" style="display: none;"
                                                                                   file-model="avatar"
                                                                                   onchange="angular.element(this).scope().setFile(this)"
                                                                                   accept="image/*">
                                    </span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn pull-right"><?php echo trans('label.save');?></button>
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
                        <form role="form">
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
                                <tfoot>
                                <tr>
                                    <td><input class="form-control" type="text" placeholder="">
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
                                        <select class="form-control">
                                            <option>kg</option>
                                            <option>bó</option>
                                        </select>
                                    </td>
                                    <td>
                                        <div class="input-group">
                                            <input class="form-control" type="text" placeholder=""
                                                   aria-describedby="basic-addon1">
                                            <span class="input-group-addon" id="basic-addon1">đ/kg</span>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="btn"><?php echo trans('label.add');?></button>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>