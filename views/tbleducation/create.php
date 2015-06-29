<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tbleducation */

$this->title = 'Add Education Certifications';
$this->params['breadcrumbs'][] = ['label' => 'Education Certification', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbleducation-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
