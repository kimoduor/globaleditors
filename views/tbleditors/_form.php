<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Tblcountries;
use app\models\Tbleducation;
use kartik\file\FileInput;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\Tbleditors */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbleditors-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'editor_name')->textInput(['maxlength' => true]) ?>
    <?php echo $form->field($model, 'country_id')->widget(Select2::classname(), ['data' => ArrayHelper::map(Tblcountries::find()->all(), 'country_id', 'country_name'), 'options' => ['placeholder' => 'Select country'], 'pluginOptions' => ['allowClear' => true],]); ?>
    <?php echo $form->field($model, 'education_level_id')->widget(Select2::classname(), ['data' => ArrayHelper::map(Tbleducation::find()->all(), 'education_level_id', 'level_name'), 'options' => ['placeholder' => 'Select Education Certification'], 'pluginOptions' => ['allowClear' => true],]); ?>
    <?= $form->field($model, 'education_institution')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'stars')->radioList(array('1' => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5')); ?>
    <?= $form->field($model, 'mobile')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'Comments')->textarea() ?>
    <?php
    echo $form->field($model, 'photo')->widget(FileInput::classname(), [
        'options' => ['accept' => 'image/*'],
    ]);
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
