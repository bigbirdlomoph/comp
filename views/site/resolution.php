<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'แนวทางปฏิบัติการจัดหาระบบคอมพิวเตอร์';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-resolution">
    <div class="jumbotron">
        <div class="item active">
        <!--<img src="img/logo_MOPH.png" alt="...">-->
        <?=Html::img(Yii::getAlias('@web').'/img/Flow-Comp_CCTV_61.png', ['class' => 'img-responsive-center', 'width' => 900, 'height' => 600])?>
            <div class="carousel-caption">
                <!--caption-->
            </div>
        </div>
    
        <h2 class="thsb f18p"></h2>

        <div class="item active">
            <!--<img src="img/logo_MOPH.png" alt="...">-->
            <?=Html::img(Yii::getAlias('@web').'/img/TimeLineComp.jpg', ['class' => 'img-responsive-center', 'width' => 500, 'height' => 300])?>
            <div class="carousel-caption">
                <!--caption-->
            </div>
        </div>

        <!--<code><?= __FILE__ ?></code>-->
    </div>
</div>