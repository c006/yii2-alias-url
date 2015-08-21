<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var c006\url\models\AliasUrl $model
 */

$this->title = 'Create URL';
$this->params['breadcrumbs'][] = ['label' => 'Alias URL', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alias-url-create">
    <h1 class="title-large"><?= Html::encode($this->title) ?></h1>

    <?=
    $this->render('_form', [
            'model' => $model,
        ]
    ) ?>
</div>
