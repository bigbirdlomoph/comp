<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FormcomreportSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-com-report-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'hoscode') ?>

    <?= $form->field($model, 'hw_id') ?>

    <?= $form->field($model, 'year_budget') ?>

    <?= $form->field($model, 'project_name') ?>

    <?= // $form->field($model, 'hw_detail') ?>

    <?= $form->field($model, 'report') ?>

    <?php // echo $form->field($model, 'recognize') ?>

    <?php // echo $form->field($model, 'allocate') ?>

    <?php // echo $form->field($model, 'qty') ?>

    <?php // echo $form->field($model, 'unit') ?>

    <?php // echo $form->field($model, 'summary') ?>

    <?php // echo $form->field($model, 'company') ?>

    <?php // echo $form->field($model, 'brand') ?>

    <?php // echo $form->field($model, 'reference') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'ค้นหา'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'ล้าง'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
