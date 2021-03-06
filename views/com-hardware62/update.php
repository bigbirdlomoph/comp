<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ComHardware62 */

$this->title = Yii::t('app', 'Update Com Hardware62: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Com Hardware62s'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'hw_id' => $model->hw_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="com-hardware62-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
