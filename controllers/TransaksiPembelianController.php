<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class TransaksiPembelianController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionCreate()
    {
        return $this->render('create');
    }
}
