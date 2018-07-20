<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\Url;
$this->title = 'CSPC';
?>
<div class="site-index">

    <div class="jumbotron">
        <div class="thsb f30p">
            คณะกรรมการบริหารระบบคอมพิวเตอร์และ CCTV สำนักงานสาธารณสุขจังหวัดเลย
        </div>
        <!-- Page Content -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel" style="max-width: 900px; margin: 0 auto; padding-left: 0; padding-right: 0;">
            <!-- Indicators -->
            <!-- <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol> -->
            
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="img/Flow-Comp_CCTV_61.png" alt="กระบวนการบริหารระบบคอมพิวเตอร์ภาครัฐ">
            </div> 
            
            <!-- <div class="item">
                <img src="img/TimeLineComp.jpg" alt="timelinecom">
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

    <!--<div>
        <div class="panel-info thsb f22p col-sm-12">
            <div class="panel-heading"><i class="fa fa-bullhorn" aria-hidden="true"></i> ประชาสัมพันธ์</div>
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">HOME</a></li>
                <li><a data-toggle="tab" href="#inspec">การรายงานผลการจัดหาระบบคอมฯ (ในเกณฑ์ราคากลาง)</a></li>
                <li><a data-toggle="tab" href="#outspec">การรายงานผลการจัดหาระบบคอมฯ ("ไม่มี" ในเกณฑ์ราคากลาง)</a></li>
            </ul>

            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <h3>ระบบติดตามการรายงานผลการจัดหาระบบคอมพิวเตอร์</h3>
                    <p>..
                        <br> ... 
                    </p>
                </div>

                <div id="inspec" class="tab-pane fade">
                        <h3>การรายงานผลการจัดหาระบบคอมฯ (ในเกณฑ์ราคากลาง)</h3>
                </div>

                <div id="outspec" class="tab-pane fade">
                        <h3>การรายงานผลการจัดหาระบบคอมฯ ("ไม่มี" ในเกณฑ์ราคากลาง)</h3>
                </div>

            </div>


        </div>
    </div>-->

    

    <div class="body-content">
        <!-- computer -->
        <div class="list-group thsb f22p col-sm-6">
            <a class="list-group-item active">การจัดหาระบบคอมพิวเตอร์ภาครัฐ </a>
            <a href="https://drive.google.com/file/d/1viEyyac0MtInui7R3D1HD3sIk6kEf9fF/view?usp=sharing" target="_blank" class="list-group-item">
                - เกณฑ์ราคากลางและคุณลักษณะพื้นฐานคอมพิวเตอร์ ประจำปี พ.ศ. 2561 <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                <?=Html::img(Yii::getAlias('@web').'/img/new.gif')?>
            </a>
            <a href="https://drive.google.com/file/d/1s_9lBWF14utligb9fZoy-zEU-bZ4ZXHc/view?usp=sharing" target="_blank" class="list-group-item">
                - เกณฑ์ราคากลางและคุณลักษณะพื้นฐานคอมพิวเตอร์ ประจำปี พ.ศ. 2561 <i class="fa fa-file-word-o" aria-hidden="true"></i>
                <?=Html::img(Yii::getAlias('@web').'/img/new.gif')?>
            </a>
            
            <a href="https://drive.google.com/file/d/1cqQVaO_H1l6Mx70CavFf5GsMfw9ccHCi/view?usp=sharing" target="_blank" class="list-group-item">
                - แบบฟอร์มรายงานการจัดหาระบบคอมพิวเตอร์ฯ ไม่เกิน 5 ล้านบาท <i class="fa fa-file-word-o" aria-hidden="true"></i>
            </a>
            
            <a href="https://drive.google.com/drive/folders/0B9e-qx85JSYkWTY2c3JsRnFCREk?usp=sharing" target="_blank" class="list-group-item">
                - แบบรายงานผล การจัดหาระบบคอมพิวเตอร์ภาครัฐ <i class="fa fa-file-excel-o" aria-hidden="true"></i>
            </a>
            
            <a href="https://drive.google.com/file/d/1BAjiuKx3opf_Db3lqqc8JOFwj4HnDGVX/view?usp=sharing" target="_blank" class="list-group-item">
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
        
    </div>

</div>

