<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View                   $this
 * @var c006\url\models\AliasUrlSearch $model
 * @var yii\widgets\ActiveForm         $form
 */
?>

<div class="alias-url-search">
    <?php $form = ActiveForm::begin([
            'action' => ['index'],
            'method' => 'get',
        ]
    ); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'private') ?>

    <?= $form->field($model, 'public') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
