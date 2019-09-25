<?php

namespace app\assets;

use yii\web\AssetBundle;

class MaterialKitDateTimePickerAsset extends AssetBundle
{
    public $sourcePath = '@vendor/material-kit/assets';
    public $js = [
        'js/plugins/moment.min.js',
        'js/plugins/bootstrap-datetimepicker.js',
        // more plugin Js here
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}