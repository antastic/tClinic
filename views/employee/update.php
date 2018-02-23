<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Employee */

$this->title = 'แก้ไขข้อมูลเจ้าหน้าที่ คุณ: ' . $model->emp_name.' '.$model->emp_lname;
//$this->params['breadcrumbs'][] = ['label' => 'Employees', 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->emp_id, 'url' => ['view', 'id' => $model->emp_id]];
//$this->params['breadcrumbs'][] = 'Update';
?>
<div class="employee-update">
    <div class="panel panel-info">
        <div class="panel-heading text-center"><?= Html::encode($this->title) ?></div>
        <div class="panel-body">
    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
    </div>
</div>
