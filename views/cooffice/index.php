<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\CoOfficeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'ระบบค้นหาหน่วยบริการในจังหวัดเลย');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="co-office-index">
    
    <h3><?= Html::encode($this->title) ?></h3>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
       <!-- <?= Html::a(Yii::t('app', 'Create Co Office'), ['create'], ['class' => 'btn btn-success']) ?> -->
    </p>

    <?php echo $this->render('_search', ['model' => $searchModel]); ?>
    <br>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'off_id',
            'off_name',
            //'off_type',
            //'provid',
            'distid',
            //'subdistid',
            //'villid',
            //'villno',
            //'postcode',
            'cup_code',
            //'pcu_code',
            //'pointx',
            //'pointy',
            //'status',
            //'updatedate',

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
