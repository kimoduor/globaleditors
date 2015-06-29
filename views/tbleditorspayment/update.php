<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tbleditorspayment */

$this->title = 'Update Tbleditorspayment: ' . ' ' . $model->editorpayment_id;
$this->params['breadcrumbs'][] = ['label' => 'Tbleditorspayments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->editorpayment_id, 'url' => ['view', 'id' => $model->editorpayment_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbleditorspayment-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
