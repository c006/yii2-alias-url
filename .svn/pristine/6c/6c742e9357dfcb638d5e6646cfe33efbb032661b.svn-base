<?php
    /**
     * Created by PhpStorm.
     * User: user
     * Date: 5/26/14
     * Time: 2:10 PM
     */
    namespace c006\url\assets;

    use Yii;

    class AppAliasUrlHelper
    {

        static public function createLink($link)
        {
            return self::removeTrailingBackSlash(Yii::$app->request->pathInfo) . '/' . $link;
        }


        /**
         * @param $path
         *
         * @return string
         */
        static public function removeTrailingBackSlash($path)
        {
            if ( substr($path, strlen($path) - 1, 1) == "/" ) {
                return substr($path, 0, strlen($path) - 1);
            }

            return $path;
        }
    }
