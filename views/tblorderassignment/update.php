<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tblorderassignment */

$this->title = 'Update Order Assignment: ' . ' ' . $model->assignment_id;
$this->params['breadcrumbs'][] = ['label' => 'Order Assignment', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->assignment_id, 'url' => ['view', 'id' => $model->assignment_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tblorderassignment-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
