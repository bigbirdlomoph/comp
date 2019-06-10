<?php

//use yii\grid\GridView;
use miloschuman\highcharts\Highcharts;
use yii\bootstrap\ActiveForm;
use kartik\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'การจัดหาระบบคอมพิวเตอร์ แยกรายอำเภอ (ในเกณฑ์ราคากลาง)';
$this->params['breadcrumbs'][] = $this->title;
?>


    <!-- ส่วนแสดงกราฟ -->
    <div class="col-md-12 col-xs-12">
    <div class="panel panel-info">

        <div class="panel-heading">
            <h3 class="panel-title">
                <i class="glyphicon glyphicon-signal"></i>
                การจัดหาระบบคอมพิวเตอร์ แยกรายอำเภอ (ในเกณฑ์ราคากลาง)</h3>
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
    
            
            <div id="sumdist">
                    <?php
                        $sql = "$sql";
                        $rawData = Yii::$app->db->createCommand($sql)->queryAll();
                        $main_data=[];
                        //วน loop เก็บข้อมูล ลง Array
                        foreach ($rawData as $data) {
                                $main_data[] = [
                                    'name' => $data['distname'],
                                    'y' => $data['sprice'] * 1,
                                    //'drilldown' => $data['areacode']
                                ];
                        }
                        $main = json_encode($main_data)
                    ?>

                <?php    
                    $this->registerJs("$(function () {
                            // Create the chart
                            $('#sumdist').highcharts({
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
                                name: 'อำเภอ',
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
                        'heading'=>'การจัดหาระบบคอมพิวเตอร์ แยกรายอำเภอ (ในเกณฑ์ราคากลาง)'],
                    'summary'=>'',
                    'columns' => [
                        [
                            'headerOptions' => ['class' => 'text-center'],
                            'contentOptions' => ['class' => 'text-center'],
                            'options' => ['style' => 'width:20px;'],
                            'class' => 'yii\grid\SerialColumn',
                            'header' => 'ลำดับที่'
                        ],
                        // [
                        //     'headerOptions' => ['class' => 'text-center'],
                        //     'contentOptions' => ['class' => 'text-center'],
                        //     'options' => ['style' => 'width:30px;'],
                        //     'attribute' => 'distid',
                        //     'header' => 'รหัสอำเภอ',
                        //     'format'=>'html',
                        //     'value' => function($data) {
                        //         return empty($data['distid']) ? '-' : $data['distid'];
                        //     }
                        // ],
                        // [
                        //     'headerOptions' => ['class' => 'text-center'],
                        //     'contentOptions' => ['class' => 'text-center'],
                        //     'options' => ['style' => 'width:30px;'],
                        //     'attribute' => 'cup_code',
                        //     'header' => 'รหัส CUP',
                        //     'format'=>'html',
                        //     'value' => function($data) {
                        //         return empty($data['cup_code']) ? '-' : $data['cup_code'];
                        //     }
                        // ],
                        [
                            'headerOptions' => ['class' => 'text-center'],
                            'contentOptions' => ['class' => 'text-center'],
                            'options' => ['style' => 'width:30px;'],
                            'attribute' => 'distname',
                            'header' => 'อำเภอ',
                            'format' => 'raw',
                            'value' => function($data) {
                                // ประกาศรับค่าตัวแปรจาก Controller 
                                $cup_code = $data['cup_code']; 
                                $distname = $data['distname']; 
                                return Html::a(Html::encode($distname), 
                                    [   
                                        '/report/sumcup62', 
                                        'cup_code' => $cup_code
                                        ]);
                            return empty($data['distname']) ? '-' : $data['distname'];
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
