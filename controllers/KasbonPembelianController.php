<?php

namespace app\controllers;

use Yii;

class KasbonPembelianController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return null;
    }

    public function actionCreate()
    {
        return $this->render('create');
    }

    public function actionUpdate()
    {
        return $this->render('update');
    }

    public function actionView()
    {
        return $this->render('view');
    }
}
