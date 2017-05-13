<?php

/* @var $this \yii\web\View */
/* @var $books array list of books, Contains arrays of ['name', 'author' ]*/

use yii\helpers\Html;

?>
<?php foreach ($books as $book) { ?>

    <?= $this->render('book', compact('book')) ?>
    <br>

<?php } ?>

<?php foreach ($books as $book): ?>


    <?php include('book.php') ?>
    <br>

<?php endforeach; ?>
