<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DrugitemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Drugitems';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="drugitem-index">

<?php Pjax::begin(); ?>
    <div class="panel panel-info">
        <div class="panel-heading text-center"><?= Html::encode($this->title) ?></div>
        <div class="panel-body">

            <?=
            GridView::widget([
                'dataProvider' => $dataProvider,
                //'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    // 'ip_id',
                    'ip_date',
                    'drug.drugname',
                    'in_amount',
                    'in_unit',
                    'ip_exp',
                    'ip_status',
                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]);
            ?>
<?php Pjax::end(); ?>
        </div>
    </div>
</div>