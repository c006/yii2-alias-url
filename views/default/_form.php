<?php

    use yii\helpers\Html;
    use yii\widgets\ActiveForm;

    /**
     * @var yii\web\View             $this
     * @var c006\url\models\AliasUrl $model
     * @var yii\widgets\ActiveForm   $form
     */
?>

<div class="alias-url-form">
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'private')->textInput([ 'maxlength' => 140 ]) ?>

    <?= $form->field($model, 'public')->textInput([ 'maxlength' => 140 ]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', [ 'class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary' ]) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
<script type="text/javascript">
    var $elm = document.getElementById('aliasurl-public');
    $elm.onkeyup = function (evt) {
        this.value = this.value.replace(/\s+/gi, '-').replace(/[^\w\-]+/gi, '');
    }
</script>