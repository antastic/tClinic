<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DispenseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'การจ่ายยา';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dispense-index">

<?php Pjax::begin(); ?>
    <div class="panel panel-info">
        <div class="panel-heading text-center"><?= Html::encode($this->title) ?></div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-3"> <?= $this->render('_search', ['model' => $searchModel]); ?></div>
                <div class="col-md-3 col-md-offset-6 text-right"><?= Html::a('เพิ่มข้อมูลยา', ['create'], ['class' => 'btn btn-success']) ?></div>

            </div>
            <?=
            GridView::widget([
                'dataProvider' => $dataProvider,
                // 'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    //'vsd_id',
                    'service_id',
                    'drug.drugname',
                    'drug_amount',
                    'vtd_unit',
                    'drug_prices',
                    //'emp_id',
                    //'service_id',
                    //'Expenses_id',
                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]);
            ?>
<?php Pjax::end(); ?>
        </div>
    </div>
</div>