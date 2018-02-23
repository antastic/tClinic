<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;
use kartik\widgets\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Patient */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="patient-form">

    <?php
    $form = ActiveForm::begin([
                'enableAjaxValidation' => true,
               'validationUrl' => ['validate'],
    ]);
    ?>

    <?= $form->field($model, 'ptName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ptLname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ptAddress')->textarea(['rows' => 3]) ?>

    <?= $form->field($model, 'pt_phone')->widget(MaskedInput::className(), [
        'mask' => '999-9999-999'
    ])
     ?>

    <?= $form->field($model, 'pt_dad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pt_mom')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pt_blood')->dropDownList([ 'A' => 'A', 'B' => 'B', 'AB' => 'AB', 'O' => 'O',], ['prompt' => '']) ?>

    <?= $form->field($model, 'pt_bloodtype')->dropDownList([ 'Rh+ve' => 'Rh+ve', 'Rh-ve' => 'Rh-ve',], ['prompt' => '']) ?>

    <?= $form->field($model, 'pt_drug')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pt_dx')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pt_sex')->dropDownList([ 'ชาย' => 'ชาย', 'หญิง' => 'หญิง',], ['prompt' => '']) ?>

    <?=
    $form->field($model, 'pt_bd')->widget(DatePicker::classname(), [
        'options' => ['placeholder' => 'วันหมดอายุ'],
        'readonly' => TRUE,
        'language' => 'th',
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
        ]
    ]);
    ?>


    <?=
    $form->field($model, 'pt_cid')->widget(MaskedInput::className(), [
        'mask' => '9-9999-99999-99-9'
    ])
    ?>

    <?= $form->field($model, 'pt_datail')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'เพิ่มข้อมูล' : 'แก้ไขข้อมูล', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
