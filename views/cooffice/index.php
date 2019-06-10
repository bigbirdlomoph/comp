<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use yii\widgets\Pjax;
use kartik\grid\GridView;
/* @var $this yii\web\View */
/* @var $searchModel app\models\CoOfficeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'ระบบค้นหาหน่วยบริการในจังหวัดเลย');
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="co-office-index">
    
    <h3 class="thsb f30p"><?= Html::encode($this->title) ?></h3>
        <?php Pjax::begin(); ?>
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>
    <br>

    <div class="col-md-12 col-xs-12 col-lg-12 thsb f20p">
        <div class="body-content">
            <?php
                if (isset($dataProvider))
                echo GridView::widget([
                    'dataProvider' => $dataProvider,
                    'striped' => $striped,
                    //'condensed' => $condensed,
                    'responsive' => $responsive,
                    'hover' => $hover,
                    'panel'=>[
                        'type' => GridView::TYPE_PRIMARY, 
                        'heading' => 'หน่วยบริการในจังหวัดเลย' ],
                    'summary'=>'',
                    'columns' => [
                        [
                            'headerOptions' => ['class' => 'text-center'],
                            'contentOptions' => ['class' => 'text-center'],
                            'options' => ['style' => 'width:20px;'],
                            'class' => 'yii\grid\SerialColumn',
                            'header' => 'ลำดับที่'
                        ],
                        [
                            'headerOptions' => ['class' => 'text-center'],
                            'contentOptions' => ['class' => 'text-center'],
                            //'options' => ['style' => 'width:30px;'],
                            'attribute' => 'off_id',
                            'header' => 'รหัสสถานบริการ 5 หลัก',
                            'format' => 'raw',
                            'value' => function($data) { 
                                return empty($data['off_id']) ? '-' : $data['off_id']; 
                            }
                        ],
                        [
                            'headerOptions' => ['class' => 'text-center'],
                            'contentOptions' => ['class' => 'text-left'],
                            //'options' => ['style' => 'width:30px;'],
                            'attribute' => 'off_name',
                            'header' => 'ชื่อสถานบริการ',
                            'format' => 'raw',
                            'value' => function($data) { 
                                return empty($data['off_name']) ? '-' : $data['off_name']; 
                            }
                        ],
                        [
                            'headerOptions' => ['class' => 'text-center'],
                            'contentOptions' => ['class' => 'text-left'],
                            //'options' => ['style' => 'width:30px;'],
                            'attribute' => 'distname',
                            'header' => 'อำเภอ',
                            'format' => 'raw',
                            'value' => function($data) { 
                                return empty($data['distname']) ? '-' : $data['distname']; 
                            }
                        ],
                        [
                            'headerOptions' => ['class' => 'text-center'],
                            'contentOptions' => ['class' => 'text-left'],
                            //'options' => ['style' => 'width:30px;'],
                            'attribute' => 'cup_name',
                            'header' => 'คปสอ.',
                            'format' => 'raw',
                            'value' => function($data) { 
                                return empty($data['cup_name']) ? '-' : $data['cup_name']; 
                            }
                        ],
                        //[
                        //    'class' => 'yii\grid\ActionColumn',
                        //    'headerOptions' => ['class' => 'text-center'],
                        //    'contentOptions' => ['class' => 'text-center'],
                       //     'header' => '#.',
                        //    'buttonOptions'=>['class'=>'btn btn-default'],
                        //    'template'=>'<div class="btn-group btn-group-sm text-center" role="group"> {view} {update} </div>'
                        //],
                        //[
                        //    'class' => 'yii\grid\ActionColumn',
                        //    'headerOptions' => ['class' => 'text-center'],
                        //    'contentOptions' => ['noWrap' => true],
                        //    'template'=>'{view} {update} ',
                        //    'buttons'=>[
                        //      'copy' => function($model){
                        //          return Html::a('<i class="glyphicon glyphicon-duplicate"></i>',$model);
                        //        }
                        //      ]
                        //  ],
                          
                    ]
                ]);
                ?>
            </div>
        </div>

