<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tblcountries';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tblcountries-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tblcountries', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'country_id',
            'country_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
