<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
//use yii\widgets\ActiveForm;
use yii\bootstrap\ActiveForm;
use app\models\CoOffice;
use app\models\ComHardware;

/* @var $this yii\web\View */
/* @var $model app\models\FormComputer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-computer-form ths f22p">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-sm-8 col-md-8">
            <?= $form->field($model, 'project_name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-4 col-md-4">
            <?= $form->field($model, 'year_budget')->textInput(['maxlength' => true]) ?>
        </div>
        
        <div class="col-sm-3 col-md-3">
            <?= $form->field($model, 'year_month')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-3 col-md-3">
            <?= $form->field($model, 'hoscode')->dropdownList(
                ArrayHelper::map(CoOffice::find()->all(),
                'off_id',
                'off_name'),
                [
                    'id'=>'hoscode',
                    'prompt'=>'เลือกหน่วยบริการ'
                ]); ?>
        </div>
        <div class="col-sm-3 col-md-3">
            <?= $form->field($model, 'cupcode')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-3 col-md-3">
            <?= $form->field($model, 'distid')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-sm-3 col-md-3">
            <?= $form->field($model, 'hw_id')->dropdownList(
                ArrayHelper::map(ComHardware::find()->all(),
                'hw_id',
                'hardware_detail'),
                [
                    'id'=>'hw_id',
                    'prompt'=>'เลือกครุภัณฑ์คอมพิวเตอร์'
                ]); ?>
        </div>
        <div class="col-sm-3 col-md-3">
            <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-3 col-md-3">
            <?= $form->field($model, 'quantity')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-3 col-md-3">
            <?= $form->field($model, 'sum_price')->textInput(['maxlength' => true]) ?>
        </div>
        
        <div class="col-sm-3 col-md-3">
            <?= $form->field($model, 'new_hw')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-3 col-md-3">
            <?= $form->field($model, 'replace_hw')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-3 col-md-3">
            <?= $form->field($model, 'year_install')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-3 col-md-3">
            <?= $form->field($model, 'note')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'บันทึก' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
