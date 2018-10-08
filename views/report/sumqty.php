<?php

//use yii\grid\GridView;
use miloschuman\highcharts\Highcharts;
use yii\bootstrap\ActiveForm;
use kartik\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = '10 อันดับครุภัณฑ์ ที่ขออนุมัติจัดหาสูงสุด ที่มีในเกณฑ์ราคากลาง';
$this->params['breadcrumbs'][] = $this->title;
?>


    <!-- ส่วนแสดงกราฟ -->
    <div class="col-md-12 col-xs-12">
    <div class="panel panel-info">

        <div class="panel-heading">
            <h3 class="panel-title">
                <i class="glyphicon glyphicon-signal"></i>
                Top 10 Hardware (ในเกณฑ์ราคากลาง ประจำปี พ.ศ.2560)</h3>
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
    
            
            <div id="sumqty">
                    <?php
                        $sql = "$sql";
                        $rawData = Yii::$app->db->createCommand($sql)->queryAll();
                        $main_data=[];
                        //วน loop เก็บข้อมูล ลง Array
                        foreach ($rawData as $data) {
                                $main_data[] = [
                                    'name' => $data['hw_detail'],
                                    'y' => $data['qty'] * 1,
                                    //'drilldown' => $data['areacode']
                                ];
                        }
                        $main = json_encode($main_data)
                    ?>

                <?php    
                    $this->registerJs("$(function () {
                            // Create the chart
                            $('#sumqty').highcharts({
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
                                text: 'จำนวน',
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
                                name: 'ครุภัณฑ์',
                                    colorByPoint: true,
                                    data: $main
                                }
                            ],
                        });
                    });", yii\web\View::POS_END);
                ?>
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
                    'panel'=>['type'=>'primary', 
                        'heading'=>'Top 10 Hardware (ในเกณฑ์ราคากลาง ประจำปี พ.ศ.2560)'],
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
                            'contentOptions' => ['class' => 'text-left'],
                            'options' => ['style' => 'width:30px;'],
                            'attribute' => 'hw_detail',
                            'header' => 'ครุภัณฑ์',
                            'format' => 'raw',
                            'value' => function($data) { 
                            // ประกาศรับค่าตัวแปรจาก Controller
                            //$hw_detail = $data['hw_detail']; 
                            //$values = $data['sprice']; 
                            //return Html::a(Html::encode($hw_detail), ['/report/dmctrlhos', 'areacode' => $areacode]);
                            return empty($data['hw_detail']) ? '-' : $data['hw_detail'];
                            }
                        ],
                        [
                            'headerOptions' => ['class' => 'text-center'],
                            'contentOptions' => ['class' => 'text-center'],
                            'options' => ['style' => 'width:30px;'],
                            'attribute' => 'qty',
                            'header' => 'จำนวน',
                            'format'=>['decimal', 0],
                            'value' => function($data) {
                                return empty($data['qty']) ? '-' : $data['qty'];
                            }
                        ],
                        [
                            'headerOptions' => ['class' => 'text-center'],
                            'contentOptions' => ['class' => 'text-right'],
                            'options' => ['style' => 'width:30px;'],
                            'attribute' => 'sprice',
                            'header' => 'มูลค่ารวม (บาท)',
                            'format'=>['decimal', 0],
                            'value' => function($data) {
                                return empty($data['sprice']) ? '-' : $data['sprice'];
                            }
                        ],
                    ]
                ]);
                ?>
        </div>
    </div>

    <!-- spec 61 -->
    <!-- ส่วนแสดงกราฟ -->
    <div class="col-md-12 col-xs-12">
    <div class="panel panel-info">

        <div class="panel-heading">
            <h3 class="panel-title">
                <i class="glyphicon glyphicon-signal"></i>
                Top 10 Hardware (ในเกณฑ์ราคากลาง ประจำปี พ.ศ.2561)</h3>
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
    
            
            <div id="sumqty61">
                    <?php
                        $sql = "$sql2";
                        $rawData2 = Yii::$app->db->createCommand($sql)->queryAll();
                        $main_data=[];
                        //วน loop เก็บข้อมูล ลง Array
                        foreach ($rawData2 as $data) {
                                $main_data[] = [
                                    'name' => $data['hw_detail'],
                                    'y' => $data['qty'] * 1,
                                    //'drilldown' => $data['areacode']
                                ];
                        }
                        $main = json_encode($main_data)
                    ?>

                <?php    
                    $this->registerJs("$(function () {
                            // Create the chart
                            $('#sumqty61').highcharts({
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
                                text: 'จำนวน',
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
                                name: 'ครุภัณฑ์',
                                    colorByPoint: true,
                                    data: $main
                                }
                            ],
                        });
                    });", yii\web\View::POS_END);
                ?>
            </div>
    </div>

    <!-- ส่วนแสดง Grid View Kartik-->

    <div class="col-md-12 col-xs-12">
        <div class="body-content">
            <?php
                if (isset($dataProvider2))
                echo GridView::widget([
                    'dataProvider' => $dataProvider2,
                    'hover' => TRUE,
                    'panel'=>['type'=>'primary', 
                        'heading'=>'Top 10 Hardware (ในเกณฑ์ราคากลาง ประจำปี พ.ศ.2561)'],
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
                            'contentOptions' => ['class' => 'text-left'],
                            'options' => ['style' => 'width:30px;'],
                            'attribute' => 'hw_detail',
                            'header' => 'ครุภัณฑ์',
                            'format' => 'raw',
                            'value' => function($data) { 
                            // ประกาศรับค่าตัวแปรจาก Controller
                            //$off_name = $data['off_name']; 
                            //$values = $data['sprice']; 
                            //return Html::a(Html::encode($areaname), ['/report/dmctrlhos', 'areacode' => $areacode]);
                            return empty($data['hw_detail']) ? '-' : $data['hw_detail'];
                            }
                        ],
                        [
                            'headerOptions' => ['class' => 'text-center'],
                            'contentOptions' => ['class' => 'text-center'],
                            'options' => ['style' => 'width:30px;'],
                            'attribute' => 'qty',
                            'header' => 'จำนวน',
                            'format'=>['decimal', 0],
                            'value' => function($data) {
                                return empty($data['qty']) ? '-' : $data['qty'];
                            }
                        ],
                        [
                            'headerOptions' => ['class' => 'text-center'],
                            'contentOptions' => ['class' => 'text-right'],
                            'options' => ['style' => 'width:30px;'],
                            'attribute' => 'sprice',
                            'header' => 'มูลค่ารวม (บาท)',
                            'format'=>['decimal', 0],
                            'value' => function($data) {
                                return empty($data['sprice']) ? '-' : $data['sprice'];
                            }
                        ],
                    ]
                ]);
                ?>
        </div>
    </div>
