<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Order Payment';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tblneworderpayment-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Add Order Payment', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'order.title',
            'amount',
            'date_paid',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
