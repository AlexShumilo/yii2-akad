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
<nav class="navbar ba-top-navbar">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?= Url::to(['site/index']) ?>">
                <img src="<?= $appUrl ?>files/images/logo.png" alt="AKAD.">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="ba-main-menu nav navbar-nav navbar-right">
                <li class="active">
                    <a href="<?= Url::to(['site/index']) ?>">Home</a>
                </li>
                <li>
                    <a href="<?= Url::to(['site/about']) ?>">About</a>
                </li>
                <li>
                    <a href="<?= Url::to(['site/blog']) ?>">Blog</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="<?= Url::to(['site/contact']) ?>">Contacts</a>
                </li>
            </ul>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
