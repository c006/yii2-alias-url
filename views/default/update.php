<?php

    use yii\helpers\Html;

    /**
     * @var yii\web\View             $this
     * @var c006\url\models\AliasUrl $model
     */

    $this->title = 'Update Seo Urls: ' . ' ' . $model->id;
    $this->params['breadcrumbs'][] = [ 'label' => 'Seo Urls', 'url' =>  ['index']  ];
    $this->params['breadcrumbs'][] = [
        'label' => $model->id,
        'url'   => [ 'view', 'id' => $model->id ]
    ];
    $this->params['breadcrumbs'][] = 'Update';
?>
<div class="alias-url-update">
    <h1><?= Html::encode($this->title) ?></h1>

    <?=
        $this->render('_form', [
                'model' => $model,
            ]
        ) ?>
</div>
