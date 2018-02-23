<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Service */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="service-form">
    <div class="row ">

        <div class="col-sm-3"><?= 'ชื่อ นามสกุลผู้รับบริการ ' . $model->visit->pt->ptName . ' ' . $model->visit->pt->ptLname ?></div>
           <div class="col-sm-3"><?= 'วันที่มารับบริการ ' . $model->visit->datetimesv ?></div>
       <div class="col-sm-3"><?= 'น้ำหนัก ' . $model->visit->visit_weigth ?></div>
    <div class="col-sm-3"><?= 'ส่วนสูง ' . $model->visit->visit_higth ?></div>
    <div class="col-sm-3"><?= 'ความดัน ' . $model->visit->visit_bpup.'/'.$model->visit->visit_bpdown ?></div>
      <div class="col-sm-3"><?= 'สัญญาชีพ' . $model->visit->visit_vts ?></div>
    <div class="col-sm-3"><?= 'อาการป่วย ' . $model->visit->visit_cc ?></div>
    <div class="col-sm-3"><?= 'ผู้ชักประวัติ ' . $model->visit->emp->emp_name.' '.$model->visit->emp->emp_lname ?></div>
    
    </div>
<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'svdx')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'sv_details')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'visit_id')->textInput() ?>

<?= $form->field($model, 'emp_id')->textInput() ?>

<div class="form-group">
    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
</div>

<?php ActiveForm::end(); ?>

</div>
