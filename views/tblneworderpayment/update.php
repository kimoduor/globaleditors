<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tblneworderpayment */

$this->title = 'Update Order Payment: ' . ' ' . $model->neworderpayment_id;
$this->params['breadcrumbs'][] = ['label' => 'Order Payment', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->neworderpayment_id, 'url' => ['view', 'id' => $model->neworderpayment_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tblneworderpayment-update">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php
      
            //var_dump($model);
        
    ?>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
