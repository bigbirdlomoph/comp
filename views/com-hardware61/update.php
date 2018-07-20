<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ComHardware61 */

$this->title = Yii::t('app', 'แก้ไขครุภัณฑ์คอมพิวเตอร์ ประจำปี พ.ศ.2561 ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Com Hardware61s'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'hw_id' => $model->hw_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="com-hardware61-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
