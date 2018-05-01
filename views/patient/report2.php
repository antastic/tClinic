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

$this->title = 'ข้อมูลผู้รับบริการ';

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
        'heading'=>'รายงานยอดผู้รับบริการประจำเดือน',
        'befor'=>'',
        'type'=> \kartik\grid\GridView::TYPE_SUCCESS,
    ],
    'columns'=>[
        ['class'=>'yii\grid\SerialColumn'],
        [
            'label'=>'วันที่มารับบริการ',
            'attribute'=>'datetimesv',
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
            'label'=>'Dx',
            'attribute'=>'svdx',
            'headerOptions'=>['class'=>'text-center'],
            'contentOptions'=>['class'=>'text-center'],
        ],
        [
            'label'=>'นัด',
            'attribute'=>'apps_date',
            'headerOptions'=>['class'=>'text-center'],
            'contentOptions'=>['class'=>'text-center'],
        ],
    ]
]);