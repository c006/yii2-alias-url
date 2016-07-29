<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var c006\url\models\AliasUrl $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="alias-url-form">
    <div class="item-container margin-top-30">
        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'private')->textInput(['maxlength' => 140]) ?>

        <?= $form->field($model, 'public')->textInput(['maxlength' => 140]) ?>

        <?= $form->field($model, 'is_frontend')->dropDownList(['No', 'Yes']) ?>

        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-secondary' : 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>
<script type="text/javascript">
    var $elm = document.getElementById('aliasurl-public');
    $elm.onkeyup = function (evt) {
        this.value = this.value.toLowerCase().replace(/[^0-9|a-z|_|/.|/*]/gi, '-');
    }
</script>