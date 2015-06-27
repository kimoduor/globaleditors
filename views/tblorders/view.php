<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Tblorders */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Tblorders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tblorders-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->order_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->order_id], [
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
            'title',
            'client_id',
            'country_id',
            'rubric:ntext',
            'Other_instructions:ntext',
            'files:ntext',
            'status_id',
        ],
    ]) ?>

</div>
