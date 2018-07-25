<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'PHOBPHRA HOSPITAL',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'modules' => [
        'pdfjs' => [
            'class' => '\yii2assets\pdfjs\Module',
        ],
    ],
    'components' => [
        // here you can set theme used for your frontend application 
        // - template comes with: 'default', 'slate', 'spacelab' and 'cerulean'
        'assetManager' => [
            'bundles' => [
                'dmstr\web\AdminLteAsset' => [
                    'skin' => 'skin-blue'
                ],
            ],
        ],
        'view' => [
            'theme' => [
                
                //'pathMap' => ['@app/views'=>'@frontend/themes/doctor/views'],
                //'baseUrl' => '@frontend/themes/doctor',
                
                'pathMap' => [ '@frontend/views' => '@frontend/themes/interior' ], 
                'baseUrl' => '@web/themes/interior'
                //'pathMap' => ['@backend/views' => '@backend/themes/adminlte/views'],
                //'baseUrl' => '@web/themes/adminlte',
                 
                
                //'pathMap' => ['@app/views' => '@app/themes/doctor'],
                //'baseUrl' => '@web/../themes/doctor',
                 
            ]
        ],
        'user' => [
            'identityClass' => 'common\models\UserIdentity',
            'enableAutoLogin' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
    ],
    'params' => $params,
];
