<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrap">
    <!-- Navigation & Logo-->
    <div class="mainmenu-wrapper">
        <div class="container">
            <div class="menuextras">
                <div class="extras">
                    <ul>
                        <li class="shopping-cart-items"><i class="glyphicon glyphicon-shopping-cart icon-white"></i> <a
                                href="page-shopping-cart.html"><b>3 items</b></a></li>
                        <li><a href="index.php/user#/login">Đăng nhập</a></li>
                        <li><a href="page-login.html">Đăng ký</a></li>
                    </ul>
                </div>
            </div>
            <nav id="mainmenu" class="mainmenu">
                <ul>
                    <li class="logo-wrapper"><a href="index.html"><img src="../images/mPurpose-logo.png"
                                                                       alt="Thực phẩm quê"></a>
                    </li>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="features.html">Features</a>
                    </li>
                    <li class="has-submenu active">
                        <a href="#">Pages +</a>
                        <div class="mainmenu-submenu">
                            <div class="mainmenu-submenu-inner">
                                <div>
                                    <h4>Homepage</h4>
                                    <ul>
                                        <li><a href="index.html">Homepage (Sample 1)</a></li>
                                        <li><a href="page-homepage-sample.html">Homepage (Sample 2)</a></li>
                                    </ul>
                                    <h4>Services & Pricing</h4>
                                    <ul>
                                        <li><a href="page-services-1-column.html">Services/Features (Rows)</a></li>
                                        <li><a href="page-services-3-columns.html">Services/Features (3 Columns)</a>
                                        </li>
                                        <li><a href="page-services-4-columns.html">Services/Features (4 Columns)</a>
                                        </li>
                                        <li><a href="page-pricing.html">Pricing Table</a></li>
                                    </ul>
                                    <h4>Team & Open Vacancies</h4>
                                    <ul>
                                        <li><a href="page-team.html">Our Team</a></li>
                                        <li><a href="page-vacancies.html">Open Vacancies (List)</a></li>
                                        <li><a href="page-job-details.html">Open Vacancies (Job Details)</a></li>
                                    </ul>
                                </div>
                                <div>
                                    <h4>Our Work (Portfolio)</h4>
                                    <ul>
                                        <li><a href="page-portfolio-2-columns-1.html">Portfolio (2 Columns, Option
                                                1)</a>
                                        </li>
                                        <li><a href="page-portfolio-2-columns-2.html">Portfolio (2 Columns, Option
                                                2)</a>
                                        </li>
                                        <li><a href="page-portfolio-3-columns-1.html">Portfolio (3 Columns, Option
                                                1)</a>
                                        </li>
                                        <li><a href="page-portfolio-3-columns-2.html">Portfolio (3 Columns, Option
                                                2)</a>
                                        </li>
                                        <li><a href="page-portfolio-item.html">Portfolio Item (Project) Description</a>
                                        </li>
                                    </ul>
                                    <h4>General Pages</h4>
                                    <ul>
                                        <li><a href="page-about-us.html">About Us</a></li>
                                        <li><a href="page-contact-us.html">Contact Us</a></li>
                                        <li><a href="page-faq.html">Frequently Asked Questions</a></li>
                                        <li><a href="page-testimonials-clients.html">Testimonials & Clients</a></li>
                                        <li><a href="page-events.html">Events</a></li>
                                        <li><a href="page-404.html">404 Page</a></li>
                                        <li><a href="page-sitemap.html">Sitemap</a></li>
                                        <li><a href="page-login.html">Login</a></li>
                                        <li><a href="page-register.html">Register</a></li>
                                        <li><a href="page-password-reset.html">Password Reset</a></li>
                                        <li><a href="page-terms-privacy.html">Terms & Privacy</a></li>
                                        <li><a href="page-coming-soon.html">Coming Soon</a></li>
                                    </ul>
                                </div>
                                <div>
                                    <h4>eShop</h4>
                                    <ul>
                                        <li><a href="page-products-3-columns.html">Products listing (3 Columns)</a></li>
                                        <li><a href="page-products-4-columns.html">Products listing (4 Columns)</a></li>
                                        <li><a href="page-products-slider.html">Products Slider</a></li>
                                        <li><a href="page-product-details.html">Product Details</a></li>
                                        <li><a href="page-shopping-cart.html">Shopping Cart</a></li>
                                    </ul>
                                    <h4>Blog</h4>
                                    <ul>
                                        <li><a href="page-blog-posts.html">Blog Posts (List)</a></li>
                                        <li><a href="page-blog-post-right-sidebar.html">Blog Single Post (Right
                                                Sidebar)</a>
                                        </li>
                                        <li><a href="page-blog-post-left-sidebar.html">Blog Single Post (Left
                                                Sidebar)</a>
                                        </li>
                                        <li><a href="page-news.html">Latest & Featured News</a></li>
                                    </ul>
                                </div>
                            </div><!-- /mainmenu-submenu-inner -->
                        </div><!-- /mainmenu-submenu -->
                    </li>
                    <li>
                        <a href="credits.html">Credits</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <div>
        <?= $content ?>
    </div>
</div>

<!-- Footer -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-footer col-md-3 col-xs-6">
                <h3>Clip về chúng tôi</h3>
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <a href="page-portfolio-item.html"><img src="../images/portfolio6.jpg" alt="Project Name"></a>
                    </div>
                </div>
            </div>
            <div class="col-footer col-md-3 col-xs-6">
                <h3>Các mục chính</h3>
                <ul class="no-list-style footer-navigate-section">
                    <li><a href="page-blog-posts.html">Blog</a></li>
                    <li><a href="page-portfolio-3-columns-2.html">Portfolio</a></li>
                    <li><a href="page-products-3-columns.html">eShop</a></li>
                    <li><a href="page-services-3-columns.html">Services</a></li>
                    <li><a href="page-pricing.html">Pricing</a></li>
                    <li><a href="page-faq.html">FAQ</a></li>
                </ul>
            </div>

            <div class="col-footer col-md-4 col-xs-6">
                <h3>Liên hệ</h3>
                <p class="contact-us-details">
                    <b>Địa chỉ:</b> Hội cầu KTXNN<br/>
                    <b>Phone:</b> 0999999<br/>
                    <b>Fax:</b> chưa mua máy fax :3<br/>
                    <b>Email:</b> <a
                        href="mailto:getintoutch@yourcompanydomain.com">xxxx@yourcompanydomain.com</a>
                </p>
            </div>
            <div class="col-footer col-md-2 col-xs-6">
                <h3>Mạng xã hội</h3>
                <ul class="footer-stay-connected no-list-style">
                    <li><a href="#" class="facebook"></a></li>
                    <li><a href="#" class="twitter"></a></li>
                    <li><a href="#" class="googleplus"></a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="footer-copyright">&copy; 2013 mPurpose. All rights reserved.</div>
            </div>
        </div>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
