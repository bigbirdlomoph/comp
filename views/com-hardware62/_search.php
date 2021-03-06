<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\ComHardware62;

/* @var $this yii\web\View */
/* @var $model app\models\ComHardware62Search */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="com-hardware62-search">

<?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => true
        ],
    ]); ?>

    <div class="input-group">
      <?= Html::activeTextInput($model, 'q',['class'=>'form-control','placeholder'=>'ค้นหาข้อมูล...']) ?>
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i> ค้นหา</button>
      </span>
    </div>

    <?php ActiveForm::end(); ?>

</div>
