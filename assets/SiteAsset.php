<?php
namespace app\assets;

use yii\web\AssetBundle;

class SiteAsset extends AssetBundle {
    public $basePath = '@webroot';
    public $baseUrl = '@web/site';

    public $css = [
        'css/font-awesome.min.css',
        'css/jquery.bxslider.css',
        'css/isotope.css',
        'css/mycss.css',
        'css/animate.css',
        'js/fancybox/jquery.fancybox.css',
        'css/style.css',
    ];

    public $js = [
        'js/wow.min.js',
        'js/fancybox/jquery.fancybox.pack.js',
        'js/jquery.easing.1.3.js',
        'js/jquery.bxslider.min.js',
        'js/functions.js'
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}