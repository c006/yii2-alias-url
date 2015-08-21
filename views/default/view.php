<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/**
 * @var yii\web\View $this
 * @var c006\url\models\AliasUrl $model
 */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Alias URL', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alias-url-view">
    <h1 class="title-large"><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?=
        Html::a('Delete', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data'  => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method'  => 'post',
                ],
            ]
        ) ?>
    </p>

    <?=
    DetailView::widget([
            'model'      => $model,
            'attributes' => [
                'id:url',
                'private',
                'public',
            ],
        ]
    ) ?>
</div>
