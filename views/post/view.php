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
                'confirm' => 'คุณต้องการลบ record นี้ ใช่ไหม?',
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
        ],
    ]) ?>

</div>
