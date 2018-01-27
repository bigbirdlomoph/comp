<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FormComputer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-computer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'project_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'year_budget')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'money_source')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hoscode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cupcode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hw_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'procurement')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'location_ins')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'quantity')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'old_hw_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'post_old_hw')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'year_install')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'problem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description_hw')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'workload_hw')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'it_staff')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
