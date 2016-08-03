<?php

namespace c006\url\controllers;

use c006\alerts\Alerts;
use c006\core\assets\CoreHelper;
use c006\products\assets\ModelHelper;
use c006\url\assets\AppAliasUrl;
use c006\url\models\AliasUrl;
use c006\url\models\AliasUrlSearch;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * Class DefaultController
 * @package c006\url\controllers
 */
class UrlController extends Controller
{


    function init()
    {
        if (CoreHelper::checkLogin()) {
            return $this->redirect('/user');
        }
    }


    /**
     * Lists all AliasUrl models.
     *
     * @return mixed
     */
    public function actionIndex()
    {

        $searchModel = new AliasUrlSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->getQueryParams());

        return $this->render('index', [
                'dataProvider' => $dataProvider,
                'searchModel'  => $searchModel,
            ]
        );
    }


    /**
     * Displays a single AliasUrl model.
     *
     * @param string $id
     *
     * @return mixed
     */
    public function actionView($id)
    {

        return $this->render('view', [
                'model' => $this->findModel($id),
            ]
        );
    }


    /**
     * Creates a new AliasUrl model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     *
     * @return mixed
     */
    public function actionCreate()
    {

        $model = new AliasUrl;
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect('/alias');
        } else {
            return $this->render('create', [
                    'model' => $model,
                ]
            );
        }
    }


    /**
     * Updates an existing AliasUrl model.
     * If update is successful, the browser will be redirected to the 'view' page.
     *
     * @param string $id
     *
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if (isset($_POST['AliasUrl'])) {
            $post = $_POST['AliasUrl'];
            $public = strtolower(trim($post['public']));

            if (AppAliasUrl::isDuplicate($id, $public, $post['is_frontend']) == TRUE) {
                Alerts::setAlertType(Alerts::ALERT_WARNING);
                Alerts::setMessage('Public alias already taken');
            } else {
                $post['id'] = $id;
                CoreHelper::saveModelForm('c006\url\models\AliasUrl', $post);
                Alerts::setAlertType(Alerts::ALERT_SUCCESS);
                Alerts::setMessage('SUCCESS: Information updated');
            }

            return $this->redirect('/alias');
        } else {

            return $this->render('update', [
                    'model' => $model,
                ]
            );
        }
    }


    /**
     * Deletes an existing AliasUrl model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     *
     * @param string $id
     *
     * @return mixed
     */
    public function actionDelete($id)
    {

        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }


    /**
     * Finds the AliasUrl model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     *
     * @param string $id
     *
     * @return AliasUrl the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {

        if (($model = AliasUrl::findOne($id)) !== NULL) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
