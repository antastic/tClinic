<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Visit */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="visit-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php //echo $form->field($model, 'datetimesv')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pt_id')->textInput() ?>
    
    <div class="row">
        <div class=" col-xs-4 col-sm-4 col-md-4">
             <?= $form->field($model, 'visit_vts')->textInput() ?>
        </div>
        <div class=" col-xs-4 col-sm-4 col-md-4">
             <?= $form->field($model, 'visit_bpup')->textInput() ?>
        </div>
        <div class=" col-xs-4 col-sm-4 col-md-4">
             <?= $form->field($model, 'visit_bpdown')->textInput() ?>
        </div>
    </div>
 <div class="row">
        <div class=" col-xs-4 col-sm-4 col-md-4">
             <?= $form->field($model, 'visit_weigth')->textInput() ?>
        </div>
        <div class=" col-xs-4 col-sm-4 col-md-4">
             <?= $form->field($model, 'visit_higth')->textInput() ?>
        </div>
        <div class=" col-xs-4 col-sm-4 col-md-4">
             <?= $form->field($model, 'visit_cc')->textarea(['row' => 3]) ?>
        </div>
    </div>

  
    <?= $form->field($model, 'emp_id')->textInput() ?>


    <div class="form-group">
        <?= Html::submitButton('บันทึก', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
