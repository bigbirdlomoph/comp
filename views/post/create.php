<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\FormComputer */

$this->title = 'แบบฟอร์มรายงานการจัดหาระบบคอมพิวเตอร์ภาครัฐมูลค่าไม่เกิน ๕ ล้านบาท';
$this->params['breadcrumbs'][] = ['label' => 'แบบฟอร์มรายงานการจัดหา', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-computer-create">

    <!-- <h2 class="thsb f40p"><?= Html::encode($this->title) ?></h2> -->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
