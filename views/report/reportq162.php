<?php


use miloschuman\highcharts\Highcharts;
use yii\bootstrap\ActiveForm;
use kartik\grid\GridView;
use kartik\grid\DataColumn;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'การจัดหาระบบคอมพิวเตอร์ (ในเกณฑ์ราคากลาง)';
$this->params['breadcrumbs'][] = $this->title;
?>


    <!-- ส่วนแสดงกราฟ -->
    <div class="col-md-12 col-xs-12">
    <div class="panel panel-info">

        <div class="panel-heading">
            <h3 class="panel-title">
                <i class="glyphicon glyphicon-signal"></i>
                การจัดหาระบบคอมพิวเตอร์ (ในเกณฑ์ราคากลาง)</h3>
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
    
            
            <div id="reportq162">
                    <?php
                        $sql = "$sql";
                        $rawData = Yii::$app->db->createCommand($sql)->queryAll();
                        $main_data=[];
                        //วน loop เก็บข้อมูล ลง Array
                        foreach ($rawData as $data) {
                                $main_data[] = [
                                    'name' => $data['month_name'],
                                    'y' => $data['total_value'] * 1,
                                    //'drilldown' => $data['areacode']
                                ];
                        }
                        $main = json_encode($main_data)
                    ?>

                <?php    
                    $this->registerJs("$(function () {
                            // Create the chart
                            $('#reportq162').highcharts({
                               
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
                                    },
                                    crosshair: true
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

                            },
                            column: {
                                pointPadding: 0.2,
                                borderWidth: 0
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

    <!-- ส่วนแสดง Grid View Kartik-->

    <div class="col-md-12 col-xs-12">
        <div class="body-content">
            <?php
                if (isset($dataProvider))
                echo GridView::widget([
                    'dataProvider' => $dataProvider,
                    'hover' => TRUE,
                    'resizableColumns'=>true,
                    'floatHeader'=>true,
                    'floatHeaderOptions'=>[
                        'scrollingTop'=>'50'
                    ],
                    'pjax'=>true,
                    'pjaxSettings'=>[
                        'neverTimeout'=>true,
                        'beforeGrid'=>'My fancy content before.',
                        'afterGrid'=>'My fancy content after.',
                    ],
                    'panel'=>[
                        'type'=>'primary', 
                        'heading'=>'การจัดหาระบบคอมพิวเตอร์ (ในเกณฑ์ราคากลาง)',
                    ],
                    //'showPageSummary' => true,
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
                            'attribute' => 'mmyy',
                            'header' => 'เดือนอนุมัติ',
                            'format' => 'html',
                            'value' => function($data) {
                                return empty($data['mmyy']) ? '-' : $data['mmyy'];
                            },
                            'group' => true,
                            //'groupedRow' => true,
                        ],
                        [
                            'headerOptions' => ['class' => 'text-center'],
                            'contentOptions' => ['class' => 'text-center'],
                            //'options' => ['style' => 'width:30px;'],
                            'attribute' => 'request_id',
                            'header' => 'รหัสคำขอ',
                            'format' => 'html',
                            'value' => function($data) {
                                return empty($data['request_id']) ? '-' : $data['request_id'];
                            },
                            'group' => true,
                        ],
                        [
                            'headerOptions' => ['class' => 'text-center'],
                            'contentOptions' => ['class' => 'text-center'],
                            //'options' => ['style' => 'width:30px;'],
                            'attribute' => 'off_name',
                            'header' => 'หน่วยงาน',
                            'format' => 'raw',
                            'value' => function($data) {
                                //ประกาศรับค่าตัวแปรจาก Controller 
                                $hoscode = $data['hoscode']; 
                                $off_name = $data['off_name']; 
                                return Html::a(Html::encode($off_name), 
                                    [   
                                        '/report/comdetail62', 
                                        'hoscode' => $hoscode
                                        ]);
                            return empty($data['off_name']) ? '-' : $data['off_name'];
                            },
                            'group' => true,
                        ],
                        [
                            'headerOptions' => ['class' => 'text-center'],
                            'contentOptions' => ['class' => 'text-center'],
                            //'options' => ['style' => 'width:30px;'],
                            'attribute' => 'distname',
                            'header' => 'อำเภอ',
                            'format' => 'html',
                            'value' => function($data) {
                                // ประกาศรับค่าตัวแปรจาก Controller 
                                // $cup_code = $data['cup_code']; 
                                // $distname = $data['distname']; 
                                // return Html::a(Html::encode($distname), 
                                //     [   
                                //         '/report/sumcup62', 
                                //         'cup_code' => $cup_code
                                //         ]);
                            return empty($data['distname']) ? '-' : $data['distname'];
                            },
                            'group' => true,
                        ],
                        [
                            'headerOptions' => ['class' => 'text-center'],
                            'contentOptions' => ['class' => 'text-right'],
                            //'options' => ['style' => 'width:30px;'],
                            'attribute' => 'total_value',
                            'header' => 'มูลค่ารวม (บาท)',
                            'format'=>['decimal', 0],
                            'value' => function($data) {
                                return empty($data['total_value']) ? '0' : $data['total_value'];
                            },
                            //'pageSummary' => true,
                        ],
                        [
                            'headerOptions' => ['class' => 'text-center'],
                            'contentOptions' => ['class' => 'text-center'],
                            //'options' => ['style' => 'width:30px;'],
                            'attribute' => 'report',
                            'header' => 'การรายงานผลการจัดหา',
                            'format'=>'html',
                            'value' => function($data) {
                                return ($data['report']==0) ? '<span class="label label-danger"> '.$data['report_name'].' </span>' 
                                 : '<span class="label label-success"> '.$data['report_name'].' </span>' ;
                                //return $data->report==1 ? '<span class="label label-success">Active</span>' : '<span class="label label-danger">ยังไม่รายงานผล</span>';
                            }
                            //'group' => true,
                        ],
                        // [
                        //     'headerOptions' => ['class' => 'text-center'],
                        //     'contentOptions' => ['class' => 'text-center'],
                        //     //'options' => ['style' => 'width:30px;'],
                        //     'attribute' => 'report_name',
                        //     'header' => 'การรายงานผลการจัดหา',
                        //     'format'=>'html',
                        //     'value' => function($data) {
                        //         return empty($data['report_name']) ? '-' : $data['report_name'];
                        //     },
                        //     //'group' => true,
                        // ],
                    ]
                ]);
                ?>
        </div>
    </div>
