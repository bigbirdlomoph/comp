<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\FormComputer */

$this->title = 'Create Form Computer';
$this->params['breadcrumbs'][] = ['label' => 'Form Computers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-computer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
