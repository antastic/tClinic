<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Drug;

use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Dispense */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dispense-form">

    <?php $form = ActiveForm::begin(); ?>
    
<?= $form->field($model, 'drug_id')->dropDownList(ArrayHelper::map(Drug::find()->all(),'drug_id','drugname')) ?>
    
    <?= $form->field($model, 'drug_amount')->textInput() ?>
    
<?= $form->field($model, 'vtd_unit')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'drug_prices')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emp_id')->textInput() ?>

    <?= $form->field($model, 'service_id')->textInput() ?>

    <?= $form->field($model, 'Expenses_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('บันทึก', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
