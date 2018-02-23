<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Expenses */

$this->title = 'แก้ไขข้อมูลค่าใช้จ่าย ' . $model->Expenses;
//$this->params['breadcrumbs'][] = ['label' => 'Expenses', 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->ex_id, 'url' => ['view', 'id' => $model->ex_id]];
//$this->params['breadcrumbs'][] = 'Update';
?>
<div class="expenses-update">

    <div class="panel panel-info">
        <div class="panel-heading text-center"><?= Html::encode($this->title) ?></div>
        <div class="panel-body"

             <?=
             $this->render('_form', [
                 'model' => $model,
             ])
             ?>

    </div>
</div>
</div>