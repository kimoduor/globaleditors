<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Tblcountries;
use app\models\Tblclients;
use app\models\Tblorderstatus;
use kartik\file\FileInput;
use kartik\datetime\DateTimePicker;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\Tblorders */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tblorders-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
    <?php echo $form->field($model, 'client_id')->widget(Select2::classname(), ['data' => ArrayHelper::map(Tblclients::find()->all(), 'client_id', 'Names'), 'options' => ['placeholder' => 'Select client'], 'pluginOptions' => ['allowClear' => true],]); ?>
    <?php echo $form->field($model, 'country_id')->widget(Select2::classname(), ['data' => ArrayHelper::map(Tblcountries::find()->all(), 'country_id', 'country_name'), 'options' => ['placeholder' => 'Select country'], 'pluginOptions' => ['allowClear' => true],]); ?>


    <?= $form->field($model, 'rubric')->textarea(['rows' => 3]) ?>

    <?= $form->field($model, 'Other_instructions')->textarea(['rows' => 2]) ?>

    <?php
    echo '<label class="control-label">Add Attachments</label>';
    echo $form->field($model, 'files')->widget(FileInput::classname(), [
        'options' => ['multiple' => true],
    ]);
    ?>

    <?php echo $form->field($model, 'status_id')->dropDownList(ArrayHelper::map(Tblorderstatus::find()->all(), 'status_id', 'status'), ['prompt' => 'Select Status']); ?>
    <?php
    
    echo '<label>Date and Time Ordered</label>';
    echo DateTimePicker::widget([
        'name' => 'date_ordered',
        'value' => $model->date_ordered,
        'options' => ['required' => true],
        'pluginOptions' => [
            'format' => 'yyyy-mm-dd hh:ii',
            'startDate' => '01-Mar-2014 12:00 AM',
            'todayHighlight' => true
        ]
            ]
    );
    ?>
    <?php
    echo '<label>Date and Time Expected</label>';
    echo DateTimePicker::widget([
        'name' => 'date_expected',
        'value' => $model->date_expected,
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
