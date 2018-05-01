<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Drug */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="drug-form">

    <?php  $form = ActiveForm::begin([
                'enableAjaxValidation' => true,
                'validationUrl' => ['validate'],
    ]);
    ?>

    <?= $form->field($model, 'drugname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'used')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('บันทึกข้อมูล', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
