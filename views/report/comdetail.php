<?php

//use yii\grid\GridView;
use miloschuman\highcharts\Highcharts;
use yii\bootstrap\ActiveForm;
use kartik\grid\GridView;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;


$this->title = 'รายละเอียด (ในเกณฑ์ราคากลาง)';
$this->params['breadcrumbs'][] = $this->title;

?>
    <!-- ส่วนแสดง Grid View Kartik-->
<?php /*
    echo "<pre>";
    print_r($dataProvider);
    echo "</pre>";
    */
?>
    
    <div class="col-md-12 col-xs-12">
        <div class="body-content">
            <?php
                echo "หน่วยบริการ : "; 
            ?>
        </div>
    </div>

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
                        [
                            'headerOptions' => ['class' => 'text-center'],
                            'contentOptions' => ['class' => 'text-center'],
                            'options' => ['style' => 'width:20px;'],
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
                            //return Html::a(Html::encode($areaname), ['/report/dmctrlhos', 'areacode' => $areacode]);
                            return empty($data['off_name']) ? '-' : $data['off_name'];
                            }
                        ],
                        [
                            'headerOptions' => ['class' => 'text-center'],
                            'contentOptions' => ['class' => 'text-left'],
                            'options' => ['style' => 'width:40px;'],
                            'attribute' => 'hw_detail',
                            'header' => 'ครุภัณฑ์คอมพิวเตอร์',
                            'format' => 'raw',
                            'value' => function($data) { 
                            //$off_name = $data['off_name']; // ประกาศรับค่าตัวแปรจาก Controller
                            //$hoscode = $data['hoscode']; // ประกาศรับค่าตัวแปรจาก Controller
                            //return Html::a(Html::encode($areaname), ['/report/dmctrlhos', 'areacode' => $areacode]);
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
                            //$off_name = $data['off_name']; // ประกาศรับค่าตัวแปรจาก Controller
                            //$hoscode = $data['hoscode']; // ประกาศรับค่าตัวแปรจาก Controller
                            //return Html::a(Html::encode($areaname), ['/report/dmctrlhos', 'areacode' => $areacode]);
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
                            //$off_name = $data['off_name']; // ประกาศรับค่าตัวแปรจาก Controller
                            //$hoscode = $data['hoscode']; // ประกาศรับค่าตัวแปรจาก Controller
                            //return Html::a(Html::encode($areaname), ['/report/dmctrlhos', 'areacode' => $areacode]);
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
