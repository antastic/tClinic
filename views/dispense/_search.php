<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DispenseSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dispense-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'service_id') ?>

  <?php ActiveForm::end(); ?>

</div>
