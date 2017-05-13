<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use \yii\helpers\Url;

use app\assets\AppAsset;

$appUrl = Yii::$app->request->baseUrl . '/';
AppAsset::register($this);
$this->title = 'AKAD Home Page';
?>
<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta charset="utf-8">
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="icon" href="favicon.ico">
    <!-- Bootstrap -->
    <link href="<?= $appUrl ?>files/css/style.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<!-- BEGIN ba-intro  -->
<div class="ba-intro ba-intro--home" style="background-image: url(<?= $appUrl ?>files/images/intro-bg.jpg)">
    <?= $this->render('//common/menu') ?>
    <?= $this->render('//common/who-we-are') ?>
</div>
<!-- END ba-intro -->
<main>
    <section class="ba-section">
        <div class="container">
            <!-- BEGIN ba-section__content  -->
            <div class="ba-section__content">
                <h2 class="ba-title text-center">
                    <span>Why chose us</span></h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.</p>
            </div>
            <!-- END ba-section__content -->

            <!-- BEGIN row  -->
            <div class="row">
                <!-- BEGIN col-sm-3  -->
                <div class="col-sm-3 col-xs-6">
                    <!-- BEGIN ba-service  -->
                    <div class="ba-service">
                        <!-- BEGIN   -->
                        <div class="ba-service__icon ion-ios-infinite-outline">

                        </div>
                        <!-- END  -->
                        <h3 class="ba-service__title">unlimited options</h3>
                        <ul class="ba-service__list">
                            <li>Branding</li>
                            <li>Design &amp; Copywriting</li>
                            <li>Concept development</li>
                            <li>User Experience</li>
                        </ul>
                    </div>
                    <!-- END ba-service -->
                    <!-- BEGIN ba-service  -->
                    <div class="ba-service">
                        <!-- BEGIN   -->
                        <div class="ba-service__icon ion-ios-cart-outline"></div>
                        <!-- END  -->
                        <h3 class="ba-service__title">e-commerce</h3>
                        <ul class="ba-service__list">
                            <li>Prototyping</li>
                            <li>Technical Consulting</li>
                            <li>Web applications</li>
                            <li>Quality testing</li>
                        </ul>
                    </div>
                    <!-- END ba-service -->
                </div>
                <!-- END col-sm-3 -->
                <!-- BEGIN col-sm-3  -->
                <div class="col-sm-3 col-xs-6">
                    <!-- BEGIN ba-service  -->
                    <div class="ba-service">
                        <!-- BEGIN   -->
                        <div class="ba-service__icon ion-ios-infinite-outline">

                        </div>
                        <!-- END  -->
                        <h3 class="ba-service__title">unlimited options</h3>
                        <ul class="ba-service__list">
                            <li>Branding</li>
                            <li>Design &amp; Copywriting</li>
                            <li>Concept development</li>
                            <li>User Experience</li>
                        </ul>
                    </div>
                    <!-- END ba-service -->
                    <!-- BEGIN ba-service  -->
                    <div class="ba-service">
                        <!-- BEGIN   -->
                        <div class="ba-service__icon ion-ios-cart-outline"></div>
                        <!-- END  -->
                        <h3 class="ba-service__title">e-commerce</h3>
                        <ul class="ba-service__list">
                            <li>Prototyping</li>
                            <li>Technical Consulting</li>
                            <li>Web applications</li>
                            <li>Quality testing</li>
                        </ul>
                    </div>
                    <!-- END ba-service -->
                </div>
                <!-- END col-sm-3 -->
                <!-- BEGIN col-sm-5  -->
                <div class="col-sm-5 col-sm-offset-1">
                    <img src="<?= $appUrl ?>files/images/room.jpg" alt="Room">
                </div>
                <!-- END col-sm-5 -->
            </div>
            <!-- END row -->

        </div>


    </section>

    <section class="ba-section">
        <!-- BEGIN container  -->
        <div class="container">
            <!-- BEGIN ba-section__content  -->
            <div class="ba-section__content">
                <h2 class="ba-title text-center">
                    <span>Our portfolio</span></h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.</p>
            </div>
            <!-- END ba-section__content -->

            <!-- BEGIN row  -->
            <div class="row">
                <!-- BEGIN col-sm-3  -->
                <div class="col-sm-3">
                    <h3>CHOSE CATEGORY</h3>
                    <ul class="ba-portfolio-filter">
                        <li><a data-filter="*" class="active" href="#">All</a></li>
                        <li><a data-filter=".webdesign" href="#">webdesign</a></li>
                        <li><a data-filter=".graphic-design" href="#">graphic design</a></li>
                        <li><a data-filter=".fashion" href="#">Fashion</a></li>
                        <li><a data-filter=".logo-design" href="#">Logo design</a></li>
                        <li><a data-filter=".advertising" href="#">Advertising</a></li>
                    </ul>
                </div>
                <!-- END col-sm-3 -->
                <!-- BEGIN col-sm-9  -->
                <div class="col-sm-9">
                    <!-- BEGIN   -->
                    <div class="ba-portfolio-grid">
                        <div class="ba-portfolio-grid__item webdesign">
                            <img src="<?= $appUrl ?>files/images/works/work1.jpg" alt="">
                        </div>
                        <div class="ba-portfolio-grid__item webdesign graphic-design">
                            <img src="<?= $appUrl ?>files/images/works/work2.jpg" alt="">
                        </div>
                        <div class="ba-portfolio-grid__item graphic-design">
                            <img src="<?= $appUrl ?>files/images/works/work3.jpg" alt="">
                        </div>
                        <div class="ba-portfolio-grid__item fashion">
                            <img src="<?= $appUrl ?>files/images/works/work4.jpg" alt="">
                        </div>
                        <div class="ba-portfolio-grid__item graphic-design">
                            <img src="<?= $appUrl ?>files/images/works/work5.jpg" alt="">
                        </div>
                        <div class="ba-portfolio-grid__item fashion logo-design">
                            <img src="<?= $appUrl ?>files/images/works/work6.jpg" alt="">
                        </div>
                        <div class="ba-portfolio-grid__item logo-design fashion">
                            <img src="<?= $appUrl ?>files/images/works/work7.jpg" alt="">
                        </div>
                        <div class="ba-portfolio-grid__item logo-design">
                            <img src="<?= $appUrl ?>files/images/works/work8.jpg" alt="">
                        </div>
                        <div class="ba-portfolio-grid__item advertising fashion">
                            <img src="<?= $appUrl ?>files/images/works/work9.jpg" alt="">
                        </div>

                    </div>
                    <!-- END  -->
                </div>
                <!-- END col-sm-9 -->
            </div>
            <!-- END row -->
        </div>
        <!-- END container -->
    </section>
</main>


<?php $this->endBody() ?>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?= $appUrl ?>files/javascripts/bootstrap.min.js"></script>
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
<script src="<?= $appUrl ?>files/javascripts/main.js"></script>
</body>
</html>
<?php $this->endPage() ?>
