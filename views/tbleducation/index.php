<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tbleducations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbleducation-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tbleducation', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'education_level_id',
            'level_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
