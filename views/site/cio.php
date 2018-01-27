<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'CIO สสจ.';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-resolution">
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
            คณะกรรมการ การจัดหาระบบคอมพิวเตอร์ภาครัฐมูลค่าไม่เกิน ๕ ล้านบาท
        </div>

        <!--<code><?= __FILE__ ?></code>-->
    </div>

    <div class="list-group thsb f22p">
        <a class="list-group-item active">รายนามคณะกรรมการจัดหาระบบคอมพิวเตอร์และกล้องวงจรปิดภาครัฐ</a>
        <a href="#" class="list-group-item">นายรณรงค์ ศรีพล : ผู้บริหารเทคโนโลยีระดับสูง ประจำสำนักงานสาธารณสุขจังหวัดเลย <br>
            ตำแหน่ง ผู้อำนวยการโรงพยาบาลผาขาว นายแพทย์ชำนาญการพิเศษ (รองนายแพทย์ฯ ด้านเวชกรรมป้องกัน 2) </a>
        <a href="#" class="list-group-item">นายสมชาย ชมภูคำ : คณะกรรมการ <br>
            ตำแหน่ง ผู้อำนวยการโรงพยาบาลภูเรือ นายแพทย์ชำนาญการพิเศษ (รองนายแพทย์ฯ ด้านเวชกรรมป้องกัน 3)</a>
        <a href="#" class="list-group-item">นายวัชรากร อิ่มเอิบ : คณะกรรมการ <br>
            ตำแหน่ง สาธารณสุขอำเภอนาด้วง</a>
        <a href="#" class="list-group-item">น.ส.วีรยา มาตย์สุริย์ : คณะกรรมการ <br>
            ตำแหน่ง เจ้าพนักงานพัสดุชำนาญงาน</a>
        <a href="#" class="list-group-item">นายวรพงษ์ หลอดทอง : คณะกรรมการ <br>
            ตำแหน่ง นักวิชาการคอมพิวเตอร์(พ)</a>
        <a href="#" class="list-group-item">นายปิยะเทพ ศรพรหม : เลขานุการ <br>
            ตำแหน่ง นักวิชาการสาธารณสุขชำนาญการ</a>
        <a href="#" class="list-group-item">นายกัมปนาท บุตรจันทร์ : ผู้ช่วยเลขานุการ <br>
            ตำแหน่ง นักวิชาการคอมพิวเตอร์(พ)</a>
        <a href="#" class="list-group-item">นายสาคร สิงห์สุวรรณ์ : ผู้ช่วยเลขานุการ <br>
            ตำแหน่ง นักวิชาการคอมพิวเตอร์(พ)</a>
    </div>
    
</div>
