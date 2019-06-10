<?php

//use yii\grid\GridView;
use miloschuman\highcharts\Highcharts;
use yii\bootstrap\ActiveForm;
use kartik\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'รายงานสรุปการจัดหาระบบคอมฯ ภาครัฐ (ในเกณฑ์ราคากลาง)';
$this->params['breadcrumbs'][] = $this->title;
?>


<!-- ส่วนแสดงกราฟ -->

<div class="col-md-12 col-xs-12">
    <div class="panel panel-info">

            <div class="panel-heading">
                <h3 class="panel-title"> <i class="glyphicon glyphicon-signal"></i>
                สรุปมูลค่าการจัดหาระบบคอมพิวเตอร์ภาครัฐ (ในเกณฑ์ราคากลาง)
                    </h3>
                </div>

                    <div style="display: none">
                        <?php
                            echo Highcharts::widget([
                                'scripts' => [
                                    'highcharts-more',
                                    'modules/exporting',
                                    'themes/grid',
                                    //'modules/drilldown'
                                    ]
                                ]);
                            ?>
                        </div>
          
                <div id="summarymonth">
                        <?php
                            $sql = $sql;
                            $rawData = Yii::$app->db->createCommand($sql)->queryAll();
                            $main_data=[];
                            //วน loop เก็บข้อมูล ลง Array
                            foreach ($rawData as $data) {
                                    $main_data[] = [
                                        'name' => $data['monthname'],
                                        'y' => $data['value'] * 1,
                                        //'drilldown' => $data['areacode']
                                    ];
                            }
                            $main = json_encode($main_data)
                            ?>

                        <?php    
                            $this->registerJs("$(function () {
                                    // Create the chart
                                    $('#summarymonth').highcharts({
                                chart: {
                                    type : 'column',
                                    borderWidth: 0,
                                    borderRadius: 0,
                                    backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || '#EEE',
                                    options3d: {
                                                enabled: true,
                                                alpha: 45,
                                                beta: 0
                                }
                                },
                                title: {
                                        text: '',
                                        style : {
                                                        fontFamily : 'Conv_ThaiSansNeue-Bold'
                                                }
                                    },
                                xAxis: {
                                    type: 'category',
                                    style : {
                                                    fontFamily : 'Conv_ThaiSansNeue-Bold'
                                    }
                                },
                                yAxis: {
                                    title: {
                                        text: 'มูลค่า (บาท)',
                                        style : {
                                                    fontFamily : 'Conv_ThaiSansNeue-Bold'
                                        }
                                    }
                                },
                                credits: {
                                        enabled: false
                                    },
                                legend: {
                                    enabled: true
                                },
                                plotOptions: {
                                    series: {
                                        borderWidth: 0,
                                        dataLabels: {
                                            enabled: true
                                        }
                                    }
                                },
                                series: [{
                                        name: 'เดือน',
                                            colorByPoint: true,
                                            data: $main
                                        }
                                    ],
                                });
                            });", yii\web\View::POS_END);
                        ?>
                    </div>
            </div>
    </div>

    <!-- ส่วนแสดง Grid View Kartik-->


    <div class="col-md-12 col-xs-12">
        <div class="body-content">
            <?php
            
                if (isset($dataProvider))
                echo GridView::widget([
                    'dataProvider' => $dataProvider,
                    'hover' => TRUE,
                    'responsive'=>TRUE,
                    'floatHeader' => TRUE,
                    'pjax'=>true,
                    'resizableColumns' => true,
                    'export'=>[
                        'fontAwesome'=>true
                        ], 
                    'panel'=>['type'=>'primary', 
                        'heading'=>'สรุปมูลค่าการจัดหาระบบคอมพิวเตอร์ภาครัฐ (ในเกณฑ์ราคากลาง)'
                    ],
                    'showPageSummary' => true,
                    'columns' => [
                        // [
                        //     'headerOptions' => ['class' => 'text-center'],
                        //     'contentOptions' => ['class' => 'text-center'],
                        //     //'options' => ['style' => 'width:20px;'],
                        //     'class' => 'yii\grid\SerialColumn',
                        //     'header' => 'ลำดับที่'
                        // ],
                        [
                            'headerOptions' => ['class' => 'text-center'],
                            'contentOptions' => ['class' => 'text-center'],
                            //'options' => ['style' => 'width:30px;'],
                            'attribute' => 'monthname',
                            'header' => 'เดือนอนุมัติจัดหา',
                            'format' => 'html',
                            'value' => function($data) { 
                                // ประกาศรับค่าตัวแปรจาก Controller
                                $month_approve = $data['month_approve']; 
                                $monthname = $data['monthname']; 
                                return Html::a(Html::encode($monthname), [
                                    '/report/sumhosmonth62', 
                                    'month_approve' => $month_approve
                                    ]);
                                return empty($data['monthname']) ? '-' : $data['monthname'];
                            }
                        ],
                        [
                            'headerOptions' => ['class' => 'text-center'],
                            'contentOptions' => ['class' => 'text-center'],
                            //'options' => ['style' => 'width:30px;'],
                            'attribute' => 'hoscode',
                            'header' => 'จำนวนหน่วยงานที่ขออนุมัติ',
                            'format'=>'html',
                            'value' => function($data) {
                                return empty($data['hoscode']) ? '-' : $data['hoscode'];
                            }
                        ],
                        [
                            'headerOptions' => ['class' => 'text-center'],
                            'contentOptions' => ['class' => 'text-center'],
                            //'options' => ['style' => 'width:30px;'],
                            'attribute' => 'value',
                            'header' => 'มูลค่ารวม (บาท)',
                            'format'=>['decimal', 0],
                            'value' => function($data) {
                                return empty($data['value']) ? '-' : $data['value'];
                            },
                            'pageSummary' => true
                        ],
                    ]
                ]);
                ?>
        </div>
    </div>
