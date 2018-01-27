<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'เอกสารที่เกี่ยวข้อง';
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
            เอกสารเกี่ยวกับการจัดหาระบบคอมพิวเตอร์ภาครัฐมูลค่าไม่เกิน ๕ ล้านบาท
        </div>

        <!--<code><?= __FILE__ ?></code>-->
    </div>
    
    <!-- เอกสารคอมฯ -->
    <!--<div class="col-sm-6">
        <div class="panel panel-primary thsb f20p"  style="margin-bottom: 10px">
            <div class="panel-heading">เอกสารที่เกี่ยวข้อง</div>
            
            <div class="panel-body">
                <a href="https://drive.google.com/file/d/0B9e-qx85JSYkaTR2ZEhBem1LRms/view?usp=sharing" target="_blank" class="btn btn-default btn-md thsb f18p" role="button">
                    <i class="fa fa-file-word-o" aria-hidden="true"></i> 1- แบบฟอร์มการจัดหาระบบคอมพิวเตอร์ภาครัฐ
                </a>
            </div>
            <div class="panel-body">
                <a href="https://drive.google.com/drive/folders/0B9e-qx85JSYkWTY2c3JsRnFCREk?usp=sharing" target="_blank" class="btn btn-default btn-md thsb f18p" role="button">
                    <span class="glyphicon glyphicon-download-alt"></span> 2- แบบรายงานผล การจัดหาระบบคอมพิวเตอร์ภาครัฐ
                </a>
            </div>
            <div class="panel-body"> 
                <a href="https://drive.google.com/file/d/0B9e-qx85JSYkb1JEYkw1WmFWT0U/view?usp=sharing" target="_blank" class="btn btn-default btn-md thsb f18p" role="button">
                    <span class="glyphicon glyphicon-download-alt"></span> 3- ตัวอย่างการเขียนแบบฟอร์มการตัดหาระบบคอมพิวเตอร์ภาครัฐ
                </a>
            </div>
            <!--<div class="panel-body"> 
                <a href="https://ict.moph.go.th" target="_blank" class="btn btn-primary btn-md thsb f20p" role="button">
                    <span class="glyphicon glyphicon-download-alt"></span> สรุปผลการพิจารณา รอบเดือน ม.ค.2560
                </a>
            </div>
            <div class="panel-body"> 
                <a href="https://ict.moph.go.th" target="_blank" class="btn btn-primary btn-md thsb f20p" role="button">
                    <span class="glyphicon glyphicon-download-alt"></span> สรุปผลการพิจารณา รอบเดือน ก.พ.2560
                    </a> 
            </div>
            <div class="panel-body"> 
                <a href="https://ict.moph.go.th" target="_blank" class="btn btn-primary btn-md thsb f20p" role="button">
                    <span class="glyphicon glyphicon-download-alt"></span> สรุปผลการพิจารณา รอบเดือน มี.ค.2560
                </a>
            </div>
            <div class="panel-body"> 
                <a href="https://ict.moph.go.th" target="_blank" class="btn btn-primary btn-md thsb f20p" role="button">
                    <span class="glyphicon glyphicon-download-alt"></span> สรุปผลการพิจารณา รอบเดือน เม.ย.2560
                </a>
            </div> 
        </div>
    </div>-->
    
    <!-- เอกสารคอม ขวา -->
    <div class="col-sm-6">
        <div class="list-group">
            <a class="list-group-item active thsb f22p">เอกสารที่เกี่ยวข้อง</a>
            <a href="https://drive.google.com/file/d/0B9e-qx85JSYkaTR2ZEhBem1LRms/view?usp=sharing" target="_blank" class="list-group-item thsb f20p">
                <i class="fa fa-file-word-o" aria-hidden="true"></i> 1- แบบฟอร์มการจัดหาระบบคอมพิวเตอร์ภาครัฐ
            </a>
            <a href="https://drive.google.com/drive/folders/0B9e-qx85JSYkWTY2c3JsRnFCREk?usp=sharing" target="_blank" class="list-group-item thsb f20p">
                <i class="fa fa-file-word-o" aria-hidden="true"></i> 2- แบบรายงานผล การจัดหาระบบคอมพิวเตอร์ภาครัฐ
            </a>
            <a href="https://drive.google.com/file/d/0B9e-qx85JSYkb1JEYkw1WmFWT0U/view?usp=sharing" target="_blank" class="list-group-item thsb f20p">
                <i class="fa fa-file-pdf-o" aria-hidden="true"></i> 3- ตัวอย่างการเขียนแบบฟอร์มการตัดหาระบบคอมพิวเตอร์ภาครัฐ
            </a>
        </div>
    </div>
    
</div>