<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Appointment */

$this->title = 'แก้ไขข้อมูลการนัด ของคุณ'.$model->service->visit->pt->ptName.' '.$model->service->visit->pt->ptLname;
//$this->params['breadcrumbs'][] = ['label' => 'Appointments', 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->apps_id, 'url' => ['view', 'id' => $model->apps_id]];
//$this->params['breadcrumbs'][] = 'Update';
?>
<div class="appointment-update">

      <div class="panel panel-info">
        <div class="panel-heading text-center"><?= Html::encode($this->title) ?></div>
        <div class="panel-body">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
      </div>
</div>