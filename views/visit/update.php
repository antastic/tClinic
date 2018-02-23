<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Visit */

$this->title = 'แก้ไขข้อมูลการตรวจเบื้องต้น: '.$model->pt->ptName.' '.$model->pt->ptLname;
//$this->params['breadcrumbs'][] = ['label' => 'Visits', 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
//$this->params['breadcrumbs'][] = 'Update';
?>
<div class="visit-update">

   <div class="panel panel-info">
        <div class="panel-heading text-center"><?= Html::encode($this->title) ?></div>
        <div class="panel-body">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
   </div>
</div>