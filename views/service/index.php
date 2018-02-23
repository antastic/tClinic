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
                    'sv_id',
                    'svdx',
                    'sv_details',
                    'visit_id',
                    'emp_id',
                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]);
            ?>
<?php Pjax::end(); ?>
        </div>
    </div>
</div>