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
        'https://unpkg.com/aos@2.3.1/dist/aos.css',
        'https://unpkg.com/leaflet@1.9.3/dist/leaflet.css',
        'css/preloader.css',
        'css/style.css',
        'css/mobile.css',
        'css/site.css',
    ];
    public $js = [
        'https://unpkg.com/leaflet@1.9.3/dist/leaflet.js',
        'https://unpkg.com/aos@2.3.1/dist/aos.js',

        'https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js',
        'js/jquery.preloadinator.min.js',
        'js/mask.js',
        'js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
