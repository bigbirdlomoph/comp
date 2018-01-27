<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'คณะกรรมการบริหารและจัดหาระบบคอมพิวเตอร์ สำนักงานสำธารณสุขจังหวัดเลย';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <div class="jumbotron">
        <div class="item active">
            <!--<img src="img/logo_MOPH.png" alt="...">-->
            <?=Html::img(Yii::getAlias('@web').'/img/logo_MOPH.png', ['class' => 'img-responsive-center', 'width' => 200, 'height' => 200])?>
            <div class="carousel-caption">
                <!--caption-->
            </div>
        </div>
        <h2 class="thsb f40p"><?= Html::encode($this->title) ?></h2>

        <div class="thsb f36p">
            CIO คณะกรรมการบริหารและจัดหาระบบคอมฯ สำนักงานสาธารณสุขจังหวัดเลย
        </div>

        <!--<code><?= __FILE__ ?></code>-->
    </div>
</div>
