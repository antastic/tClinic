<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Drug */

$this->title = $model->drugname;
//$this->params['breadcrumbs'][] = ['label' => 'Drugs', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="drug-view">
 <div class="panel panel-info">
        <div class="panel-heading text-center"><?= Html::encode($this->title) ?></div>
        <div class="panel-body">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'drug_id',
            'drugname',
            'used',
        ],
    ]) ?>

        <?= Html::a('แก้ไข', ['update', 'id' => $model->drug_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('ลบข้อมูล', ['delete', 'id' => $model->drug_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'ยืนยันการลบข้อมูล',
                'method' => 'post',
            ],
        ]) ?>
</div>
