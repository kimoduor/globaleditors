<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tblneworderpayment */

$this->title = 'Add Order Payment';
$this->params['breadcrumbs'][] = ['label' => 'Order Payment', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tblneworderpayment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
