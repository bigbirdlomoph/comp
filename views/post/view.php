<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\FormComputer */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Form Computers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-computer-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id, 'hoscode' => $model->hoscode, 'hw_id' => $model->hw_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id, 'hoscode' => $model->hoscode, 'hw_id' => $model->hw_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'project_name',
            'year_budget',
            'money_source',
            'hoscode',
            'cupcode',
            'hw_id',
            'procurement',
            'location_ins',
            'quantity',
            'old_hw_name',
            'post_old_hw',
            'year_install',
            'problem',
            'description_hw',
            'workload_hw',
            'it_staff',
        ],
    ]) ?>

</div>
