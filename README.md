Yii2  Seo URL's
===================


Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-source "c006/yii2-alias-url" "dev-master"
```

or add

```
"c006/yii2-alias-url": "dev-master"
```

to the require section of your `composer.json` file.



**Next** check that a database connection is setup

**Run** this to setup the tables.

```
$ yii migrate --migrationPath=@vendor/c006/yii2-alias-url/migrations
```

or if my console is installed

```$ yii migrate2 m000000_000000_c006_url```


Setup
-----


Basic **"config/web.php"**

Advanced **"config/main.php"**

>
        'components' => [
            ...
            ...
            ...
            'urlManager' => [
                'enablePrettyUrl' => FALSE,
                'showScriptName'  => FALSE,
            ],
        ],


>
        'modules'    => [
            ...
            ...
            ...
            'alias' => [
                'class' => 'c006\url\Module',
                'is_frontend' => {TRUE/FALSE}
            ],
        ],




**Do not use `.htaccess`**
 
**Use Mod_Rewrite in your host / virtual host file
>
    <IfModule mod_rewrite.c>
        RewriteEngine On
        RewriteLog "/var/log/apache2/rewrite.log"
        RewriteLogLevel 0
        RewriteCond %{REQUEST_FILENAME} -f [OR]
        RewriteCond %{REQUEST_FILENAME} -d
        RewriteRule ^ - [L]
        RewriteRule (assets|images|css|videos)($|/) - [L]
        RewriteCond %{REQUEST_URI} !^/index
        RewriteRule (.*) /index.php$1
        RewriteRule . /index.php [L]
    </IfModule>
 



This goes for frontend and backend if using advanced.


Usage
-----


Go to:

`/alias`

`click > create url`

>
    public => abc
    private => site/about

Now `/abc` will display `site/about`

Note private can have a query string.
>
    public => abc
    private => site/about?id=123



Comments / Suggestions / Help
--------------------

Use the issue ticket to provide any helpful feedback, requests or questions.

Thanks.


