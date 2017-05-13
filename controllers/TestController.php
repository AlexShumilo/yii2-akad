<?php

namespace app\controllers;

use yii\web\Controller;

/**
 * Represents
 *
 * @package app\controllers
 * @author Dmitry Kolodko <prowwid@gmail.com>
 */
class TestController extends Controller {
    public function actionIndex() {
        return 'Heloo I\'m nuby';
    }

    public function actionHappyNewYear() {
        $conbtent = $this->render('happy-new-year');

        //$conbtent .= ' Hell yeah!';

        return $conbtent;
    }
}