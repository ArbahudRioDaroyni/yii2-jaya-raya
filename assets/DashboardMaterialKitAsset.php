<?php

namespace app\assets;

use yii\web\AssetBundle;

class DashboardMaterialKitAsset extends AssetBundle
{
    public $sourcePath = '@vendor/material-kit/assets';
    public $js = [
        // 'js/core/jquery.min.js',
        'js/core/popper.min.js',
        'js/core/bootstrap-material-design.min.js',
        'js/plugins/perfect-scrollbar.jquery.min.js',
        // 'js/plugins/moment.min.js',
        // 'js/plugins/bootstrap-datetimepicker.js',
        // 'js/plugins/nouislider.min.js',
        // 'js/material-kit.js?v=2.0.6'
        'js/material-dashboard.js?v=2.1.1',
        // 'js/plugins/bootstrap-notify.js',
        // more plugin Js here
    ];
    public $css = [
        'css/material-dashboard.css?v=2.1.1',
        // 'css/material-kit.css?v=2.1.1',
        'demo/demo-dashboard.css',
        // more plugin CSS here
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}