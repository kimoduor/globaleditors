<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Tblcountries;
use app\models\Tbleducation;

use app\kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model app\models\Tbleditors */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbleditors-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'editor_name')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'country_id')->dropDownList(ArrayHelper::map(Tblcountries::find()->all(), 'country_id', 'country_name'), ['prompt' => 'Select country']); ?>

    <?php echo $form->field($model, 'education_level_id')->dropDownList(ArrayHelper::map(Tbleducation::find()->all(), 'education_level_id', 'level_name'), ['prompt' => 'Select country']); ?>

    <?= $form->field($model, 'education_institution')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'stars')->radioList(array('1' => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5')); ?>
    <?= $form->field($model, 'mobile')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'Comments')->textarea() ?>
    <?php
// or 'use kartikile\FileInput' if you have only installed yii2-widget-fileinput in isolation
// Usage with ActiveForm and model
    echo $form->field($model, 'avatar')->widget(FileInput::classname(), [
        'options' => ['accept' => 'image/*'],
    ]);

// With model & without ActiveForm
// Note for multiple file upload, the attribute name must be appended with 
// `[]` for PHP to be able to read an array of files
    echo '<label class="control-label">Add Attachments</label>';
    echo FileInput::widget([
        'model' => $model,
        'attribute' => 'attachment_1[]',
        'options' => ['multiple' => true]
    ]);

// Usage without a model
    echo '<label class="control-label">Upload Document</label>';
    echo FileInput::widget([
        'name' => 'attachment_3',
    ]);

// A disabled fileinput input
    echo '<label class="control-label">Select Attachment</label>';
    echo FileInput::widget([
        'name' => 'attachment_4',
        'disabled' => true
    ]);
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
