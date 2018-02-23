<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Payment */

$this->title = 'แก้ไขข้อมูลค่าใช้จ่าย ของคุณ' . $model->service->visit->pt->ptName . ' ' . $model->service->visit->pt->ptLname;
//$this->params['breadcrumbs'][] = ['label' => 'Payments', 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->ic_id, 'url' => ['view', 'id' => $model->ic_id]];
//$this->params['breadcrumbs'][] = 'Update';
?>
<div class="payment-update">


    <div class="panel panel-info">
        <div class="panel-heading text-center"><?= Html::encode($this->title) ?></div>
        <div class="panel-body">

            <?=
            $this->render('_form', [
                'model' => $model,
            ])
            ?>

        </div>
    </div>
</div>