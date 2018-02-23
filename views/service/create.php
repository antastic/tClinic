<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Service */

$this->title = 'เพิ่มการตรวจรักษา';
//$this->params['breadcrumbs'][] = ['label' => 'Services', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="service-create">

     <div class="panel panel-info">
        <div class="panel-heading text-center"><?= Html::encode($this->title) ?></div>
        <div class="panel-body">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
