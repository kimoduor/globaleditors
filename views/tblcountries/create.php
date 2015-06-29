<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tblcountries */

$this->title = 'Create Country';
$this->params['breadcrumbs'][] = ['label' => 'Tblcountries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tblcountries-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
