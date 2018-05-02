<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Drug;
use kartik\widgets\Select2;
use app\models\Expenses;
use yii\helpers\ArrayHelper;
use app\models\Employee;

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

    <?= $form->field($model, 'emp_id')->widget(Select2::classname(),[
        'data'=>  ArrayHelper::map(Employee::find()->all(), 'emp_id', 'emp_name'),
        'language'=>'th',
        'options'=>['placeholder'=>'เจ้าหน้าที่'],
        'pluginOptions'=>['allowClear'=>TRUE],
    ]); ?>

    <?php //echo $form->field($model, 'service_id')->textInput() ?>

    <?= $form->field($model, 'Expenses_id')->widget(Select2::classname(),[
        'data'=>  ArrayHelper::map(Expenses::find()->all(), 'ex_id', 'Expenses'),
        'language'=>'th',
        'options'=>['placeholder'=>'ประเภทค่าใช้จ่าย'],
        'pluginOptions'=>['allowClear'=>TRUE],
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton('บันทึก', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
