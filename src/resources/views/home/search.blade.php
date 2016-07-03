<?php
$assets_url = 'resources/assets/';
?>

<!-- Page Title -->
<div class="section section-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?php echo trans('label.search');?></h1>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="input-group">
                    <input class="form-control input-md" id="appendedInputButtons" type="text">
                    <span class="input-group-btn">
                        <button class="btn btn-md" type="button"><?php echo trans('label.search');?></button>
                    </span>
                </div>
            </div>
            <div class="col-sm-3 col-sm-offset-2">
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><?php echo trans('label.rating');?></span>
                    <select class="form-control" aria-describedby="basic-addon1">
                        <option>1-2</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><?php echo trans('label.price');?></span>
                    <select class="form-control" aria-describedby="basic-addon1">
                        <option>thấp đến cao</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="shopping-cart user">
                    <tr>
                        <td>
                            <table>
                                <thead>
                                <tr>
                                    <th>
                                        <div class="comment-author">
                                            <a href="#">
                                                <img src="<?php echo $assets_url;?>img/user2.jpg" alt="User Name">
                                            </a>
                                        </div>
                                        <div class="rating">
                                            <i class="glyphicon glyphicon-star"></i> <b>4.5</b>
                                            <i class="glyphicon glyphicon-user"></i> <b>100</b>
                                        </div>
                                        <div class="info">
                                            <a href="#">Lady Gaga</a>
                                        </div>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="shop-item">
                                                <div class="shop-item-image">
                                                    <a href="page-product-details.html">
                                                        <img src="<?php echo $assets_url;?>img/product1.jpg"
                                                             alt="Item Name">
                                                    </a>
                                                </div>
                                                <div class="title">
                                                    <h3><a href="page-product-details.html">Lorem ipsum dolor</a></h3>
                                                </div>
                                                <div class="price">
                                                    $999.99
                                                </div>
                                                <div class="actions">
                                                    <a href="page-product-details.html"
                                                       class="btn btn-small"><?php echo trans('label.add_to_cart');?></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="shop-item">
                                                <div class="shop-item-image">
                                                    <a href="page-product-details.html">
                                                        <img src="<?php echo $assets_url;?>img/product1.jpg"
                                                             alt="Item Name">
                                                    </a>
                                                </div>
                                                <div class="title">
                                                    <h3><a href="page-product-details.html">Lorem ipsum dolor</a></h3>
                                                </div>
                                                <div class="price">
                                                    $999.99
                                                </div>
                                                <div class="actions">
                                                    <a href="page-product-details.html"
                                                       class="btn btn-small"><?php echo trans('label.add_to_cart');?></a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>