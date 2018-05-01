<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\VisitSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ตรวจรักษาเบื้องต้น';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="visit-index">
<?php Pjax::begin(); ?>
    <div class="panel panel-info">
        <div class="panel-heading text-center"><?= Html::encode($this->title) ?></div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-3"> <?= $this->render('_search', ['model' => $searchModel]); ?></div>
                <div class="col-md-3 col-md-offset-6 text-right"><?= Html::a('เพิ่มข้อมูลการตรวจเบื้องต้น', ['create'], ['class' => 'btn btn-success']) ?></div>

            </div>

            <?=
            GridView::widget([
                'dataProvider' => $dataProvider,
                //'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn',
                        ],
                    //'id',
                    'pt.ptName',
                    'datetimesv:datetime',
                    //'visit_vts',
                   // 'visit_bpup',
                    //'visit_bpdown',
                    //'visit_weigth',
                    //'visit_higth',
                    'visit_cc',
                    //'emp_id',
                    //'pt_id',
                    ['class' => 'yii\grid\ActionColumn',
                        'template' => '{my_button} {view} {update} {delete} ',
                        'buttons' => [
                            'my_button' => function ($url, $model, $key) {
                                return Html::a('ตรวจรักษา', ['service/create', 'id' => $model->id]);
                            },
                                ],],
                ],
            ]);
            ?>
<?php Pjax::end(); ?>
        </div>
    </div>
</div>
