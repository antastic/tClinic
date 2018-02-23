<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Employee */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employee-form">

    <?php
    $form = ActiveForm::begin([
                'enableAjaxValidation' => true,
                'validationUrl' => ['validate'],
    ]);
    ?>

    <?= $form->field($model, 'emp_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emp_lname')->textInput(['maxlength' => true]) ?>

    <?php
    if ($model->isNewRecord) {
        
        echo $form->field($model, 'emp_uname')->textInput(['maxlength' => true]);
        
    }
    ?>

    <?= $form->field($model, 'emp_pwd')->passwordInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'em_licenlse')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emp_type')->dropDownList([ 'เจ้าหน้าที่' => 'เจ้าหน้าที่', 'ผู้ตรวจรักษา' => 'ผู้ตรวจรักษา',], ['prompt' => '']) ?>

    <div class="form-group text-center">
        <?= Html::submitButton($model->isNewRecord ? 'เพิ่มข้อมูล' : 'แก้ไขข้อมูล', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
