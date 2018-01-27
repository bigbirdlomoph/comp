<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'สรุปผลการพิจารณา';
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
            สรุปผลการประชุมคณะกรรมการบริหารและจัดหาระบบคอมพิวเตอร์ สำนักงานสาธารณสุขจังหวัดเลย
        </div>

        <!--<code><?= __FILE__ ?></code>-->
    </div>
    
    <div class="col-sm-6">
        <div class="panel panel-primary"  style="margin-bottom: 10px">
            <div class="panel-heading">ปีงบประมาณ 2560</div>
            
            <div class="panel-body">
                <a href="https://ict.moph.go.th" target="_blank" class="btn btn-primary btn-md thsb f20p" role="button">
                    <span class="glyphicon glyphicon-download-alt"></span> สรุปผลการพิจารณา รอบเดือน ต.ค.2559
                </a>
            </div>
            <div class="panel-body">
                <a href="https://ict.moph.go.th" target="_blank" class="btn btn-primary btn-md thsb f20p" role="button">
                    <span class="glyphicon glyphicon-download-alt"></span> สรุปผลการพิจารณา รอบเดือน พ.ย.2559
                </a>
            </div>
            <div class="panel-body"> 
                <a href="https://ict.moph.go.th" target="_blank" class="btn btn-primary btn-md thsb f20p" role="button">
                    <span class="glyphicon glyphicon-download-alt"></span> สรุปผลการพิจารณา รอบเดือน ธ.ค.2559
                </a>
            </div>
            <div class="panel-body"> 
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
    </div>
    
</div>