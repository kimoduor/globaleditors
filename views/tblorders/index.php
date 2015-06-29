<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Orders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tblorders-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Add Order', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'title',
            'client.Names',
            'country.country_name',
           // 'rubric:ntext',
            // 'Other_instructions:ntext',
            'files:ntext',
            'status.status',
            'date_ordered',
            'date_expected',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
