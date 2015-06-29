<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tbleditorspayment */

$this->title = 'New Editors Payment';
$this->params['breadcrumbs'][] = ['label' => 'Editors Payment', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbleditorspayment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
