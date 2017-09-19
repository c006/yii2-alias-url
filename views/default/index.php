<?php

use yii\grid\GridView;
use yii\helpers\Html;

/**
 * @var yii\web\View                   $this
 * @var yii\data\ActiveDataProvider    $dataProvider
 * @var c006\url\models\AliasUrlSearch $searchModel
 */

$this->title                   = 'Alias URLs';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="alias-url-index">
    <h1 class="title-large"><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Add URL', ['create'], ['class' => 'btn btn-secondary']) ?>
    </p>

    <?=
    GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel'  => $searchModel,
            'columns'      => [
                ['class' => 'yii\grid\SerialColumn'],
                'id:url',
                'is_frontend',
                'private',
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
