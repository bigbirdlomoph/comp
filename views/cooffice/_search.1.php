<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CoOfficeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="co-office-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'off_id') ?>

    <?= $form->field($model, 'off_name') ?>

    <?= $form->field($model, 'off_type') ?>

    <?= $form->field($model, 'provid') ?>

    <?= $form->field($model, 'distid') ?>

    <?php // echo $form->field($model, 'subdistid') ?>

    <?php // echo $form->field($model, 'villid') ?>

    <?php // echo $form->field($model, 'villno') ?>

    <?php // echo $form->field($model, 'postcode') ?>

    <?php // echo $form->field($model, 'cup_code') ?>

    <?php // echo $form->field($model, 'pcu_code') ?>

    <?php // echo $form->field($model, 'pointx') ?>

    <?php // echo $form->field($model, 'pointy') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'updatedate') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
