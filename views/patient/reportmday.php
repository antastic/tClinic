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

$this->title = 'ค่าบริการประจำวัน';

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
        'heading'=>'รายงานค่าบริการประจำวัน',
        'befor'=>'',
        'type'=> \kartik\grid\GridView::TYPE_SUCCESS,
    ],
    'columns'=>[
        ['class'=>'yii\grid\SerialColumn'],
        [
            'label'=>'วันที่มารับบริการ',
            'attribute'=>'dt',
            'headerOptions'=>['class'=>'text-center'],
            'contentOptions'=>['class'=>'text-center'],
        ],
       [
            'label'=>'ชื่อ นามสกุล',
            'attribute'=>'fullname',
            'headerOptions'=>['class'=>'text-center'],
            'contentOptions'=>['class'=>'text-center'],
        ], 
        [
            'label'=>'Dx',
            'attribute'=>'svdx',
            'headerOptions'=>['class'=>'text-center'],
            'contentOptions'=>['class'=>'text-center'],
        ],
       [
            'label'=>'ค่าบริการ',
            'attribute'=>'ic_summary',
            'headerOptions'=>['class'=>'text-center'],
            'contentOptions'=>['class'=>'text-center'],
        ],
    ]
]);