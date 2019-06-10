<?php

use miloschuman\highcharts\Highcharts;
use yii\bootstrap\ActiveForm;
use kartik\grid\GridView;
use kartik\grid\DataColumn;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'คุณลักษณะพื้นฐาน';
$this->params['breadcrumbs'][] = $this->title;

$datas = $dataProvider->getModels(); // get data from dataProvider

?>
    <div class="panel-heading">
        <h3 class="alert alert-info" role="alert"> <span class="glyphicon glyphicon-th-list"></span> 
            <?= $datas[0]['hw_detail'] ?> ราคา <?= $datas[0]['price'] ?> บาท 
            </h3> 
        </div>

    <div class="col-md-12 col-xs-12">
        <div class="body-content">
            
            <?php
                if (isset($dataProvider))
                echo GridView::widget([
                    'dataProvider' => $dataProvider,
                    'hover' => TRUE,
                    'resizableColumns'=>true,
                    'floatHeader'=>false,
                    'floatHeaderOptions'=>[
                        'scrollingTop'=>'50'
                    ],
                    'pjax'=>true,
                    'panel'=>[
                        'type'=>'primary', 
                        'heading' => $datas[0]['hw_detail'] , $datas[0]['price'] 
                    ],
                    'summary'=>'',
                    'columns' => [
                        [
                            'headerOptions' => ['class' => 'text-center'],
                            'contentOptions' => ['class' => 'text-center'],
                            //'options' => ['style' => 'word-wrap:break-word'],
                            'attribute' => 'hw_detail',
                            'header' => 'ครุภัณฑ์',
                            'format' => 'html',
                            'value' => function($data) { 
                                return empty($data['hw_detail']) ? '-' : $data['hw_detail']; 
                            },
                            'group' => true,
                        ],
                        [
                            'headerOptions' => ['class' => 'text-center'],
                            'contentOptions' => ['class' => 'text-left'],
                            //'options' => ['style' => 'word-wrap:break-word'],
                            'attribute' => 'hw_detail_name',
                            'header' => 'คุณลักษณะพื้นฐาน',
                            'format' => 'html',
                            'value' => function($data) { 
                                return empty($data['hw_detail_name']) ? '-' : $data['hw_detail_name']; 
                            }
                        ],
                    ]
                ]);
                ?>
            </div>
        </div>
        <p>
            <?= Html::a('กลับหน้าค้นหา', ['/com-hardware62/index'], ['class' => 'btn btn-primary']) ?>
        </p>               
    