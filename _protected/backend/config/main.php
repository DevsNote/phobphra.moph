<?php

$params = array_merge(
        require(__DIR__ . '/../../common/config/params.php'), require(__DIR__ . '/../../common/config/params-local.php'), require(__DIR__ . '/params.php'), require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [
        'kpi' => [
            'class' => 'backend\modules\kpi\Module',
        ],
        'mail' => [
            'class' => 'backend\modules\mail\Module',
        ],
        'news' => [
            'class' => 'backend\modules\news\Module',
        ],
        'pdfjs' => [
            'class' => '\yii2assets\pdfjs\Module',
        ],
        'complaint' => [
            'class' => 'backend\modules\complaint\Module',
        ],
        'teentrouble' => [
            'class' => 'backend\modules\teentrouble\Module',
        ],
    ],
    'components' => [
        // here you can set theme used for your backend application 
        // - template comes with: 'default', 'slate', 'spacelab' and 'cerulean'
        'assetManager' => [
            'bundles' => [
                'dmstr\web\AdminLteAsset' => [
                    'skin' => 'skin-blue'
                ],
            ],
        ],
        'view' => [
            /*
              'theme' => [
              'pathMap' => ['@app/views' => '@webroot/themes/slate/views'],
              'baseUrl' => '@web/themes/slate',
              ],
             */
            'theme' => [
                'pathMap' => [
                    '@backend/views' => '@backend/themes/adminlte/views'
                ],
                'baseUrl' => '@web/themes/adminlte',
            ],
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
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
        ],
    ],
    'params' => $params,
];
