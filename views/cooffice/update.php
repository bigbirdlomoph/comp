<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CoOffice */

$this->title = Yii::t('app', 'Update Co Office: ' . $model->off_id, [
    'nameAttribute' => '' . $model->off_id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Co Offices'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->off_id, 'url' => ['view', 'id' => $model->off_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="co-office-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
