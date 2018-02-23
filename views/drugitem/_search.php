<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DrugitemSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="drugitem-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'ip_id') ?>

    <?= $form->field($model, 'ip_date') ?>

    <?= $form->field($model, 'drug_id') ?>

    <?= $form->field($model, 'in_amount') ?>

    <?= $form->field($model, 'in_unit') ?>

    <?php // echo $form->field($model, 'ip_exp') ?>

    <?php // echo $form->field($model, 'ip_status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
