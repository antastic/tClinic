<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Visit */

$this->title = $model->pt->ptName.' '.$model->pt->ptName;
//$this->params['breadcrumbs'][] = ['label' => 'Visits', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="visit-view">

    <div class="panel panel-info">
        <div class="panel-heading text-center"><?= Html::encode($this->title) ?></div>
        <div class="panel-body">

            <?=
            DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'id',
                    'datetimesv',
                    'visit_vts',
                    'visit_bpup',
                    'visit_bpdown',
                    'visit_weigth',
                    'visit_higth',
                    'visit_cc',
                    'emp_id',
                  // 'ptname',
                ],
            ])
            ?>

            <?= Html::a('แก้ไข', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?=
            Html::a('ลบข้อมูล', ['delete', 'id' => $model->id], [
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