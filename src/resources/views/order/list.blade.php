<?php
$assets_url = 'resources/assets/';
?>

<!-- Page Title -->
<div class="section section-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?php echo trans('label.order.upper');?></h1>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav id="mainmenu" class="mainmenu">
                    <ul>
                        <li class="active">
                            <a href="index.html"><?php echo trans('label.buying');?> <span class="badge">1</span></a>
                        </li>
                        <li>
                            <a href="features.html"><?php echo trans('label.history');?> <span
                                        class="badge">12</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="shopping-cart user order">
                    <tr>
                        <td>
                            <table>
                                <thead>
                                <tr>
                                    <th colspan="3">
                                        <div class="comment-author">
                                            <a href="#">
                                                <img src="<?php echo $assets_url;?>img/user2.jpg" alt="User Name">
                                            </a>
                                        </div>
                                        <div class="rating">
                                            <div class="code"><span class="label label-warning">#123456</span></div>
                                            <div class="datetime">22/12/2016 13:04</div>
                                        </div>
                                        <div class="info">
                                            <a href="#">Lady Gaga</a>
                                        </div>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Thit</td>
                                    <td style="width:15%">1.3 kg</td>
                                    <td style="width:15%">120.000 d/kg</td>
                                </tr>
                                <tr>
                                    <td>Thit</td>
                                    <td>1.3 kg</td>
                                    <td>120.000 d/kg</td>
                                </tr>
                                <tr>
                                    <td>Thit</td>
                                    <td>1.3 kg</td>
                                    <td>120.000 d/kg</td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="3">
                                        <?php echo trans('label.total');?>: 500.000 d
                                        <div class="pull-right">
                                            <span class="text-info"><i class="glyphicon glyphicon-ok"></i> <?php echo trans('label.confirmed');?></span>
                                            <button class="btn btn-red"><?php echo trans('label.cancel_order');?></button>
                                        </div>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                        </td>
                    </tr>
                </table>
                <!-- End Shopping Cart Items -->
            </div>
        </div>
    </div>
</div>