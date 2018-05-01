<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AppointmentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'การนัดหมาย';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="appointment-index">
<?php Pjax::begin(); ?>
    <div class="panel panel-info">
        <div class="panel-heading text-center"><?= Html::encode($this->title) ?></div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-3"> <?= $this->render('_search', ['model' => $searchModel]); ?></div>
                <div class="col-md-3 col-md-offset-6 text-right"><?= Html::a('เพิ่มข้อมูลการนัด', ['create'], ['class' => 'btn btn-success']) ?></div>

            </div>
            <?=
            GridView::widget([
                'dataProvider' => $dataProvider,
                //'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    'apps_id',
                    'apps_date',
                    'apps_details:ntext',
                    'service.visit.emp.emp_name',
                    'service_id',
                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]);
            ?>
<?php Pjax::end(); ?>
        </div>
    </div>
</div>
