<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Tbleditorspayment */

$this->title = $model->editorpayment_id;
$this->params['breadcrumbs'][] = ['label' => 'Tbleditorspayments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbleditorspayment-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->editorpayment_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->editorpayment_id], [
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
            'editorpayment_id',
            'editor_id',
            'order_id',
            'amount',
            'date_updated',
            'status',
        ],
    ]) ?>

</div>
