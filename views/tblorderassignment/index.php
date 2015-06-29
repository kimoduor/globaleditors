<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Order Assignment';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tblorderassignment-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('New Order Assignment', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'order.title',
            'editor.editor_name',
            'dead_line',
            'amount',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
