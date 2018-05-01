<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Payment */

$this->title = $model->ic_id;
//$this->params['breadcrumbs'][] = ['label' => 'Payments', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="payment-view">

    <div class="panel panel-info">
        <div class="panel-heading text-center"><?= Html::encode($this->title) ?></div>
        <div class="panel-body">

            <?=
            DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'ic_id',
                    'ic_date',
                    'ic_summary',
                    'service.visit.emp.emp_name',
                    'service_id',
                ],
            ])
            ?>
            <?= Html::a('แก้ไข', ['update', 'id' => $model->ic_id], ['class' => 'btn btn-primary']) ?>
            <?=
            Html::a('ลบข้อมูล', ['delete', 'id' => $model->ic_id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'ยืนยันการลบข้อมูล?',
                    'method' => 'post',
                ],
            ])
            ?>
        </div>
    </div>
</div>