<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Appointment */

$this->title = 'การนัด ของคุณ'.$model->service->visit->pt->ptName.' '.$model->service->visit->pt->ptLname;
//$this->params['breadcrumbs'][] = ['label' => 'Appointments', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="appointment-view">

    <div class="panel panel-info">
        <div class="panel-heading text-center"><?= Html::encode($this->title) ?></div>
        <div class="panel-body">
        
  <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'apps_id',
            'apps_date',
            'apps_details:ntext',
            'emp_id',
            'service_id',
        ],
    ]) ?>
<?= Html::a('แก้ไข', ['update', 'id' => $model->apps_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('ลบข้อมูล', ['delete', 'id' => $model->apps_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'ยืนยันการลบข้อมูล?',
                'method' => 'post',
            ],
        ]) ?>
        </div>
    </div>
</div>
