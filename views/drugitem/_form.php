<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Drugitem */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="drugitem-form">

    <?php $form = ActiveForm::begin(); ?>
<?php
if(!$model->isNewRecord){
    echo $form->field($model, 'ip_date')->textInput();
}
    ?>

    <?php //echo $form->field($model, 'drug_id')->textInput(); ?>

    <?= $form->field($model, 'in_amount')->textInput() ?>

    <?= $form->field($model, 'in_unit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ip_exp')->widget(DatePicker::classname(), [
        'options' => ['placeholder' => 'วันหมดอายุ'],
        'readonly' => TRUE,
        'language' => 'th',
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
        ]
    ]);
    ?>

    

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
