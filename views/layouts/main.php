<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'CSPC',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    
    /* echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'หน้าแรก', 'url' => ['/site/index']],
            ['label' => 'แนวทางปฏิบัติ', 'url' => ['/site/resolution']],
            ['label' => 'สรุปผลการประชุม', 'url' => ['/site/report']],
            ['label' => 'เกี่ยวกับเรา', 'url' => ['/site/about']],
        ],
    ]); */
        
    //Start Menu group 1 Computer
    $rpt_menu_g1[] = ['label' => '<i class="fa fa-book"></i>
                 หลักเกณฑ์ & แนวทางการจัดหา', 'url' => ['/site/resolution']];
    $rpt_menu_g1[] = ['label' => '<i class="fa fa-users"></i>
                 CIO สสจ.', 'url' => ['/site/cio']];
    //End Menu group 1
    
    //Start Menu group 2 CCTV
    $rpt_menu_g2[] = ['label' => '<i class="fa fa-book"></i> 
                หลักเกณฑ์ & แนวทางการจัดหา', 'url' => ['/site/resolution']];
    $rpt_menu_g2[] = ['label' => '<i class="fa fa-users"></i> 
                CIO สสจ.', 'url' => ['/site/cio']];
    //End Menu group 2
    
    //Start Menu group 3 other
    //$rpt_menu_g3[] = ['label' => '<i class="fa fa-search"></i> 
    //            ประชากร 35+ คัดกรองโรคเบาหวาน', 'url' => ['report/dmscramp']];
    //$rpt_menu_g3[] = ['label' => '<i class="fa fa-search"></i> 
    //            ประชากร 35+ คัดกรองโรคความดันโลหิตสูง', 'url' => ['report/htscramp']];
    //End Menu group 3
    
       
    $menuItems = [
        ['label' => '<i class="fa fa-home"></i> หน้าแรก', 'url' => ['/site/index']],
        ['label' => '<i class="fa fa-desktop"></i> ระบบจัดหาคอมพิวเตอร์ภาครัฐ', 'items' => $rpt_menu_g1],
        ['label' => '<i class="fa fa-video-camera"></i> ระบบจัดหากล้องวงจรปิด (CCTV)', 'items' => $rpt_menu_g2],
        ['label' => 'ถาม-ตอบ', 'url' => ['/site/qa']],
        ['label' => 'เกี่ยวกับเรา', 'url' => ['/site/about']],
    ];
    
   
    
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
        'encodeLabels' => FALSE,
        //'options' => [
        //    'style' => 'font-family: Conv_THSarabunPSK-Bold'
        //],
    ]);
    
    
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container-fluid">
        <p class="pull-left thsb f18p">&copy; งาน ICT สำนักงานสาธารณสุขจังหวัดเลย <?= date('Y') ?></p>

        <!--<p class="pull-right"><?= Yii::powered() ?></p>-->
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
