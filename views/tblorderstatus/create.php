<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tblorderstatus */

$this->title = 'Add Order Status';
$this->params['breadcrumbs'][] = ['label' => 'Order Status', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tblorderstatus-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
