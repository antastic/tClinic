<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Dispense */

$this->title = 'แก้ไข้อข้อมูลยา ผู้รับบริการ'.$model->service->visit->pt->ptName.' '.$model->service->visit->pt->ptLname.' วันที่มา '.$model->service->visit->datetimesv;
//$this->params['breadcrumbs'][] = ['label' => 'Dispenses', 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->vsd_id, 'url' => ['view', 'id' => $model->vsd_id]];
//$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dispense-update">

     <div class="panel panel-info">
        <div class="panel-heading text-center"><?= Html::encode($this->title) ?></div>
        <div class="panel-body">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
     </div>
     </div>
