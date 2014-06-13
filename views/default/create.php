<?php

    use yii\helpers\Html;

    /**
     * @var yii\web\View             $this
     * @var c006\url\models\AliasUrl $model
     */

    $this->title = 'Create Seo Urls';
    $this->params['breadcrumbs'][] = [ 'label' => 'Seo Urls', 'url' => [ 'index' ] ];
    $this->params['breadcrumbs'][] = $this->title;
?>
<div class="alias-url-create">
    <h1><?= Html::encode($this->title) ?></h1>

    <?=
        $this->render('_form', [
                'model' => $model,
            ]
        ) ?>
</div>
