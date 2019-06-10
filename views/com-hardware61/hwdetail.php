<?php

use miloschuman\highcharts\Highcharts;
use yii\bootstrap\ActiveForm;
use kartik\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'คุณลักษณะพื้นฐาน';
$this->params['breadcrumbs'][] = $this->title;

$datas = $dataProvider->getModels(); // get data from dataProvider

?>

    <div class="col-md-12 col-xs-12">
        <div class="body-content">
        <div class="panel-heading">
                <h1 class="panel-title"> <?= $datas[0]['hw_detail'] ?> ราคา <?= $datas[0]['price'] ?> บาท </h1> 
        </div>
            <?php
                if (isset($dataProvider))
                echo GridView::widget([
                    'dataProvider' => $dataProvider,
                    'hover' => TRUE,
                    'panel'=>['type'=>'primary', 
                        'heading' => 'คุณลักษณะพื้นฐาน' ],
                    'summary'=>'',
                    'columns' => [
                        [
                            'headerOptions' => ['class' => 'text-center'],
                            'contentOptions' => ['class' => 'text-left'],
                            'options' => ['style' => 'word-wrap:break-word'],
                            'attribute' => 'hw_detail_name',
                            'header' => 'คุณลักษณะพื้นฐาน',
                            'format' => 'raw',
                            'value' => function($data) { 
                                return empty($data['hw_detail_name']) ? '-' : $data['hw_detail_name']; 
                            }
                        ],
                    ]
                ]);
                ?>
        </div>
        <p>
            <?= Html::a('กลับหน้าค้นหา', ['/com-hardware61/index'], ['class' => 'btn btn-primary']) ?>
        </p>               
    </div>