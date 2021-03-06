<?php
$config = parse_ini_file('/var/secure/mp.ini', true);

$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);
return [
    'id' => 'mp-frontend',
    'name' => 'Meeting Planner',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log','\common\components\SiteHelper'],
    'controllerNamespace' => 'frontend\controllers',
    //'catchAll' => (($params['offline'])?['site/offline']:[]),
    'catchAll'=> [],
    'components' => [
        'assetManager' => [
          'appendTimestamp' => true,
          'bundles' => [
              'dosamigos\google\maps\MapAsset' => [
                  'options' => [
                      'key' => $params['google_maps_key'],
                  ]
              ],
          ],
      ],
      'log' => [
          'traceLevel' => YII_DEBUG ? 3 : 0,
          'targets' => [
              [
                  'class' => 'notamedia\sentry\SentryTarget',
                  'dsn' => 'http://'.$config['sentry_key_public'].':'.$config['sentry_key_private'].'@sentry.io/'.$config['sentry_id'],
                  'levels' => ['error', 'warning'],
                  'context' => true, // Write the context information. The default is true.
              ],
              /*[
                  'class' => 'yii\log\FileTarget',
                  'levels' => ['error', 'warning'],
              ],*/
          ],
      ],
      'errorHandler' => [
             'errorAction' => 'site/error',
         ],
        'session' => [
              'name' => 'PHPFRONTSESSID',
              'savePath' => __DIR__ . '/../runtime/sessions',
          ],
          'user' => [
              'identityClass' => 'common\models\User',
              'enableAutoLogin' => true,
              'identityCookie' => [
                'name' => '_frontendUser', // unique for frontend
                'path'=>'/frontend/web',  // correct path for the frontend app.
                'expire'=>time() + 86400 * 30,
                'secure'=>true,
              ],
              // 'on ' . \yii\web\User::EVENT_AFTER_LOGIN => ['frontend\events\UserEvents', 'handleAfterLogin'],
            ],
        'urlManager' => [
              //'class' => 'yii\web\UrlManager', // overloaded by codemix
              'class' => 'codemix\localeurls\UrlManager',
              // List all supported languages and include your app's default language.
              'languages' => $params['languages'],
              'enableDefaultLanguageUrlCode' => false,
              'enableLanguagePersistence' => true,
              'enablePrettyUrl' => true,
              'showScriptName' => false,
              'ignoreLanguageUrlPatterns' => [
                  // route pattern => url pattern
                  '#^site/auth#' => '#^site/auth#',
                  '#^address/import#' => '#^address/import#',
                  '#^meeting/command#' => '#^meeting/command#',
                  '#^mailgun-notification/store#' => '#mailgun-notification/store#',
              ],
              //'enableStrictParsing' => false,
              'rules' => [
                'place' => 'place',
                'place/yours' => 'place/yours',
                'place/create' => 'place/create',
                'place/create_geo' => 'place/create_geo',
                'place/create_place_google' => 'place/create_place_google',
                'place/view/<id:\d+>' => 'place/view',
                'place/update/<id:\d+>' => 'place/update',
                'place/<slug>' => 'place/slug',
                'meeting/<action>' => 'meeting/<action>',
                'dating/<action>' => 'meeting/<action>',
                'impeachment' => 'impeachment',
                'impeachment/index' => 'impeachment/index',
                'impeachment/result' => 'impeachment/result',
                'impeachment/<referred_by>' => 'impeachment',
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                'daemon/<action>' => 'daemon/<action>', // incl eight char action
                'site/<action>' => 'site/<action>', // incl eight char action
                'features' => 'site/features',
                'about' => 'site/about',
                'cgi-bin|cfide|wp-login|wp-admin' => 'site/neverland',
                '<username>/<identity:[A-Za-z0-9_-]{8}>' => 'meeting/identity',
                'meeting' => 'meeting',
                'friend' => 'friend',
                'reminder' => 'reminder',
                'ticket' => 'ticket',
                'user-contact' => 'user-contact',
                'user-profile' => 'user-profile',
                'user-setting' => 'user-setting',
                '<username>' => 'meeting/scheduleme',
                // note - currently actions with 8 letters and no params will fail
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
              ],
          ],
          /*'stripe' => [
            'class' => 'ruskid\stripe\Stripe',
            'privateKey' => $config['stripe_private_key'],
            'publicKey' => $config['stripe_public_key'],
          ],*/
        'authClientCollection' => [
                'class' => 'yii\authclient\Collection',
                'clients' => [
                    'facebook' => [
                        'class' => 'yii\authclient\clients\Facebook',
                        'clientId' => $config['oauth_fb_id'],
                        'clientSecret' => $config['oauth_fb_secret'],
                        //'title'=>Yii::t('frontend','Facebook'),
                    ],
                    'google' => [
                        'class' => 'yii\authclient\clients\GoogleOAuth',
                        'clientId' => $config['oauth_google_client_id'],
                        'clientSecret' => $config['oauth_google_client_secret'],
                        //'title'=>Yii::t('frontend','Google'),
                      ],
                    'linkedin' => [
                        'class' => 'yii\authclient\clients\LinkedIn',
                        'clientId' => $config['linkedin_client_id'],
                        'clientSecret' => $config['linkedin_client_secret'],
                        //'title'=>Yii::t('frontend','LinkedIn'),
                    ],
                    /*'twitter' => [
                        'class' => 'yii\authclient\clients\Twitter',
                        'consumerKey' => $config['oauth_twitter_key'],
                        'consumerSecret' => $config['oauth_twitter_secret'],
                                ],*/
                ],
            ],
          'Yii2Twilio' => [
            'class' => 'filipajdacic\yiitwilio\YiiTwilio',
            'account_sid' => $config['twilio_sid'],
            'auth_key' => $config['twilio_token'],
          ],
    ],
    'modules' => [
      'social' => [
          // the module class
          'class' => 'kartik\social\Module',
          'facebook' => [
              'appId' => $config['oauth_fb_id'],
              'secret' => $config['oauth_fb_secret'],
          ],
          'twitter' => [
              'screenName' => 'meetingio'
          ],
        ],
    ],
    'params' => $params,
    'defaultRoute' => '/site/index',
];
