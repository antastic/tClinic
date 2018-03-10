<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Visit */

$this->title = 'การตรวจรักษาเบื้องต้น';
//$this->params['breadcrumbs'][] = ['label' => 'Visits', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="visit-create">

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