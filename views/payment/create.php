<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Payment */

$this->title = 'เพิ่มรายการค่าใช้จ่าย';
//$this->params['breadcrumbs'][] = ['label' => 'Payments', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="payment-create">
    
<div class="panel panel-info">
        <div class="panel-heading text-center"><?= Html::encode($this->title) ?></div>
        <div class="panel-body">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
