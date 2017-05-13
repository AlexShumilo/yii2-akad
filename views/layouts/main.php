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
AppAsset::register($this);
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
<div style="background-image: url(<?= $appUrl ?>files/images/about-bg.jpg)" class="ba-intro">
    <?= $this->render('//common/menu') ?>
    <?= $this->render('//common/who-we-are') ?>
</div>
<!-- END ba-intro -->

<main>
    <?= $content ?>
    <footer class="ba-footer">
        <div class="container">
            <ul class="nav navbar-nav">
                <li><a>Home</a></li>
            </ul>
        </div>
    </footer>
</main>
<?php $this->endBody() ?>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script defer src="<?= $appUrl ?>files/javascripts/bootstrap.min.js"></script>
<script defer src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
<script defer src="<?= $appUrl ?>files/javascripts/slick.min.js"></script>
<script defer src="<?= $appUrl ?>files/javascripts/main.js"></script>
</body>
</html>
<?php $this->endPage() ?>
