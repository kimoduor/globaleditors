<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tbleditors */

$this->title = 'Update Editor: ' . ' ' . $model->editor_id;
$this->params['breadcrumbs'][] = ['label' => 'Editors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->editor_id, 'url' => ['view', 'id' => $model->editor_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbleditors-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
