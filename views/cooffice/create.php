<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CoOffice */

$this->title = Yii::t('app', 'Create Co Office');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Co Offices'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="co-office-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
