<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
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
        <?= Html::a('Create Form Computer', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'project_name',
            'year_budget',
            'year_month',
            'hoscode',
            'cupcode',
            'distid',
            'hw_id',
            'quantity',
            'price',
            'sum_price',
            'new_hw',
            'replace_hw',
            'year_install',
            'note',

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
<?php Pjax::end(); ?></div>
