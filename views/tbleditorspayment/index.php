<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Editors Payment';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbleditorspayment-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('New Editors Payment', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'editor.editor_name',
            'order.order_title',
            'amount',
            'date_updated',
            // 'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
