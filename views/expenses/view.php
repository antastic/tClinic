<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Expenses */

$this->title = $model->Expenses;
//$this->params['breadcrumbs'][] = ['label' => 'Expenses', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="expenses-view">

    <div class="panel panel-info">
        <div class="panel-heading text-center"><?= Html::encode($this->title) ?></div>
        <div class="panel-body">

             <?=
             DetailView::widget([
                 'model' => $model,
                 'attributes' => [
                     'ex_id',
                     'Expenses',
                 ],
             ])
             ?>

             <?= Html::a('แก้ไข', ['update', 'id' => $model->ex_id], ['class' => 'btn btn-primary']) ?>
             <?=
             Html::a('ลบ', ['delete', 'id' => $model->ex_id], [
                 'class' => 'btn btn-danger',
                 'data' => [
                     'confirm' => 'ยืนยันการลบข้อมูล',
                     'method' => 'post',
                 ],
             ])
             ?>
    
</div>
</div>
</div>