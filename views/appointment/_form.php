<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\DatePicker;
use yii\helpers\ArrayHelper;
use kartik\widgets\Select2;
use app\models\Employee;

/* @var $this yii\web\View */
/* @var $model app\models\Appointment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="appointment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?=
    $form->field($model, 'apps_date')->widget(DatePicker::classname(), [
        'options' => ['placeholder' => 'เลือกวันที่นัด'],
        'readonly' => TRUE,
        'language' => 'th',
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
        ]
    ]);
    ?>

    <?= $form->field($model, 'apps_details')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'emp_id')->widget(Select2::classname(),[
        'data'=>  ArrayHelper::map(Employee::find()->all(), 'emp_id', 'emp_name'),
        'language'=>'th',
        'options'=>['placeholder'=>'เจ้าหน้าที่'],
        'pluginOptions'=>['allowClear'=>TRUE],
    ]); ?>

    <?php //echo $form->field($model, 'service_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('บันทึก', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
