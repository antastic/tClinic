<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Appointment */

$this->title = 'เพิ่มการนัด';
//$this->params['breadcrumbs'][] = ['label' => 'Appointments', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="appointment-create">

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