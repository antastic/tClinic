<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Drug */

$this->title = 'แก้ไขข้อมูลยา: '.$model->drugname;
//$this->params['breadcrumbs'][] = ['label' => 'Drugs', 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->drug_id, 'url' => ['view', 'id' => $model->drug_id]];
//$this->params['breadcrumbs'][] = 'Update';
?>
<div class="drug-update">

     <div class="panel panel-info">
        <div class="panel-heading text-center"><?= Html::encode($this->title) ?></div>
        <div class="panel-body">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
     </div></div>