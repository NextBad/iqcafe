<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.css',
        'css/flexslider.css',
        'css/style.css',
        'css/fontawesome-all.css',
        'css/simpleLightbox.css',
        'http://fonts.googleapis.com/css?family=Poiret+One',
        'http://fonts.googleapis.com/css?family=Lato:100i,300,300i,400,400i,700,700i,900',
        'http://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700',
        'css/aos.css',
        'css/aos-animation.css',



    ];
    public $js = [
//      'js/main.js',
        'js/jquery-2.2.3.min.js',
        'js/jquery.flexisel.js',
        'js/jquery.flexslider.js',
        'js/simpleLightbox.js',
        'js/aos.js',
        "js/aosindex.js",
        "js/move-top.js",
        "js/easing.js",
        'js/bootstrap.js',


    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
