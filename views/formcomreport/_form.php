<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\CoOffice;
use app\models\ComHardware;
use app\models\ComUnit;
use app\models\ComBrand;
use app\models\ComYbudget;

/* @var $this yii\web\View */
/* @var $model app\models\FormComReport */
/* @var $form yii\widgets\ActiveForm */
?>

<?php
$this->registerJs("
  var input1 = 'input[name=\"ComHardware[hw_id]\"]';
  
  setHideInput(3,$(input1).val(),'.field-blog-tag');
  
  $(input1).click(function(val){
    setHideInput(3,$(this).val(),'.field-blog-tag');
  });

  function setHideInput(set,value,objTarget)
  {
    console.log(set+'='+value);
      if(set==value)
      {
        $(objTarget).show(500);
      }
      else
      {
        $(objTarget).hide(500);
      }
  }
");
?>

<div class="form-com-report-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="panel panel-primary">
        <div class="panel-body">
                <h3 class="thsb f36p text-center"> แบบฟอร์มรายงานผลการจัดหาระบบคอมพิวเตอร์ภาครัฐ</h3>
                <h3 class="thsb f30p">ก. ข้อมูลทั่วไป</h3>
            <div class="row">

                <div class="panel-body">

                    <div class="col-sm-2 col-md-2">
                        <?= $form->field($model, 'hoscode')->dropdownList(
                            ArrayHelper::map(CoOffice::find()->all(),
                            'off_id',
                            'off_name'),
                            [
                                'id'=>'hoscode',
                                'prompt'=>'กรุณาเลือก'
                            ]); 
                        ?>
                    </div>
                        
                    <div class="col-sm-2 col-md-2">
                        <?= $form->field($model, 'reference')->textInput(['maxlength' => true]) ?>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <?= $form->field($model, 'project_name')->textInput(['maxlength' => true]) ?>
                    </div>

                    <div class="col-sm-2 col-md-2">
                        <?= $form->field($model, 'year_budget')->dropdownList(
                            ArrayHelper::map(ComYbudget::find()->all(),
                            'year_budget',
                            'year_budget'),
                            [
                                'id'=>'year_budget',
                                'prompt'=>'กรุณาเลือก'
                            ]); ?>
                    </div>

                </div>

                <div class="panel-body">
                    <h3 class="thsb f30p"> รายละเอียด</h3>
                    
                    <div class="col-sm-3 col-md-3">    
                        <?= $form->field($model, 'report')->textInput(['maxlength' => true]) ?>
                    </div>
                    <div class="col-sm-3 col-md-3">
                        <?= $form->field($model, 'recognize')->textInput(['maxlength' => true]) ?>
                    </div>
                    <div class="col-sm-3 col-md-3">
                        <?= $form->field($model, 'allocate')->textInput(['maxlength' => true]) ?>
                    </div>
                    <div class="col-sm-3 col-md-3">
                        <?= $form->field($model, 'summary')->textInput(['maxlength' => true]) ?>
                    </div>
                </div>

                <div class="panel-body">
                    
                    <div class="col-sm-6 col-md-6">
                        <?= $form->field($model, 'company')->textInput(['maxlength' => true]) ?>
                    </div>
                    <div class="col-sm-2 col-md-2">
                        <?= $form->field($model, 'brand')->dropdownList(
                            ArrayHelper::map(ComBrand::find()->all(),
                            'brand_id',
                            'brand_name'),
                            [
                                'prompt'=>'กรุณาเลือก'
                            ]); 
                        ?>
                    </div>
                </div>

            <!-- row -->    
            </div>
        <!-- panel body -->    
        </div>
    <!-- panel primary -->
    </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'ส่งรายงานผลการจัดหาฯ') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
    

    <?php ActiveForm::end(); ?>

</div>
