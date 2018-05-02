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

$this->title = 'ข้อมูลค่าบริการ';

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
        'heading'=>'ค่าบริการ',
        'befor'=>'',
        'type'=> \kartik\grid\GridView::TYPE_SUCCESS,
    ],
    'columns'=>[
        ['class'=>'yii\grid\SerialColumn'],
        [
            'label'=>'ชื่อยา',
            'attribute'=>'drugname',
            'headerOptions'=>['class'=>'text-center'],
            'contentOptions'=>['class'=>'text-center'],
        ],
         [
            'label'=>'จำนวน',
            'attribute'=>'drug_amount',
            'headerOptions'=>['class'=>'text-center'],
            'contentOptions'=>['class'=>'text-center'],
        ],
        [
            'label'=>'ราคา',
            'attribute'=>'drug_prices',
            'headerOptions'=>['class'=>'text-center'],
            'contentOptions'=>['class'=>'text-center'],
        ],
        
    ],
    
]);