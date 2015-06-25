<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tblcountries */

$this->title = 'Update Tblcountries: ' . ' ' . $model->country_id;
$this->params['breadcrumbs'][] = ['label' => 'Tblcountries', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->country_id, 'url' => ['view', 'id' => $model->country_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tblcountries-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
