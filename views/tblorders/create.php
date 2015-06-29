<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tblorders */

$this->title = 'Add Order';
$this->params['breadcrumbs'][] = ['label' => 'Order', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tblorders-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
