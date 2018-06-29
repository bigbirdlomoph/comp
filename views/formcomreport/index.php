<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\FormcomreportSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'แบบรายงานผลการจัดหาระบบคอมฯ');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="form-com-report-index">

    <h2 class="thsb f40p"><?= Html::encode($this->title) ?></h2>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'บันทึกแบบรายงานผล'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>    <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                //'id',
                'hoscode',
                'year_budget',
                'project_name',
                'hw_id',
                //'hw_detail',
                'report',
                'recognize',
                'allocate',
                'qty',
                'unit',
                'summary',
                'company',
                'brand',
                'reference',

                [
                    'class' => 'yii\grid\ActionColumn',
                    'options'=>['style'=>'width:50px;'],
                    'buttonOptions'=>['class'=>'btn btn-primary'],
                    'template'=>'<div class="btn-group btn-group-sm text-center" role="group"> {view} {update} {delete} </div>'
                ],
            ]
        ]); ?>
    <?php Pjax::end(); ?></div>
