<?php
/**
 * -----------------------------------------------------------------------------
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 * -----------------------------------------------------------------------------
 */

namespace frontend\assets;

use yii\web\AssetBundle;
use Yii;

// set @themes alias so we do not have to update baseUrl every time we change themes
Yii::setAlias('@themes', Yii::$app->view->theme->baseUrl);

/**
 * -----------------------------------------------------------------------------
 * @author Qiang Xue <qiang.xue@gmail.com>
 *
 * @since 2.0
 * -----------------------------------------------------------------------------
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@themes';
    
    public $css = [
        //'http://fonts.googleapis.com/css?family=Open+Sans:300,400,700',
        'assets/css/bootstrap.min.css',
        'assets/css/font-awesome-4.0.3.min.css',
        'assets/css/bootstrap-theme.css',
        'assets/css/style.css',
        'assets/css/camera.css',
    ];
    public $js = [
        'assets/js/modernizr-latest.js',
        'assets/js/jquery.min.js',
        'assets/js/fancybox/jquery.fancybox.pack.js',
        'assets/js/jquery.mobile.customized.min.js',
        'assets/js/jquery.easing.1.3.js',
        'assets/js/camera.min.js',
        'assets/js/bootstrap.min.js',
        'assets/js/custom.js',
        'assets/js/camera_wrap_4.js',

    ];
    
    public $depends = [
        'yii\web\YiiAsset',
    ];
}

