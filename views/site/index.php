<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\Url;
$this->title = 'CSPC';
?>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<div class="site-index">

    <div class="jumbotron">
        <div class="thsb f30p">
            คณะกรรมการบริหารระบบคอมพิวเตอร์และ CCTV สำนักงานสาธารณสุขจังหวัดเลย
            </div>
        
            <!-- Page Content -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel" style="max-width: 900px; margin: 0 auto; padding-left: 0; padding-right: 0;">
            <!-- Indicators -->
            <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
            </ol>
            
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">

            <!-- <div class="item">
                <img src="img/Flow-Comp_CCTV_61.png" alt="กระบวนการบริหารระบบคอมพิวเตอร์ภาครัฐ">
            </div>  -->

                <div class="item active">
                    <img src="img/New_Flow_Com_In.png" alt="กระบวนการบริหารระบบคอมพิวเตอร์ภาครัฐ (กรณีมีในเกณฑ์ราคากลาง)">
                </div> 

                <div class="item">
                    <img src="img/New_Flow_Com_Out.png" alt="กระบวนการบริหารระบบคอมพิวเตอร์ภาครัฐ (กรณีไม่ตรงเกณฑ์/CCTV)">
                </div> 
            
                <!-- <div class="item">
                    <img src="img/Flow-ictprocure.png" alt="Flow การยื่นคำขอผ่านระบบ ictprocure">
                </div> -->

                </div>
            
                <!-- Left and right controls -->
                <!--<a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
                </a>-->
        </div>
    </div>

       

    <div class="body-content">
        <!-- computer -->
        <div class="list-group thsb f22p col-sm-12">
            <a class="list-group-item active">การจัดหาระบบคอมพิวเตอร์ภาครัฐ </a>

            <a href="https://drive.google.com/file/d/1AkeXPce6FMSVxwtPjgxhCnJJkRhC4u27/view?usp=sharing" target="_blank" class="list-group-item">
                - ระเบียบกระทรวงสาธารณสุขว่าด้วยการบริหารและจัดหาระบบคอมพิวเตอร์ พ.ศ.2561 <i class="fa fa-file-pdf-o" aria-hidden="true"></i>

            </a>

            <a href="https://drive.google.com/file/d/1VtOGmuX8-BYS94vJlwWWGpknDbzkzYfH/view?usp=sharing" target="_blank" class="list-group-item">
                - เกณฑ์ราคากลางและคุณลักษณะพื้นฐานคอมพิวเตอร์ ประจำปี พ.ศ. 2562 (15 มี.ค. 2562) <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                <?=Html::img(Yii::getAlias('@web').'/img/new.gif')?>
            </a>
            
            <a href="https://drive.google.com/file/d/1cqQVaO_H1l6Mx70CavFf5GsMfw9ccHCi/view?usp=sharing" target="_blank" class="list-group-item">
                - แบบฟอร์ม การจัดหาระบบคอมพิวเตอร์ฯ ไม่เกิน 5 ล้านบาท (ไม่มีในเกณฑ์ราคากลาง) <i class="fa fa-file-word-o" aria-hidden="true"></i>
            </a>

            <a href="https://drive.google.com/file/d/1vNcx4PzCb9PGe60tKl23sDGRiL11NGn4/view?usp=sharing" target="_blank" class="list-group-item">
                - ตัวอย่าง แบบฟอร์มการจัดหาระบบคอมพิวเตอร์ฯ ที่ "ไม่มี" ในเกณฑ์ราคากลาง <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                <?=Html::img(Yii::getAlias('@web').'/img/new.gif')?>
            </a>
            
            <a href="https://drive.google.com/file/d/1aQDKBU3aeXrpSeH37d9pQ4MS7vBhs8ef/view?usp=sharing" target="_blank" class="list-group-item">
                - ตัวอย่าง และแบบรายงานผล การจัดหาระบบคอมพิวเตอร์ภาครัฐ <i class="fa fa-file-excel-o" aria-hidden="true"></i>
                <?=Html::img(Yii::getAlias('@web').'/img/new.gif')?>
            </a>
            
            <a href="https://ictprocure.moph.go.th" target="_blank" class="list-group-item">
                - การจัดหาระบบคอมพิวเตอร์ฯ ที่มีในเกณฑ์ราคากลาง สามารถบันทึกคำขอในระบบ ictprocure.moph.go.th ตามหนังสือ สสจ.เลย ที่ ลย 0032.002/ว1921 ลว 12 ธ.ค. 2561 
            </a>
            
            
            </div>
        
        <div class="list-group thsb f22p col-sm-12">
            <a class="list-group-item active">การจัดหาระบบกล้องโทรทัศน์วงจรปิด (CCTV) </a>
            <a href="https://drive.google.com/file/d/1iIDX4kM1_7n1RJFKIV_qw_yWuzxztGh5/view?usp=sharing" target="_blank" class="list-group-item">
                - มติคณะรัฐมนตรี การจัดหาระบบกล้องโทรทัศน์วงจรปิด (CCTV)
            </a>
            <a href="https://drive.google.com/file/d/1E1LL2fXFPmRUEev3FOlG1bGaHozvMhHm/view?usp=sharing" target="_blank" class="list-group-item">
                - เกณฑ์ราคากลางและคุณลักษณะพื้นฐานระบบ CCTV กระทรวง MDES ประจําปี พ.ศ.2559 <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
            </a>
            <a href="https://drive.google.com/file/d/1kSfDt6GnyvmuOzewkeQv1ONdETiVAZrk/view?usp=sharing" target="_blank" class="list-group-item">
                - คุณลักษณะพื้นฐานของระบบ CCTV จ.เลย ประจำปี พ.ศ. 2560 <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                <!-- <?=Html::img(Yii::getAlias('@web').'/img/new.gif')?> -->
            </a>
            <a href="https://drive.google.com/file/d/1mv190AtDKmUinrhn_zkLEzyF9EWa7HCZ/view?usp=sharing" target="_blank" class="list-group-item">
                - ตัวอย่าง แบบฟอร์มการจัดหาระบบกล้องโทรทัศน์วงจรปิด (CCTV) <i class="fa fa-file-word-o" aria-hidden="true"></i>
                <!-- <?=Html::img(Yii::getAlias('@web').'/img/new.gif')?> -->
            </a>
            </div>
        
        </div>

    </div>

</div>

