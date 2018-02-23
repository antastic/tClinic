<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Service */

$this->title = 'แก้ไขการตรวจรักษา: '.$model->visit->pt->ptName.' '.$model->visit->pt->ptLname;
//$this->params['breadcrumbs'][] = ['label' => 'Services', 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->sv_id, 'url' => ['view', 'id' => $model->sv_id]];
//$this->params['breadcrumbs'][] = 'Update';
?>
<div class="service-update">
<div class="panel panel-info">
        <div class="panel-heading text-center"><?= Html::encode($this->title) ?></div>
        <div class="panel-body">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>
</div>