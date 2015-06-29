<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tblorderstatus */

$this->title = 'Update Order Status: ' . ' ' . $model->status_id;
$this->params['breadcrumbs'][] = ['label' => 'Order Status', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->status_id, 'url' => ['view', 'id' => $model->status_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tblorderstatus-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
