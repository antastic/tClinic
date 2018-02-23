<?php

use yii\helpers\Html;
//use Yii;

/* @var $this yii\web\View */
/* @var $model app\models\Patient */

$this->title = 'ข้อมูลผู้รับบริการ';
?>
<div class="patient-create">
    <div class="panel panel-info">
        <div class="panel-heading text-center"><?= Html::encode($this->title) ?></div>
        <div class="panel-body">
                   <?=
            $this->render('_form', [
                'model' => $model,
            ])
            ?>

        </div>
    </div>
</div>