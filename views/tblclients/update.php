<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tblclients */

$this->title = 'Update Tblclients: ' . ' ' . $model->client_id;
$this->params['breadcrumbs'][] = ['label' => 'Tblclients', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->client_id, 'url' => ['view', 'id' => $model->client_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tblclients-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
