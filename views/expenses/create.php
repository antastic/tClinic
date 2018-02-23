<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Expenses */

$this->title = 'เพิ่มประเภมค่าใช้จ่าย';
//$this->params['breadcrumbs'][] = ['label' => 'Expenses', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="expenses-create">

     <div class="panel panel-info">
        <div class="panel-heading text-center"><?= Html::encode($this->title) ?></div>
        <div class="panel-body">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
