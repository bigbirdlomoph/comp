<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PostFormComputer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-computer-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'project_name') ?>

    <?= $form->field($model, 'year_budget') ?>

    <?= $form->field($model, 'money_source') ?>

    <?= $form->field($model, 'hoscode') ?>

    <?php // echo $form->field($model, 'cupcode') ?>

    <?php // echo $form->field($model, 'hw_id') ?>

    <?php // echo $form->field($model, 'procurement') ?>

    <?php // echo $form->field($model, 'location_ins') ?>

    <?php // echo $form->field($model, 'quantity') ?>

    <?php // echo $form->field($model, 'old_hw_name') ?>

    <?php // echo $form->field($model, 'post_old_hw') ?>

    <?php // echo $form->field($model, 'year_install') ?>

    <?php // echo $form->field($model, 'problem') ?>

    <?php // echo $form->field($model, 'description_hw') ?>

    <?php // echo $form->field($model, 'workload_hw') ?>

    <?php // echo $form->field($model, 'it_staff') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
