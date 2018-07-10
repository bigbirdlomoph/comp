<?php

//use yii\grid\GridView;
use miloschuman\highcharts\Highcharts;
use yii\bootstrap\ActiveForm;
use kartik\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'หน่วยบริการที่ขออนุมัติในเดือน (ในเกณฑ์ราคากลาง)';
$this->params['breadcrumbs'][] = $this->title;
?>


    <!-- ส่วนแสดงกราฟ -->

    <div class="col-md-12 col-xs-12">
    <div class="panel panel-info">

        <div class="panel-heading">
            <h3 class="panel-title">
                <i class="glyphicon glyphicon-signal"></i>
                หน่วยบริการที่ขออนุมัติในเดือน (ในเกณฑ์ราคากลาง)</h3>
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
    
            
            <div id="sumhos">
                    <?php
                        $sql = "$sql";
                        $rawData = Yii::$app->db->createCommand($sql)->queryAll();
                        $main_data=[];
                        //วน loop เก็บข้อมูล ลง Array
                        foreach ($rawData as $data) {
                                $main_data[] = [
                                    'name' => $data['off_name'],
                                    'y' => $data['sprice'] * 1,
                                    //'drilldown' => $data['areacode']
                                ];
                        }
                        $main = json_encode($main_data)
                    ?>

                <?php    
                    $this->registerJs("$(function () {
                            // Create the chart
                            $('#sumhos').highcharts({
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
                                name: 'หน่วยงาน',
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
                    'floatHeader' => true,
                    'export'=>[
                        'fontAwesome'=>FALSE
                        ], 
                    'panel'=>['type'=>'primary', 
                        'heading'=>'หน่วยบริการที่ขออนุมัติจัดหาระบบคอมพิวเตอร์ภาครัฐ เดือน (ในเกณฑ์ราคากลาง)'],
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
                            'options' => ['style' => 'width:10px;'],
                            'attribute' => 'hoscode',
                            'header' => 'รหัสหน่วยงาน',
                            'format' => 'raw',
                            'value' => function($data) { 
                            //$hoscode = $data['hoscode']; // ประกาศรับค่าตัวแปรจาก Controller
                            //$values = $data['hoscode']; // ประกาศรับค่าตัวแปรจาก Controller
                            //return Html::a(Html::encode($areaname), ['/report/dmctrlhos', 'areacode' => $areacode]);
                            return empty($data['hoscode']) ? '-' : $data['hoscode'];
                            }
                        ],
                        [
                            'headerOptions' => ['class' => 'text-center'],
                            'contentOptions' => ['class' => 'text-left'],
                            'options' => ['style' => 'width:30px;'],
                            'attribute' => 'off_name',
                            'header' => 'หน่วยงาน',
                            'format' => 'raw',
                            'value' => function($data) { 
                            $off_name = $data['off_name']; // ประกาศรับค่าตัวแปรจาก Controller
                            $hoscode = $data['hoscode']; // ประกาศรับค่าตัวแปรจาก Controller
                            $month_approve = $data['month_approve'];
                            return Html::a(Html::encode($off_name), ['/report/comdetail', 'hoscode' => $hoscode, 'month_approve' => $month_approve]);
                            return empty($data['off_name']) ? '-' : $data['off_name'];
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
