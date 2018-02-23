<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PaymentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ค่าบริการ';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="payment-index">

<?php Pjax::begin(); ?>

    <div class="panel panel-info">
        <div class="panel-heading text-center"><?= Html::encode($this->title) ?></div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-3"> <?= $this->render('_search', ['model' => $searchModel]); ?></div>
                <div class="col-md-3 col-md-offset-6 text-right"><?= Html::a('เพิ่มค่าบริการบริการ', ['create'], ['class' => 'btn btn-success']) ?></div>

            </div>

            <?=
            GridView::widget([
                'dataProvider' => $dataProvider,
                // 'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    'ic_id',
                    'ic_date',
                    'ic_summary',
                    'emp_id',
                    'service_id',
                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]);
            ?>
<?php Pjax::end(); ?>
        </div>
    </div>
</div>