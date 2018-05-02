<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Dispense */

$this->title = 'ผู้รับบริการ' . $model->service->visit->pt->ptName . ' ' . $model->service->visit->pt->ptLname . ' วันที่มา ' . $model->service->visit->datetimesv;
//$this->params['breadcrumbs'][] = ['label' => 'Dispenses', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dispense-view">

    <div class="panel panel-info">
        <div class="panel-heading text-center"><?= Html::encode($this->title) ?></div>
        <div class="panel-body">

            <?=
            DetailView::widget([
                'model' => $model,
                'attributes' => [
                    //'vsd_id',
                    'service_id',
                    'drug.drugname',
                    'drug_amount',
                    'vtd_unit',
                    'drug_prices',
                    'expenses.Expenses',
                    'service.visit.emp.emp_name',
                ],
            ])
            ?>
            <?= Html::a('เพิ่มรายการ', ['createid', 'id' => $model->service_id], ['class' => 'btn btn-primary']) ?>
<?= Html::a('ค่าบริการ', ['expense','id' => $model->service_id], ['class' => 'btn btn-danger']) ?>
        </div>
    </div>

</div>
