<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\FormComReport */

//$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'รายงานผลการจัดหาฯ'), 'url' => ['index']];
 $this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-com-report-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'แก้ไข'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'ลบ'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'คุณต้องการลบข้อมูลนี้ ใช่ หรือ ไม่ ?'),
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a(Yii::t('app', 'บันทึกแบบรายงานผล'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'hoscode',
            'hw_id',
            'year_budget',
            'project_name',
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
        ],
    ]) ?>

</div>
