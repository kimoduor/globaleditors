<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Tbleditors;
use app\models\Tblorders;
use kartik\datetime\DateTimePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Tbleditorspayment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbleditorspayment-form">

    <?php $form = ActiveForm::begin(); ?>
    <?php echo $form->field($model, 'editor_id')->dropDownList(ArrayHelper::map(Tbleditors::find()->all(), 'editor_id', 'editor_name'), ['prompt' => 'Select Editor']); ?>

    <?php echo $form->field($model, 'order_id')->dropDownList(ArrayHelper::map(Tblorders::find()->all(), 'order_id', 'title'), ['prompt' => 'Select Order']); ?>

    <?= $form->field($model, 'amount')->textInput() ?>

    <?php
    echo '<label>Date and Time Expected</label>';
    echo DateTimePicker::widget([
    'name' => 'date_updated',
    'value' => $model->date_updated,
    'options' => ['required' => true],
    'pluginOptions' => [
    'format' => 'yyyy-mm-dd hh:ii',
    'startDate' => '01-Mar-2014 12:00 AM',
    'todayHighlight' => true
    ]
    ]
    );
    ?>
    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
