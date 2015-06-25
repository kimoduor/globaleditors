<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Tbleditors */

$this->title = $model->editor_id;
$this->params['breadcrumbs'][] = ['label' => 'Tbleditors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbleditors-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->editor_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->editor_id], [
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
            'editor_id',
            'editor_name',
            'country_id',
            'education_level_id',
            'education_institution',
            'stars',
            'mobile',
            'email:email',
        ],
    ]) ?>

</div>
