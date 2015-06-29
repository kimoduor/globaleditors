<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tblorderassignment */

$this->title = 'New Order Assignment';
$this->params['breadcrumbs'][] = ['label' => 'Order Assignment', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tblorderassignment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
