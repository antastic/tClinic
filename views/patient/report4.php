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

$this->title = 'ข้อมูลยอดยา เวชภัณฑ์';

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
        'heading'=>'รายงานยอดยา เวชภัณฑ์',
        'befor'=>'',
        'type'=> \kartik\grid\GridView::TYPE_SUCCESS,
    ],
    'columns'=>[
        ['class'=>'yii\grid\SerialColumn'],
        [
            'label'=>'ชื่อยา เวชภัณฑ์',
            'attribute'=>'drugname',
            'headerOptions'=>['class'=>'text-center'],
            'contentOptions'=>['class'=>'text-center'],
        ],
         [
            'label'=>'ยอดคงเหลือ',
            'attribute'=>'sumdrug',
            'headerOptions'=>['class'=>'text-center'],
            'contentOptions'=>['class'=>'text-center'],
        ],
        
    ]
]);