<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Tblorders;
use kartik\datetime\DateTimePicker;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\Tblneworderpayment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tblneworderpayment-form">

    <?php $form = ActiveForm::begin(); ?>
    
 <?php echo $form->field($model, 'order_id')->widget(Select2::classname(), ['data' => ArrayHelper::map(Tblorders::find()->all(), 'order_id', 'title'), 'options' => ['placeholder' => 'Select order'], 'pluginOptions' => ['allowClear' => true],]); ?>   
 <?= $form->field($model, 'amount')->textInput() ?>

    <?php
    
    echo '<label>Date Paid</label>';
    echo DateTimePicker::widget([
        'name' => 'date_paid',
        'value' => $model->date_paid,
        'options' => ['required' => true],
        'pluginOptions' => [
            'format' => 'yyyy-mm-dd hh:ii',
            'startDate' => '01-Mar-2014 12:00 AM',
            'todayHighlight' => true
        ]
            ]
    );
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
