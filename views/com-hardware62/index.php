<?php


use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ComHardware62Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'เกณฑ์ราคากลางและคุณลักษณะพื้นฐานครุภัณฑ์คอมพิวเตอร์ ประจำปี พ.ศ. 2562');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="com-hardware62-index">

    <h3><?= Html::encode($this->title) ?></h3>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
       <!-- <?= Html::a(Yii::t('app', 'Create Com Hardware62'), ['create'], ['class' => 'btn btn-success']) ?> -->
    </p>

        <?php echo $this->render('_search', ['model' => $searchModel]); ?>
    <br>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'hw_id',
            //'hw_detail',
            [
                'headerOptions' => ['class' => 'text-center'],
                'contentOptions' => ['class' => 'text-left'],
                'attribute' => 'hw_detail',
                'header' => 'รายการครุภัณฑ์คอมพิวเตอร์',
                'format' => 'raw',
                'value' => function($data) { 
                $hw_id = $data['hw_id']; // ประกาศรับค่าตัวแปรจาก Controller
                $hw_detail = $data['hw_detail']; // ประกาศรับค่าตัวแปรจาก Controller
                return Html::a(Html::encode($hw_detail), ['/com-hardware62/hwdetail62', 'hw_id' => $hw_id]);
                return empty($data['hw_detail']) ? '-' : $data['hw_detail'];
                }
            ],
            [
                'headerOptions' => ['class' => 'text-center'],
                'contentOptions' => ['class' => 'text-right'],
                'options' => ['style' => 'width:30px;'],
                'attribute' => 'price',
                'header' => 'ราคากลาง (บาท)',
                'format'=>['decimal', 0],
                'value' => function($data) {
                    return empty($data['price']) ? '-' : $data['price'];
                }
            ],
            [
                'headerOptions' => ['class' => 'text-center'],
                'contentOptions' => ['class' => 'text-right'],
                'options' => ['style' => 'width:20px;'],
                'attribute' => 'unit',
                'header' => 'หน่วย',
                'format'=>['html'],
                'value' => function($data) {
                    return empty($data['unit']) ? '-' : $data['unit'];
                }
            ],

            //'price',
            //'unit',
            //'hw_group_id',
            //'hw_detail_id',

            //['class' => 'yii\grid\ActionColumn'],
            //[
            //'class' => 'yii\grid\ActionColumn',
            //    'options'=>['style'=>'width:120px;'],
            //    'buttonOptions'=>['class'=>'btn btn-default'],
            //    'template'=>'<div class="btn-group btn-group-sm text-center" role="group"> {view} {update} {delete} </div>'
            // ],
        ],
    ]); ?>
    <?php Pjax::end(); ?>

</div>
