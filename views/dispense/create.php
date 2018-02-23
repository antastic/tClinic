<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Dispense */

$this->title = 'เพิ่มรายการยา';
//$this->params['breadcrumbs'][] = ['label' => 'Dispenses', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dispense-create">

    <div class="panel panel-info">
        <div class="panel-heading text-center"><?= Html::encode($this->title) ?></div>
        <div class="panel-body">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
