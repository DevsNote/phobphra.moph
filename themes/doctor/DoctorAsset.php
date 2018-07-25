<?php
namespace frontend\themes\doctor;

use yii\web\AssetBundle;

class DoctorAsset extends AssetBundle{
    public $sourcePath = '@frontend/themes/doctor/assets/';
    
    public $css = [
        'css/bootstrap.min.css',
        'css/font-awesome.min.css',
        'css/style.css',
    ];
    public $js = [
        'js/bootstrap.min.js',
        'js/custom.js',
        'js/gmaps.js',
        'js/html5shiv.js',
        'js/jquery-2.1.1.js',
        'js/modernizr.js',
        'js/respond.min.js',
        'js/smoothscroll.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
