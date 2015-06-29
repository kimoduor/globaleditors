<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Tblorders;
use kartik\datetime\DateTimePicker;
use app\models\Tbleditors;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\Tblorderassignment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tblorderassignment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php echo $form->field($model, 'order_id')->widget(Select2::classname(), ['data' => ArrayHelper::map(Tblorders::find()->all(), 'order_id', 'title'),'options' => ['placeholder' => 'Select one'],'pluginOptions' => ['allowClear' => true], ]); ?>
    <?php echo $form->field($model, 'editor_id')->widget(Select2::classname(), ['data' => ArrayHelper::map(Tbleditors::find()->all(), 'editor_id', 'editor_name'),'options' => ['placeholder' => 'Select one'],'pluginOptions' => ['allowClear' => true], ]); ?>
    <?php
    echo '<label>Deadline</label>';
    echo DateTimePicker::widget([
        'name' => 'dead_line',
        'value'=>$model->dead_line,
        'options' => ['required' => true],
        'pluginOptions' => [
            'format' => 'yyyy-mm-dd hh:ii',
            'startDate' => '01-Mar-2014 12:00 AM',
            'todayHighlight' => true
        ]
            ]
    );
    ?>
<?= $form->field($model, 'amount')->textInput() ?>

    <div class="form-group">
<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>

</div>
