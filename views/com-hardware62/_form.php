<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ComHardware62 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="com-hardware62-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'hw_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hw_detail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'unit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hw_group_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hw_detail_id')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
