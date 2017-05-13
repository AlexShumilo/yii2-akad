<?php

namespace app\controllers;

use yii\web\Controller;

/**
 * Represents
 *
 * @package app\controllers
 * @author Dmitry Kolodko <prowwid@gmail.com>
 */
class BooksController extends Controller {
    public function actionIndex() {
        $books = [
            [
                'name' => 'A',
                'author' => 'AA',
            ],
            [
                'name' => 'B',
                'author' => 'BBB',
            ],
            [
                'name' => 'C',
                'author' => 'CCCC',
            ],
            [
                'name' => 'F',
                'author' => 'FFFF',
            ],
        ];

        return $this->render('index', compact('books'));
    }

    public function actionView() {
        $book = [
            'name' => 'F',
            'author' => 'FFFF',
        ];

        return $this->render('view', compact('book'));
    }
}