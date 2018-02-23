<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Patient */

$this->title = 'แก้ไขข้อมูลผู้รับบริการ คุณ: ' . $model->ptName.' '.$model->ptLname;
//$this->params['breadcrumbs'][] = ['label' => 'Patients', 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->pt_id, 'url' => ['view', 'id' => $model->pt_id]];
//$this->params['breadcrumbs'][] = 'Update';
?>
<div class="patient-update">
<div class="panel panel-info">
        <div class="panel-heading text-center"><?= Html::encode($this->title) ?></div>
        <div class="panel-body">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>
</div>
