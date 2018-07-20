<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use miloschuman\highcharts\Highcharts;
use kartik\grid\GridView;
use app\models\ComHardware61;

/* @var $this yii\web\View */
/* @var $model app\models\ComHardware61 */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'ค้นหาเกณฑ์ราคากลางและคุณลักษณะพื้นฐานครุภัณฑ์คอมพิวเตอร์ ประจำปี พ.ศ.2561';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="form-com-report-form">
    <?php $form = ActiveForm::begin(); ?>

    <div class="panel panel-primary">
        <div class="panel-body">
            <div class="col-sm-2 col-md-2">
                <?= $form->field($model, 'hw_detail')->dropdownList(
                    ArrayHelper::map(ComHardware61::find()->all(),
                    'hw_detail_id',
                    'hw_detail_id'),
                    [
                        'id'=>'hw_detail_id',
                        'prompt'=>'กรุณาเลือก'
                    ]); ?>
            </div>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'ค้นหา') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
    
    <?php ActiveForm::end(); ?>
</div>

