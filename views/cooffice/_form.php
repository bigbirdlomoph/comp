<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CoOffice */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="co-office-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'off_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'off_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'off_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'provid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'distid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subdistid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'villid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'villno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'postcode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cup_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pcu_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pointx')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pointy')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'updatedate')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
