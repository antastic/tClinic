<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Service */

$this->title = $model->sv_id;
//$this->params['breadcrumbs'][] = ['label' => 'Services', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="service-view">

   <div class="panel panel-info">
        <div class="panel-heading text-center"><?= Html::encode($this->title) ?></div>
        <div class="panel-body">

        <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'sv_id',
            'svdx',
            'sv_details',
            'visit_id',
            'emp_id',
        ],
    ]) ?>

        <?= Html::a('แก้ไข', ['update', 'id' => $model->sv_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('ลบ', ['delete', 'id' => $model->sv_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'ยืนยันการลบข้อมูล',
                'method' => 'post',
            ],
        ]) ?>
  
</div>
   </div>
</div>
