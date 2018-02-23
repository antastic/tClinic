<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Drug */

$this->title = 'เพิ่มการตรวจเบื้องต้น';
//$this->params['breadcrumbs'][] = ['label' => 'Drugs', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="drug-create">

   <div class="panel panel-info">
        <div class="panel-heading text-center"><?= Html::encode($this->title) ?></div>
        <div class="panel-body">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
        </div>
</div>
</div>
