<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);
require_once __DIR__ . '/../../common/helpers/helpers.php';

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log',],

    'controllerNamespace' => 'frontend\controllers',
    'modules' => [
        'gridview' => [
            'class' => '\kartik\grid\Module'
            // enter optional module parameters below - only if you need to
            // use your own export download action or custom translation
            // message source
            // 'downloadAction' => 'gridview/export/download',
            // 'i18n' => []
        ]
    ],
    'language' => 'en',
    'components' => [
        'formatter' => [
            'class' => 'yii\i18n\Formatter',
            'defaultTimeZone' => 'Asia/Tashkent',
        ],
        'languagepicker' => [
            'class' => 'lajax\languagepicker\Component',        // List of available languages (icons and text)
            'languages' => ['en' => 'English', 'uz' => 'Uzbek', 'ru' => 'Русский'],
            'cookieName' => 'language',                         // Name of the cookie.
            'expireDays' => 64,                                 // The expiration time of the cookie is 64 days.
            'callback' => function () {
                if (!\Yii::$app->user->isGuest) {
                    $user = \Yii::$app->user->identity;
                    $user->language = \Yii::$app->language;
                    $user->save();
                }
            }
        ],
        'i18n' => [
            'translations' => [
                'main*' => [
                    'sourceLanguage' => 'sr',  // EDIT  THE  LINE
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@frontend/messages',
                ],
            ],
        ],

        'response' => [
            'formatters' => [
                'json' => [
                    'class' => 'yii\web\JsonResponseFormatter',
                    'prettyPrint' => YII_DEBUG,
                    'encodeOptions' => JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE,
                ],
            ],
        ],
        'request' => [
            'csrfParam' => 'dioks-frontend',
            'baseUrl' => '',
//            'parsers' => [
//                'application/json' => 'yii\web\JsonParser',
//            ],
            'enableCsrfValidation' => false,

        ],
//        'modules' => [
//            'gridview' => ['class' => 'kartik\grid\Module', 'downloadAction' => 'gridview/export/download'],
//        ],
        'assetManager' => [
            'bundles' => [
//                'yii\bootstrap\BootstrapAsset' => [
//                    'bsDependencyEnabled' => false, // do not load bootstrap assets for a specific asset bundle
//                     'css' => [],
//                ],

                'kartik\form\ActiveFormAsset' => [
                    'bsDependencyEnabled' => false, // do not load bootstrap assets for a specific asset bundle
                ],
            ],
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'dioks-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => \yii\log\FileTarget::class,
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],

        'urlManager' => [
            'class' => 'codemix\localeurls\UrlManager',
//            'enableDefaultLanguageUrlCode' => true,
//            'enableLanguagePersistence' => false,
            'languages' => ['uz', 'ru', 'en'],
            'enableLanguageDetection' => false,
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'enableStrictParsing' => false,

        ],

    ],

];
