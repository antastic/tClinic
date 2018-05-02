<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use app\models\Employee;

/* @var $this yii\web\View */
/* @var $model app\models\Service */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="service-form">
    
    <?php $form = ActiveForm::begin(); ?>

    <?php //echo $form->field($model, 'visit_id')->textInput() ?>
    
    <?= $form->field($model, 'svdx')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sv_details')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'emp_id')->widget(Select2::classname(),[
        'data'=>  ArrayHelper::map(Employee::find()->all(), 'emp_id', 'emp_name'),
        'language'=>'th',
        'options'=>['placeholder'=>'เจ้าหน้าที่'],
        'pluginOptions'=>['allowClear'=>TRUE],
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton('บันทึกข้อมูล', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
