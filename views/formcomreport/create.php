<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\FormComReport */

$this->title = Yii::t('app', 'แบบฟอร์มรายงานผลการจัดหาระบบคอมพิวเตอร์ภาครัฐ');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'แบบรายงานผลการจัดหา'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-com-report-create">

    <!-- <h1 class="thsb f40p"><?= Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
