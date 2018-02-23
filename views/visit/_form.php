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

    <?= $form->field($model, 'visit_vts')->textInput() ?>

    <?= $form->field($model, 'visit_bpup')->textInput() ?>

    <?= $form->field($model, 'visit_bpdown')->textInput() ?>

    <?= $form->field($model, 'visit_weigth')->textInput() ?>

    <?= $form->field($model, 'visit_higth')->textInput() ?>

    <?= $form->field($model, 'visit_cc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emp_id')->textInput() ?>

    <?= $form->field($model, 'pt_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
