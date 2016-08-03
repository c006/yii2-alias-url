<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 5/25/14
 * Time: 10:55 PM
 */
namespace c006\url\assets;

use c006\url\models\AliasUrl;
use Yii;

/**
 * Class AppAliasUrl
 *
 * @package c006\url\assets
 */
class AppAliasUrl
{

    /**
     * @var int
     */
    public static $complete = FALSE;

    /**
     * @var bool
     */
    public static $convertAll = TRUE;


    /**
     * @param $route
     *
     * @return string
     */
    public static function routeFailed($route)
    {

        if (!empty($route)) {
            $baseRoute = self::getBaseRoute($route);
            $sql = "SELECT * FROM `alias_url` WHERE UPPER(`public`) LIKE ('" . strtoupper($baseRoute) . "');";
            $row = Yii::$app->db->createCommand($sql)->queryOne();
            if ($row !== FALSE) {
                return $row['private'];
            }
        }
        //Uncomment to trace
        //Yii::trace('AppAliasUrl > routeFailed > ' . $route, 'c006');
        return $route;
    }

    /**
     * @param $route
     *
     * @return array|mixed
     */
    private static function getBaseRoute($route)
    {

        $route = preg_replace('/^\/+/', '', $route);
        if (strpos($route, '/') !== FALSE) {
            $route = explode('/', $route);

            return $route[0];
        }

        return $route;
    }

    /**
     * @param $route
     *
     * @return string
     */
    public static function findAll($route)
    {

        if (!empty($route)) {
            $baseRoute = self::getBaseRoute($route);
            $sql = "SELECT * FROM `alias_url` WHERE UPPER(`private`) LIKE ('" . strtoupper($baseRoute) . "');";
            $row = Yii::$app->db->createCommand($sql)->queryOne();
            if ($row !== FALSE) {
                return $row['public'];
            }
        }
        //Uncomment to trace
        //Yii::trace('AppAliasUrl > findAll > ' . $route, 'c006');
        return $route;
    }

    private static function cleanRoute($route)
    {

        $route = preg_replace('/^\//', '', $route);
        if (strpos($route, '/') !== FALSE) {
            $route = explode('/', $route);
            unset($route[0]);
            $key = array_search('index', $route);
            if ($key) {
                unset($route[$key]);
            }

            return join('/', $route);

        }

        return str_replace(self::getBaseRoute($route), '', $route);
    }

    /**
     * @param     $public
     * @param     $private
     * @param int $is_frontend
     * @return array|AliasUrl|mixed|null|\yii\db\ActiveRecord
     */
    static public function addAlias($public, $private, $is_frontend = 1)
    {
        $public = (substr($public, 1) != '/') ? '/' . $public : $public;

        $model = AliasUrl::find()
            ->where(['public' => $public])
            ->asArray()
            ->one();
        if (sizeof($model)) {
            return $model['id'];
        }

        $model = new AliasUrl();
        $model->public = $public;
        $model->private = $private;
        $model->is_frontend = $is_frontend;

        if ($model->isNewRecord && $model->validate() && $model->save()) {
            return $model;
        }
    }

    /**
     * @param     $public
     * @param     $private
     * @param int $is_frontend
     * @return array|AliasUrl|mixed|null|\yii\db\ActiveRecord
     */
    static public function addAliasByPrivate($public, $private, $is_frontend = 1)
    {
        /** @var  $model \c006\url\models\AliasUrl */
        $model = AliasUrl::find()
            ->where(['private' => $private])
            ->one();
        if (is_object($model)) {
            $model->public = $public;
            if ($model->validate() && $model->save()) {
                return $model;
            } else {
                print_r($model->getErrors());
                exit;
            }
        }

        $model = new AliasUrl();
        $model->public = $public;
        $model->private = $private;
        $model->is_frontend = $is_frontend;

        if ($model->isNewRecord && $model->validate() && $model->save()) {
            return $model;
        }
    }


    /**
     * @param $id
     * @return array|null|\yii\db\ActiveRecord
     */
    static public function findById($id)
    {
        $model = AliasUrl::find()
            ->where(['id' => $id])
            ->asArray()
            ->one();
        if (sizeof($model)) {
            return $model;
        }

        return ['id' => 0, 'public' => '', 'private' => ''];
    }

    /**
     * @param $id
     * @param $public
     * @param bool $is_frontend
     * @return bool
     */
    static public function isDuplicate($id, $public, $is_frontend = TRUE)
    {
        $model = AliasUrl::find()
            ->where(" id != " . $id . " ")
            ->andWhere(['public' => $public])
            ->andWhere(['is_frontend' => $is_frontend])
            ->asArray()
            ->one();

        return (is_array($model) && sizeof($model)) ? TRUE : FALSE;
    }
}


