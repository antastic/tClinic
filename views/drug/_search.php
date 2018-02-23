<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DrugSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="drug-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>


    <?= $form->field($model, 'drugname') ?>

    <?php ActiveForm::end(); ?>

</div>
