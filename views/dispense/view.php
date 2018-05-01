<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Dispense */

$this->title = 'ผู้รับบริการ'.$model->service->visit->pt->ptName.' '.$model->service->visit->pt->ptLname.' วันที่มา '.$model->service->visit->datetimesv;
//$this->params['breadcrumbs'][] = ['label' => 'Dispenses', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dispense-view">

   <div class="panel panel-info">
        <div class="panel-heading text-center"><?= Html::encode($this->title) ?></div>
        <div class="panel-body">
        
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'vsd_id',
            'drug_amount',
            'drug_prices',
            'drug.drugname',
            'service.visit.emp.emp_name',
            'vtd_unit',
            'service_id',
            'expenses.Expenses',
        ],
    ]) ?>
<?= Html::a('แก้ไข', ['update', 'id' => $model->vsd_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('ลบ', ['delete', 'id' => $model->vsd_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'ยืนยันการลบข้อมูล',
                'method' => 'post',
            ],
        ]) ?>
   </div>
   </div>

</div>
