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

<div class="col-md-8 col-xs-12">
    <div class="panel panel-info">

            <div class="panel-heading">
                <h3 class="panel-title"> <i class="glyphicon glyphicon-signal"></i>
                    มูลค่าการจัดหาระบบคอมพิวเตอร์ภาครัฐ แยกรายเดือน (ในเกณฑ์ราคากลาง)
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

    <div class="col-md-4 col-xs-12">
        <div class="body-content">
            <?php
                if (isset($dataProvider))
                echo GridView::widget([
                    'dataProvider' => $dataProvider,
                    'hover' => TRUE,
                    'floatHeader' => true,
                    'export'=>[
                        'fontAwesome'=>FALSE
                        ], 
                    'panel'=>['type'=>'primary', 
                        'heading'=>'มูลค่าการจัดหาระบบคอมพิวเตอร์ภาครัฐ แยกรายเดือน (ในเกณฑ์ราคากลาง)'],
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
                            'options' => ['style' => 'width:30px;'],
                            'attribute' => 'monthname',
                            'header' => 'เดือนอนุมัติจัดหา',
                            'format' => 'html',
                            'value' => function($data) { 
                                // ประกาศรับค่าตัวแปรจาก Controller
                                $month_approve = $data['month_approve']; 
                                $monthname = $data['monthname']; 
                                return Html::a(Html::encode($monthname), [
                                    '/report/sumhosmonth', 
                                    'month_approve' => $month_approve
                                    ]);
                                return empty($data['monthname']) ? '-' : $data['monthname'];
                            }
                        ],
                        [
                            'headerOptions' => ['class' => 'text-center'],
                            'contentOptions' => ['class' => 'text-center'],
                            'options' => ['style' => 'width:30px;'],
                            'attribute' => 'values',
                            'header' => 'มูลค่ารวม (บาท)',
                            'format'=>['decimal', 0],
                            'value' => function($data) {
                                return empty($data['value']) ? '-' : $data['value'];
                            }
                        ],
                    ]
                ]);
                ?>
        </div>
    </div>

<!-- spec 61 -->

<!-- ส่วนแสดงกราฟ -->
<div class="col-md-8 col-xs-12">
    <div class="panel panel-info">

        <div class="panel-heading">
            <h3 class="panel-title">
                <i class="glyphicon glyphicon-signal"></i>
                มูลค่าการจัดหาระบบคอมพิวเตอร์ภาครัฐฯ รายเดือน (ในเกณฑ์ราคากลาง สเปค ประจำปี พ.ศ.2561)</h3>
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
    
            
            <div id="summary2">
                    <?php
                        $sql = $sql2;
                        $rawData2 = Yii::$app->db->createCommand($sql)->queryAll();
                        $main_data=[];
                        //วน loop เก็บข้อมูล ลง Array
                        foreach ($rawData2 as $data) {
                                $main_data[] = [
                                    'name' => $data['monthname61'],
                                    'y' => $data['tvalue'] * 1,
                                    //'drilldown' => $data['areacode']
                                ];
                        }
                        $main = json_encode($main_data)
                    ?>

                <?php    
                    $this->registerJs("$(function () {
                            // Create the chart
                            $('#summary2').highcharts({
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

    <div class="col-md-4 col-xs-12">
        <div class="body-content">
            <?php
                if (isset($dataProvider2))
                echo GridView::widget([
                    'dataProvider' => $dataProvider2,
                    'hover' => TRUE,
                    'floatHeader' => true,
                    'export'=>[
                        'fontAwesome'=>FALSE
                        ], 
                    'panel'=>['type'=>'primary', 
                        'heading'=>'มูลค่าการจัดหาระบบคอมพิวเตอร์ภาครัฐ แยกรายเดือน (ในเกณฑ์ราคากลาง สเปค ประจำปี พ.ศ.2561)'],
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
                            'options' => ['style' => 'width:30px;'],
                            'attribute' => 'monthname61',
                            'header' => 'เดือนอนุมัติจัดหา',
                            'format' => 'html',
                            'value' => function($data) { 
                                // ประกาศรับค่าตัวแปรจาก Controller
                                $month_approve = $data['month_approve']; 
                                $monthname61 = $data['monthname61']; 
                                return Html::a(Html::encode($monthname61), [
                                    '/report/sumhosmonth', 
                                    'month_approve' => $month_approve
                                    ]);
                                return empty($data['monthname61']) ? '-' : $data['monthname61'];
                                }
                        ],
                        [
                            'headerOptions' => ['class' => 'text-center'],
                            'contentOptions' => ['class' => 'text-center'],
                            'options' => ['style' => 'width:30px;'],
                            'attribute' => 'tvalue',
                            'header' => 'มูลค่ารวม (บาท)',
                            'format'=>['decimal', 0],
                            'value' => function($data) {
                                return empty($data['tvalue']) ? '-' : $data['tvalue'];
                            }
                        ]
                    ]
                ]);
                ?>
        </div>
    </div>
