<?php

    namespace c006\url;
    class Module extends \yii\base\Module
    {

        public $controllerNamespace = 'c006\url\controllers';


        public function init()
        {

            parent::init();
        }


        /**
         * Override createController()
         *
         * @link https://github.com/yiisoft/yii2/issues/810
         * @link http://www.yiiframework.com/forum/index.php/topic/21884-module-and-url-management/
         */
        public function createController($route)
        {

            //            die("HERE : ". $this->defaultRoute);
            preg_match('/(default)/', $route, $match);
            if ( isset($match[0]) )
                return parent::createController($route);

            return parent::createController("{$this->defaultRoute}/{$route}");
        }
    }
