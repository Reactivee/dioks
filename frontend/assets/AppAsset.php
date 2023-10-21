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
        'fonts/stylesheet.css',
        'https://unpkg.com/leaflet@1.9.3/dist/leaflet.css',

        'css/style.css',
        'css/site.css',
    ];
    public $js = [
        'https://unpkg.com/leaflet@1.9.3/dist/leaflet.js',
        'https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js',

        'js/mask.js',
        'js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
