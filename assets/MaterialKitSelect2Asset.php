<?php

namespace app\assets;

use yii\web\AssetBundle;

class MaterialKitSelect2Asset extends AssetBundle
{
    public $sourcePath = '@vendor/material-kit/plugin/select2/dist';
    public $css = [
        'css/select2.min.css',
        // more plugin Css here
    ];
    public $js = [
        'js/select2.full.min.js',
        // more plugin Js here
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}