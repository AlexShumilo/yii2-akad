<?php

/* @var $this \yii\web\View */
/* @var $book ['name', 'author' ]*/

use yii\helpers\Html;

?>
<ol class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li><a href="#">Library</a></li>
    <li class="active">Data</li>
</ol>

<?= $this->render('book', compact('book')) ?>