<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var c006\url\models\AliasUrl $model
 */

$this->title = 'Update URL: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Alias URL', 'url' => ['index']];
$this->params['breadcrumbs'][] = [
    'label' => $model->id,
    'url'   => ['view', 'id' => $model->id]
];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="alias-url-update">
    <h1 class="title-large"><?= Html::encode($this->title) ?></h1>

    <?=
    $this->render('_form', [
            'model' => $model,
        ]
    ) ?>
</div>
