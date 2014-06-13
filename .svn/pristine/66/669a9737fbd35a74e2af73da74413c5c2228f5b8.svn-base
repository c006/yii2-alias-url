<?php

    use yii\grid\GridView;
    use yii\helpers\Html;

    /**
     * @var yii\web\View                   $this
     * @var yii\data\ActiveDataProvider    $dataProvider
     * @var c006\url\models\AliasUrlSearch $searchModel
     */

    $this->title = 'Seo Urls';
    $this->params['breadcrumbs'][] = $this->title;

?>
<div class="alias-url-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Seo Urls', [ 'create' ], [ 'class' => 'btn btn-success' ]) ?>
    </p>


    <?=
        GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel'  => $searchModel,
                'columns'      => [
                    [ 'class' => 'yii\grid\SerialColumn' ],
                    'id:url',
                    'private',
                    [ 'class' => 'yii\grid\CheckboxColumn' ],
                    'public',
                    [
                        'class'    => 'yii\grid\ActionColumn',
                        'template' => '{update} {delete}',
                    ],
                ],
            ]
        );
    ?>
</div>
