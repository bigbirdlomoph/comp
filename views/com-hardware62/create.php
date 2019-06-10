<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ComHardware62 */

$this->title = Yii::t('app', 'Create Com Hardware62');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Com Hardware62s'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="com-hardware62-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
