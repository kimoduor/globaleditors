<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Tbleducation */

$this->title = $model->education_level_id;
$this->params['breadcrumbs'][] = ['label' => 'Tbleducations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbleducation-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->education_level_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->education_level_id], [
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
            'education_level_id',
            'level_name',
        ],
    ]) ?>

</div>
