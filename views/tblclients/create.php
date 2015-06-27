<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tblclients */

$this->title = 'Create Tblclients';
$this->params['breadcrumbs'][] = ['label' => 'Tblclients', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tblclients-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
