<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Service */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="service-form">
    
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'visit_id')->textInput() ?>
    
    <?= $form->field($model, 'svdx')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sv_details')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'emp_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('บันทึกข้อมูล', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
