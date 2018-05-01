<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\data\ArrayDataProvider;
use yii\helpers\Url;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\patientSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ข้อมูลค่าใช้จ่าย';

//$this->params['breadcrumbs'][] = $this->title;
?>
<?php Pjax::begin(); ?>
<?php 
echo \kartik\grid\GridView::widget([
    'dataProvider' =>$dataProvider,
    'formatter' => ['class' => '\yii\i18n\formatter','nullDisplay'=>'-'],
    'responsive'=>TRUE,
    'hover'=>TRUE,
    'floatHeader'=>FALSE,
    'panel'=>[
        'heading'=>'รายงานยอดค่าบริการประจำเดือน',
        'befor'=>'',
        'type'=> \kartik\grid\GridView::TYPE_SUCCESS,
    ],
    'columns'=>[
        ['class'=>'yii\grid\SerialColumn'],
        [
            'label'=>'วันที่ชำระเงิน',
            'attribute'=>'ic_date',
            'headerOptions'=>['class'=>'text-center'],
            'contentOptions'=>['class'=>'text-center'],
        ],
         [
            'label'=>'ชื่อ นามสกุลผู้รับบริการ',
            'attribute'=>'fullname',
            'headerOptions'=>['class'=>'text-center'],
            'contentOptions'=>['class'=>'text-center'],
        ],
        [
            'label'=>'เลขที่ใบเสร็จ',
            'attribute'=>'ic_id',
            'headerOptions'=>['class'=>'text-center'],
            'contentOptions'=>['class'=>'text-center'],
        ],
        [
            'label'=>'จำนวนเงิน',
            'attribute'=>'ic_summary',
            'headerOptions'=>['class'=>'text-center'],
            'contentOptions'=>['class'=>'text-center'],
        ],
    ]
]);