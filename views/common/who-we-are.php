<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use \yii\helpers\Url;

use app\assets\AppAsset;

$appUrl = Yii::$app->request->baseUrl . '/';
?>
<!-- BEGIN container  -->
<div class="container">
    <!-- BEGIN ba-intro__body  -->
    <div class="ba-intro__body">
        <h1 class="ba-intro__title">
               <span>
                  <small>WE'RE</small>
   	  				CREATIVE AGENCY
               </span>
        </h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br>tempor incididunt ut labore
            et dolore magna aliqua.</p>
    </div>
    <!-- END ba-intro__body -->

    <!-- BEGIN ba-intro-about  -->
    <div class="ba-intro-about">
        <!-- BEGIN row  -->
        <div class="row">
            <!-- BEGIN col-sm-6  -->
            <div class="col-sm-6">
                <img src="<?= $appUrl ?>files/images/intro-about.jpg" alt="History of agency">
            </div>
            <!-- END col-sm-6 -->
            <!-- BEGIN col-sm-6  -->
            <div class="col-sm-6">
                <h2 class="ba-title"><span>HISTORY OF AGENCY</span></h2>
                <p>Porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia
                    non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut
                    enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut
                    aliquid ex ea commodi modi tempora incidunt ut labore.</p>

                <div class="text-right">
                    <a class="btn btn-primary" href="<?= Url::to(['site/about']) ?>">READ MORE</a>
                </div>
            </div>
            <!-- END col-sm-6 -->
        </div>
        <!-- END row -->
    </div>
    <!-- END ba-intro-about -->
</div>
<!-- END container -->
