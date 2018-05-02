<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\patientSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ข้อมูลผู้รับบริการ';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="patient-index">

    <div class="panel panel-info">
        <div class="panel-heading text-center"><?= Html::encode($this->title) ?></div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-3"> <?= $this->render('_search', ['model' => $searchModel]); ?></div>
                <div class="col-md-3 col-md-offset-6 text-right"><?= Html::a('เพิ่มข้อมูลผู้รับบริการ', ['create'], ['class' => 'btn btn-success']) ?></div>

            </div>
            <?=
            GridView::widget([
                'dataProvider' => $dataProvider,
                // 'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    'pt_id',
                    'ptName',
                    'ptLname',
                    //'ptAddress:ntext',
                    'pt_phone',
                    // 'pt_dad',
                    // 'pt_mom',
                    // 'pt_blood',
                    // 'pt_bloodtype',
                    // 'pt_drug',
                    // 'pt_dx',
                    // 'pt_sex',
                    // 'pt_bd',
                    // 'pt_cid',
                    // 'pt_datail:ntext',
                    ['class' => 'yii\grid\ActionColumn',
                        'template' => '{view} {update} {delete} {my_button}',
                        'buttons' => [
                            'my_button' => function ($url, $model, $key) {
                                return Html::a('ส่งตรวจ', ['visit/createid', 'id' => $model->pt_id]);
                            },
                                ],
                            ],
                        ],
                    ]);
                    ?>
        </div>
    </div>
</div>
