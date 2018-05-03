<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ServiceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ตรวจรักษา';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="service-index">
    <?php Pjax::begin(); ?>

    <div class="panel panel-info">
        <div class="panel-heading text-center"><?= Html::encode($this->title) ?></div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-3"> <?= $this->render('_search', ['model' => $searchModel]); ?></div>
                <div class="col-md-3 col-md-offset-6 text-right"><?= Html::a('เพิ่มข้อมูลการตรวจรักษา', ['create'], ['class' => 'btn btn-success']) ?></div>

            </div>
            <?=
            GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    //'sv_id',
                    'visit.pt.ptName',
                    'svdx',
                    'sv_details',
                    'visit.emp.emp_name',
                    ['class' => 'yii\grid\ActionColumn',
                        'template' => '{drug_button} {app_button} {view} {update}  ',
                        'buttons' => [
                            'drug_button' => function ($url, $model, $key) {
                                return Html::a('จ่ายยา', ['dispense/createid', 'id' => $model->sv_id]);
                            },
                            'app_button' => function ($url, $model, $key) {
                                return Html::a('นัด', ['appointment/createid', 'id' => $model->sv_id]);
                            },        
                                ],],
                ],
            ]);
            ?>
            <?php Pjax::end(); ?>
        </div>
    </div>
</div>