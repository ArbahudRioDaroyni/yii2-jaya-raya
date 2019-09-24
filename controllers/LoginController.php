<?php

namespace app\controllers;

use Yii;

class LoginController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $this->layout = 'no-nav-material-kit';

        return $this->render('index');
    }
}
