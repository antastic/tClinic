<?php

use yii\helpers\Html;
use yii\grid\GridView;
//use app\models\Drug;
//use app\models\Drugitem;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DrugSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'รายการยา เวชภัณฑ์';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="drug-index">
    <?php Pjax::begin(); ?>
    <div class="panel panel-info">
        <div class="panel-heading text-center"><?= Html::encode($this->title) ?></div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-3"> <?= $this->render('_search', ['model' => $searchModel]); ?></div>
                <div class="col-md-3 col-md-offset-6 text-right"><?= Html::a('เพิ่มข้อมูลยา', ['create'], ['class' => 'btn btn-success']) ?></div>

            </div>
            
            <?php // echo $this->render('_search', ['model' => $searchModel]);  ?>

            <?=
            GridView::widget([
                'dataProvider' => $dataProvider,
                //'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    //'drug_id',
                    'drugname',
                    //'drugitems.in_amount',
                    //'drugitems.ip_exp',
                    'used',
                 
                    ['class' => 'yii\grid\ActionColumn',
                        'template' => '{my_button} {view} {update}  ',
                        'buttons' => [
                            'my_button' => function ($url, $model, $key) {
                                return Html::a('รับยา', ['drugitem/create', 'id' => $model->drug_id]);
                            },
                                ],],
                        ],
                    ]);
                    ?>
                    <?php Pjax::end(); ?>
        </div>
    </div>
</div>
