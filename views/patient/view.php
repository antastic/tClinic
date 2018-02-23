<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Patient */

$this->title = 'ข้อมูลผู้รับบริการ คุณ: ' . $model->ptName.' '.$model->ptLname;;
//$this->params['breadcrumbs'][] = ['label' => 'Patients', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="patient-view">

    <div class="panel panel-info">
        <div class="panel-heading text-center"><?= Html::encode($this->title) ?></div>
        <div class="panel-body">

  
   
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'pt_id',
            'ptName',
            'ptLname',
            'ptAddress:ntext',
            'pt_phone',
            'pt_dad',
            'pt_mom',
            'pt_blood',
            'pt_bloodtype',
            'pt_drug',
            'pt_dx',
            'pt_sex',
            'pt_bd',
            'pt_cid',
            'pt_datail:ntext',
        ],
    ]) ?>
<?= Html::a('แก้ไขข้อมูล', ['update', 'id' => $model->pt_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('ลบ', ['delete', 'id' => $model->pt_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'ยืนยันการลบข้อมูล',
                'method' => 'post',
            ],
        ]) ?>
</div>
