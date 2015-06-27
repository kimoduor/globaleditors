<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tblorders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tblorders-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tblorders', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'order_id',
            'title',
            'client_id',
            'country_id',
            'rubric:ntext',
             'Other_instructions:ntext',
            'files:ntext',
            'status_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
