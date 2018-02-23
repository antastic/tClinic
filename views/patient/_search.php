<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\patientSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="patient-search">

    <?php
    $form = ActiveForm::begin([
                'action' => ['index'],
                'method' => 'get',
    ]);
    ?>
  
    <?= $form->field($model, 'ptName') ?>

   

<?php ActiveForm::end(); ?>

</div>
