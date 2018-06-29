<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
//use yii\widgets\ActiveForm;
use yii\bootstrap\ActiveForm;
use app\models\CoOffice;
use app\models\ComHardware;
use app\models\ComMonthApprove;
use app\models\ComYbudget;
use app\models\ComMoneySource;

use unclead\widgets\MultipleInput;
use unclead\widgets\MultipleInputColumn;

/* @var $this yii\web\View */
/* @var $model app\models\FormComputer */
/* @var $form yii\widgets\ActiveForm */

    //ซ่อน-แสดง input ตามเงื่อนไข
    $this->registerJs("
    var input1 = 'input[name=\"FormComputer[hw_id]\"]';
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
<?php $this->registerJs('
            $("#order-items").on("afterAddRow", function(e){
                //console.log("test");
                
            });
            $.fn.init_change = function(){
                
                var product_id = $(this).val();
                
                $.get(
                    "'.Url::toRoute('/site/product-detail').'",
                    {
                        id: hw_id
                    },
                    function (data)
                    {
                        var result = data.split("-");
                                   
                        $(".field-order-items-"+sid[2]+"-hw_detail").text(result[0]);
                        $(".field-order-items-"+sid[2]+"-price").text(result[1]);
            
                    }
                );
            
            };
       
        ')?>


<div class="form-computer-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="panel panel-primary">
        <div class="panel-body">
            <h3 class="thsb f40p text-center"> แบบฟอร์มรายงานการจัดหาระบบคอมพิวเตอร์ภาครัฐ</h3>
            <h3 class="thsb f30p"> ก. ข้อมูลทั่วไป</h3>

            <div class="row">
                <div class="col-sm-4 col-md-4">
                    <?= $form->field($model, 'hoscode')->dropdownList(
                        ArrayHelper::map(CoOffice::find()->all(),
                        'off_id', 'off_name'),
                        [
                            'id'=>'hoscode',
                            'prompt'=>'เลือกหน่วยบริการ'
                        ]); ?>
                </div>

                <div class="col-sm-8 col-md-8">
                    <?= $form->field($model, 'project_name')->textInput(['maxlength' => true]) ?>
                </div>

                <div class="col-sm-3 col-md-3">
                    <?= $form->field($model, 'year_budget')->dropdownList(
                        ArrayHelper::map(ComYbudget::find()->all(),
                        'year_budget',
                        'year_budget'),
                        [
                            'id'=>'year_budget',
                            'prompt'=>'-กรุณาเลือก-'
                        ]); ?>
                </div>
                <div class="col-sm-3 col-md-3">
                    <?= $form->field($model, 'total_budget')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-sm-3 col-md-3">
                    <?= $form->field($model, 'money_source')->dropdownList(
                        ArrayHelper::map(ComMoneySource::find()->all(),
                        'ms_code',
                        'ms_name'),
                        [
                            'id'=>'ms_code',
                            'prompt'=>'-กรุณาเลือก-'
                        ]); ?>
                </div>                
                <div class="col-sm-3 col-md-3">
                    <?= $form->field($model, 'month_approve')->dropdownList(
                        ArrayHelper::map(ComMonthApprove::find()->all(),
                        'month_mm',
                        'month_name'),
                        [
                            'id'=>'month_mm',
                            'prompt'=>'-กรุณาเลือก-'
                        ]); ?>
                </div>

                <div class="col-sm-8 col-md-8">
                    <?= $form->field($model, 'hw_id')->dropdownList(
                        ArrayHelper::map(ComHardware::find()->all(),
                        'hw_id',
                        'hw_detail'),
                        [
                            'id'=>'hw_id',
                            'prompt'=>'เลือกครุภัณฑ์คอมพิวเตอร์'
                        ]); ?>
                </div>
                <div class="col-sm-1 col-md-1">
                    <?= $form->field($model, 'quantity')->textInput(['maxlength' => true]) ?>
                </div>
                
                <div class="panel-body col-sm-12 col-md-12">
                <h3 class="thsb f30p"> ข. ข้อมูลเฉพาะกรณี</h3>

                    <div class="col-sm-3 col-md-3">
                        <?= $form->field($model, 'new_hw')->textInput(['maxlength' => true]) ?>
                    </div>
                    <div class="col-sm-3 col-md-3">
                        <?= $form->field($model, 'replace_hw')->textInput(['maxlength' => true]) ?>
                    </div>
                    <div class="col-sm-3 col-md-3">
                        <?= $form->field($model, 'year_install')->textInput(['maxlength' => true]) ?>
                    </div>
                    <!--
                    <div class="col-sm-3 col-md-3">
                        <?= $form->field($model, 'note')->textInput(['maxlength' => true]) ?>
                    </div>
                    -->
                </div>

            </div>

        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'บันทึก' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
