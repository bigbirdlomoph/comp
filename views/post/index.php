<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\PostFormComputer */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Form Computers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-computer-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Form Computer', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'project_name',
            'year_budget',
            'money_source',
            'hoscode',
            // 'cupcode',
            // 'hw_id',
            // 'procurement',
            // 'location_ins',
            // 'quantity',
            // 'old_hw_name',
            // 'post_old_hw',
            // 'year_install',
            // 'problem',
            // 'description_hw',
            // 'workload_hw',
            // 'it_staff',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
