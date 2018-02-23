<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Drugitem */

$this->title = $model->drug->drugname;
//$this->params['breadcrumbs'][] = ['label' => 'Drugitems', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="drugitem-view">
    <div class="panel panel-info">
        <div class="panel-heading text-center"><?= Html::encode($this->title) ?></div>
        <div class="panel-body">

            <?=
            DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'ip_id',
                    'ip_date',
                    'drug.drugname',
                    'in_amount',
                    'in_unit',
                    'ip_exp',
                    'ip_status',
                ],
            ])
            ?>
            <?= Html::a('แก้ไข', ['update', 'id' => $model->ip_id], ['class' => 'btn btn-primary']) ?>
            <?=
            Html::a('ลบ', ['delete', 'id' => $model->ip_id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'ยืนยันการลบ?',
                    'method' => 'post',
                ],
            ])
            ?>
        </div>
    </div>
</div>
