<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Drugitem */

$this->title = 'เพิ่มการรับยา';
//$this->params['breadcrumbs'][] = ['label' => 'Drugitems', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="drugitem-create">

   <div class="panel panel-info">
        <div class="panel-heading text-center"><?= Html::encode($this->title) ?></div>
        <div class="panel-body">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
   </div>
</div>
