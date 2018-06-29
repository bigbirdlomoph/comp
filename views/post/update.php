<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\FormComputer */

$this->title = 'Update Form Computer: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Form Computers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];//, 'hoscode' => $model->hoscode, 'hw_id' => $model->hw_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="form-computer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
