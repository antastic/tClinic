<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Employee */

$this->title = $model->emp_name.' '.$model->emp_lname;
//$this->params['breadcrumbs'][] = ['label' => 'Employees', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employee-view">

    <div class="panel panel-info">
        <div class="panel-heading text-center"><?= Html::encode($this->title) ?></div>
        <div class="panel-body">
       
   

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'emp_id',
            'emp_name',
            'emp_lname',
            'emp_uname',
           // 'emp_pwd',
            'em_licenlse',
            'emp_type',
        ],
    ]) ?>
 <?= Html::a('แก้ไข', ['update', 'id' => $model->emp_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('ลบข้อมูล', ['delete', 'id' => $model->emp_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'ยืนยันการลบข้อมูล',
                'method' => 'post',
            ],
        ]) ?>
</div>
    </div>
</div>
