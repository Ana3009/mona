<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'roma/css/styles-merged.css',
        'roma/css/style.min.css',
        'roma/css/custom.css'
    ];
    public $js = [
        'roma/js/scripts.min.js',
        'roma/js/main.min.js',
        'roma/js/custom.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
