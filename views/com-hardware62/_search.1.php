<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ComHardware62Search */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="com-hardware62-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'hw_id') ?>

    <?= $form->field($model, 'hw_detail') ?>

    <?= $form->field($model, 'price') ?>

    <?= $form->field($model, 'unit') ?>

    <?php // echo $form->field($model, 'hw_group_id') ?>

    <?php // echo $form->field($model, 'hw_detail_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
