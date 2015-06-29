<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tbleducation */

$this->title = 'Update Education Certification: ' . ' ' . $model->education_level_id;
$this->params['breadcrumbs'][] = ['label' => 'Education Certification', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->education_level_id, 'url' => ['view', 'id' => $model->education_level_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbleducation-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
