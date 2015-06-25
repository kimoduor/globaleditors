<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tbleditors */

$this->title = 'Create Editors';
$this->params['breadcrumbs'][] = ['label' => 'Tbleditors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbleditors-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
