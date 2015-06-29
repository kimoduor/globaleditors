<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Tblneworderpayment */

$this->title = 'Order Payment'.$model->neworderpayment_id;
$this->params['breadcrumbs'][] = ['label' => 'Tblneworderpayments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tblneworderpayment-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->neworderpayment_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->neworderpayment_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'order_id',
            'amount',
            'date_paid',
        ],
    ]) ?>

</div>
