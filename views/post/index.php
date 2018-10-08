<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\ArrayHelper;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PostFormComputer */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'รายการจัดหาระบบคอมพิวเตอร์ภาครัฐฯ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-computer-index">

    <h2 class="thsb f40p"><?= Html::encode($this->title) ?></h2>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('แบบฟอร์มบันทึกการจัดหาระบบคอมพิวเตอร์ภาครัฐ', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <div class="panel panel-info">

        <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="glyphicon glyphicon-signal"></i>
                    รายการจัดหาระบบคอมพิวเตอร์ภาครัฐ</h3>
            </div>

        <?= GridView::widget([
                'dataProvider' => $dataProvider,
                //'filterModel' => $searchModel,
                'pjax' => true,
                
                'columns' => [                    
                    [
                        'headerOptions' => ['class' => 'text-center'],
                        'contentOptions' => ['class' => 'text-center'],
                        'options' => ['style' => 'width:20px;'],
                        'class' => 'yii\grid\SerialColumn',
                        'header' => 'ลำดับที่',
                    ],

                    //'id',
                    'project_name',
                    //'year_budget',
                    //'total_budget',
                    'month_approve',
                    'hoscode',
                    //'cupcode',
                    //'distid',
                    'hw_id',
                    'quantity',
                    'price',
                    //'sum_price',
                    //'new_hw',
                    //'replace_hw',
                    //'year_install',
                    //'note',

                    [
                        'class' => 'yii\grid\ActionColumn',
                        'template'=>'{copy} {view} {update} {delete}',
                        'buttons'=>[
                            'copy' => function($url,$model,$key){
                                return Html::a('<i class="glyphicon glyphicon-duplicate"></i>',$url);
                            }
                        ]
                    ],
                ],
            ]); ?>
    </div>
        

</div>
