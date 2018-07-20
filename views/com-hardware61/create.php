<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ComHardware61 */

$this->title = Yii::t('app', 'เพิ่มรายการ');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Com Hardware61s'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="com-hardware61-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
