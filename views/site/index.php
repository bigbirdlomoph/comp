<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\Url;
$this->title = 'CSPC';
?>
<div class="site-index">

    <div class="jumbotron">
        <div class="thsb f34p">
            คณะกรรมการจัดหาระบบคอมพิวเตอร์ สำนักงานสาธารณสุขจังหวัดเลย
        </div>
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
        <!--
        <div class="item active" style="margin-top: 15px">
            <?=Html::img(Yii::getAlias('@web').'/img/Flow-Comp_CCTV_61.png', ['class' => 'img-responsive-center', 'width' => 900, 'height' => 600])?>
            <?=Html::img(Yii::getAlias('@web').'/img/TimeLineComp.jpg', ['class' => 'img-responsive-center', 'width' => 500, 'height' => 300])?>
            <div class="carousel-caption">  ppp  </div>
        </div> -->
    </div>

    <div class="body-content">
        <!-- computer -->
        <div class="list-group thsb f22p col-sm-6">
            <a class="list-group-item active">การจัดหาระบบคอมพิวเตอร์ภาครัฐ </a>
            <a href="https://drive.google.com/file/d/1-WvEbFhHd9dsMwTm5_4oUXrZGpaBlNmK/view?usp=sharing" target="_blank" class="list-group-item">
                - เกณฑ์ราคากลางและคุณลักษณะพื้นฐานครุภัณฑ์คอมพิวเตอร์ ประจำปี พ.ศ. 2560 </a>

            <a href="https://drive.google.com/file/d/1cqQVaO_H1l6Mx70CavFf5GsMfw9ccHCi/view?usp=sharing" target="_blank" class="list-group-item">
                - แบบฟอร์มรายงานการจัดหาระบบคอมพิวเตอร์ฯ ไม่เกิน 5 ล้านบาท <i class="fa fa-file-word-o" aria-hidden="true"></i>
                <?=Html::img(Yii::getAlias('@web').'/img/new.gif')?>
            </a>
            <a href="https://drive.google.com/drive/folders/0B9e-qx85JSYkWTY2c3JsRnFCREk?usp=sharing" target="_blank" class="list-group-item">
                - แบบรายงานผล การจัดหาระบบคอมพิวเตอร์ภาครัฐ <i class="fa fa-file-excel-o" aria-hidden="true"></i>
            </a>
            <a href="https://drive.google.com/file/d/1R-c6tEV8-ZNcJ3UsUlp71oANKwtsa-yk/view?usp=sharing" target="_blank" class="list-group-item">
                - ตัวอย่าง แบบฟอร์มการจัดหาระบบคอมพิวเตอร์ฯ ที่มีในเกณฑ์ราคากลาง <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
            </a>
            <a href="https://drive.google.com/file/d/1_2eB2e1idoN1ViC7bYHt2cAiKxMqhlu7/view?usp=sharing" target="_blank" class="list-group-item">
                - ตัวอย่าง แบบฟอร์มการจัดหาระบบคอมพิวเตอร์ฯ ที่ "ไม่มี" ในเกณฑ์ราคากลาง <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
            </a>
        </div>
        
        <div class="list-group thsb f22p col-sm-6">
            <a class="list-group-item active">การจัดหาระบบกล้องโทรทัศน์วงจรปิด (CCTV) </a>
            <a href="https://drive.google.com/file/d/1iIDX4kM1_7n1RJFKIV_qw_yWuzxztGh5/view?usp=sharing" target="_blank" class="list-group-item">
                มติคณะรัฐมนตรี การจัดหาระบบกล้องโทรทัศน์วงจรปิด (CCTV)
            </a>
            <a href="https://drive.google.com/file/d/1E1LL2fXFPmRUEev3FOlG1bGaHozvMhHm/view?usp=sharing" target="_blank" class="list-group-item">
                - เกณฑ์ราคากลางและคุณลักษณะพื้นฐานระบบ CCTV กระทรวง MDES ประจําปี พ.ศ.2559 <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
            </a>
            <a href="https://drive.google.com/file/d/1kSfDt6GnyvmuOzewkeQv1ONdETiVAZrk/view?usp=sharing" target="_blank" class="list-group-item">
                - คุณลักษณะพื้นฐานของระบบ CCTV จ.เลย ประจำปี พ.ศ. 2560 <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                <?=Html::img(Yii::getAlias('@web').'/img/new.gif')?>
            </a>
            <a href="https://drive.google.com/file/d/1mv190AtDKmUinrhn_zkLEzyF9EWa7HCZ/view?usp=sharing" target="_blank" class="list-group-item">
                - ตัวอย่าง แบบฟอร์มการจัดหาระบบกล้องโทรทัศน์วงจรปิด (CCTV) <i class="fa fa-file-word-o" aria-hidden="true"></i>
                <?=Html::img(Yii::getAlias('@web').'/img/new.gif')?>
            </a>
        </div>

        <!-- แถวแรก -->
        <!--<div class="row">
            <div class="col-lg-4">
                <h3 class="thsb f28p">คำสั่งแต่งตั้ง CIO ระดับจังหวัด</h3>

                <p class="thsb f20p">
                    นายแพทย์เชี่ยวชาญ (ด้านเวชกรรมป้องกัน) <br>
                    ปฏิบัติหน้าที่ ผู้บริหารเทคโนโลยีสารสนเทศระดับสูง <br>
                    ประจำสำนักงานสาธารณสุขจังหวัดเลย <br>
                    มีคณะกรรมการดำเนินงาน ดังนี้
                </p>

                <p>
                    <a class="btn btn-success thsb f18p" 
                       href='<?= Url::base()?>/docs/ScanJob.pdf'>
                        อ่านต่อ...
                    </a>
                </p>
            </div>
            <div class="col-lg-4">
                <h3 class="thsb f28p">ระเบียบกระทรวงสาธารณสุข</h3>

                <p class="thsb f20p">ระเบียบกระทรวงสาธารณสุข <br>
                    ว่าด้วยการบริหารและจัดหาระบบคอมพิวเตอร์ ของกระทรวงสาธารณสุข พ.ศ. ๒๕๕๙
                </p>

                <p>
                    <a class="btn btn-success thsb f18p" 
                       href="https://drive.google.com/file/d/0B9e-qx85JSYkNW1ZZ0xEcUVUTUE/view?usp=sharing" target="_blank" 
                       data-toggle="tooltip" data-placement="top" title="ระเบียบกระทรวงสาธารณสุข" > 
                       Download &raquo;
                    </a>
                </p>
            </div>
            <div class="col-lg-4">
                <h3 class="thsb f28p">ตัวอย่างการเขียนแบบฟอร์มรายงาน</h3>

                <p class="thsb f20p">ตัวอย่างการเขียนแบบฟอร์มรายงาน</p>

                <p>
                    <a class="btn btn-success" 
                       href="https://drive.google.com/drive/folders/0B9e-qx85JSYkUVgyX09LYmQ3Qms?usp=sharing" target="_blank">
                        ดูตัวอย่าง.. &raquo;
                    </a>
                </p>
            </div>
        </div>
        
        <!-- แถวสอง -->
        <!--<div class="row">
            <div class="col-lg-4">
                <h3 class="thsb f28p">เรื่องที่จะพิจารณา เดือนพฤษภาคม ๒๕๖๐</h3>

                <p class="thsb f20p">
                    ๑.รพ.ปากชม วงเงิน บาท<br>
                    ๒.รพ.หนองหิน  วงเงิน บาท<br>
                    ๓.สสอ.ผาขาว  <br>
                    &nbsp;  ๓.๑ รพ.สต.เพิ่มสุข วงเงิน ๑,๔๐๐ บาท <br>
                    &nbsp;  ๓.๒ รพ.สต.สมศักดิ์พัฒนา  วงเงิน ๒๖,๙๐๐ บาท<br>
                
                </p>

                <p>
                    <a class="btn btn-success" 
                       href="https://drive.google.com/drive/folders/0B9e-qx85JSYkUVgyX09LYmQ3Qms?usp=sharing" target="_blank">
                        ดูตัวอย่าง.. &raquo;
                    </a>
                </p>
            </div>
            <div class="col-lg-4">
                <h3 class="thsb f30p">เรื่องที่จะพิจารณา เดือนมิถุนายน ๒๕๖๐</h3>

                <p class="thsb f20p">
                    ๑. <br>
                    ๒. <br>
                    ๓. <br>
                </p>

                <!--<p>
                    <a class="btn btn-success thsb f18p" 
                       href="#" target="_blank"> 
                       Download &raquo;
                    </a>
                </p>-->
            <!--</div>
            <div class="col-lg-4">
                <h3 class="thsb f28p">หัวข้อ</h3>

                <p class="thsb f20p">เนื้อเรื่อง เนื้อหา</p>

                <p>
                    <a class="btn btn-success thsb f18p" 
                       href="#" target="_blank">
                        Download &raquo;
                    </a>
                </p>
            </div>
        </div>-->

    </div>
</div>

