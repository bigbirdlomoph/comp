<?php

//use yii\grid\GridView;
use miloschuman\highcharts\Highcharts;
use yii\bootstrap\ActiveForm;
use kartik\grid\GridView;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;


$this->title = 'รายละเอียด';
$this->params['breadcrumbs'][] = $this->title;

?>
    <!-- ส่วนแสดง Grid View Kartik-->

    
    <div class="box box-success ">
        <h3 class="box-title"><i class="fa fa-info"></i> 
                <?= Html::encode($this->title) ?>
                <?= 'ของ ' ?>
                <?php
                    $rows = $rawData;
                        echo count($rawData) > 0 ? $rows[0]['off_name'] : ''; 
                ?> 
            </h3>
        </div>

    <div class="box-body">

    <div class="col-md-12 col-xs-12">
        <div class="body-content">
            <?php
                if (isset($dataProvider))
                echo GridView::widget([
                    'dataProvider' => $dataProvider,
                    'responsive' => TRUE,
                    'hover' => TRUE,
                    'floatHeader' => TRUE,
                    'export'=>[
                        'fontAwesome'=>FALSE
                        ],                    
                    'panel'=>['type'=>'primary', 
                        'heading'=>'รายการครุภัณฑ์คอมพิวเตอร์ที่ขออนุมัติ  (ในเกณฑ์ราคากลาง) '],
                    'summary'=>'',
                    'columns' => [
                        [
                            'headerOptions' => ['class' => 'text-center'],
                            'contentOptions' => ['class' => 'text-center'],
                            'options' => ['style' => 'width:10px;'],
                            'class' => 'yii\grid\SerialColumn',
                            'header' => 'ลำดับที่'
                        ],
                        // [
                        //     'headerOptions' => ['class' => 'text-center'],
                        //     'contentOptions' => ['class' => 'text-left'],
                        //     'options' => ['style' => 'width:30px;'],
                        //     'attribute' => 'off_name',
                        //     'header' => 'หน่วยงาน',
                        //     'format' => 'raw',
                        //     'value' => function($data) { 
                        //     return empty($data['off_name']) ? '-' : $data['off_name'];
                        //     }
                        // ],
                        [
                            'headerOptions' => ['class' => 'text-center'],
                            'contentOptions' => ['class' => 'text-left'],
                            'options' => ['style' => 'width:40px;'],
                            'attribute' => 'hw_detail',
                            'header' => 'ครุภัณฑ์คอมพิวเตอร์',
                            'format' => 'raw',
                            'value' => function($data) { 
                            return empty($data['hw_detail']) ? '-' : $data['hw_detail'];
                            }
                        ],
                        [
                            'headerOptions' => ['class' => 'text-center'],
                            'contentOptions' => ['class' => 'text-right'],
                            'options' => ['style' => 'width:10px;'],
                            'attribute' => 'price',
                            'header' => 'ราคากลาง',
                            'format' => ['decimal', 0],
                            'value' => function($data) { 
                            return empty($data['price']) ? '-' : $data['price'];
                            }
                        ],
                        [
                            'headerOptions' => ['class' => 'text-center'],
                            'contentOptions' => ['class' => 'text-center'],
                            'options' => ['style' => 'width:10px;'],
                            'attribute' => 'qty',
                            'header' => 'จำนวน',
                            'format' => 'raw',
                            'value' => function($data) { 
                            return empty($data['qty']) ? '-' : $data['qty'];
                            }
                        ],
                        [
                            'headerOptions' => ['class' => 'text-center'],
                            'contentOptions' => ['class' => 'text-right'],
                            'options' => ['style' => 'width:20px;'],
                            'attribute' => 'sum_price',
                            'header' => 'มูลค่ารวม/หน่วย (บาท)',
                            'format'=>['decimal', 0],
                            'value' => function($data) {
                                return empty($data['sum_price']) ? '-' : $data['sum_price'];
                            }
                        ],
                    ]
                ]);
                ?>
            </div>
        </div>
    </div>

