<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EmployeeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ข้อมูลเจ้าหน้าที่';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employee-index">
    <div class="panel panel-info">
        <div class="panel-heading text-center"><?= Html::encode($this->title) ?></div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-3"> <?= $this->render('_search', ['model' => $searchModel]); ?></div>
                <div class="col-md-3 col-md-offset-6 text-right"><?= Html::a('เพิ่มข้อมูลเจ้าหน้าที่', ['create'], ['class' => 'btn btn-success']) ?></div>

            </div>
            <?=
            GridView::widget([
                'dataProvider' => $dataProvider,
                //'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    //'emp_id',
                    'emp_name',
                    'emp_lname',
                    //'emp_uname',
                    //'emp_pwd',
                    'em_licenlse',
                    'emp_type',
                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]);
            ?>
        </div>
    </div>
</div>
