Yii2  Seo URL's
===================

##[ Not ready for use yet, getting there ]##

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist "c006/yii2-alias-url" "dev-master"
```

or add

```
"c006/yii2-alias-url": "dev-master"
```

to the require section of your `composer.json` file.



Run this to setup the tables

```
$ yii migrate --migrationPath=@vendor\c006\yii2-alias-url\migrations
```

Setup
-----


Basic **"config/web.php"**

Advanced **"config/main.php"**

>
        'components' => [
            ...
            ...
            ...
            /*  Match this */
            'urlManager' => [
                'enablePrettyUrl' => TRUE,
                'showScriptName'  => FALSE,
                'rules'           => [
                    [
                        'class' => 'c006\url\assets\AppAliasUrl',
                    ],
                ],
            ],
        ],


>
        'modules'    => [
            ...
            ...
            ...
            'alias-url' => [
                'class' => 'c006\url\Module',
            ],
        ],


**vendor/yiisoft/yii2/web/UrlManager.php**

>
    /* Near line 293 */
    public function createUrl($params)
    {
        ...
        ...
        ...
        }
        /* c006 :: AppAliasUrl */
        if ( AppAliasUrl::$convertAll ) {
            $route = AppAliasUrl::findAll($route);
        }
        /* End Code */
        if ($this->suffix !== null) {
            $route .= $this->suffix;
        }
    }

**vendor/yiisoft/yii2/base/Module.php**

>
        /* Near line 421 */
        public function runAction($route, $params = [ ])
        {
            $parts = $this->createController($route);
            /* c006 -- Run AppAliasUrl on InvalidRouteException */
            if ( !is_array($parts) ) {
                $route = AppAliasUrl::routeFailed($route);
                if ( $route ) {
                    $parts = $this->createController($route);
                }
            }
            ...
            ...
            ...
        }

Usage
-----

###http:// ___Your_Domain___ /alias###


**Example usage:**

Actual URL: http:://my-domain/site/about

Alias URI: http:://my-domain/abc


Go to:

`/alias`

`click > create url`

>
    public => abc
    private => site/about
    absolute => 1

Now `/abc` will display `site/about`


**Non absolute example:**

Actual URL: http:://my-domain/site/about

Alias URI: http:://my-domain/about

Go to:

`/alias`

`click > create url`

>
    public => about
    private => site
    absolute => 0

Now `/about` will display `site/about`


Comments / Suggestions / Help
--------------------

Use the issue ticket to provide any helpful feedback, requests or questions.

Thanks.


































