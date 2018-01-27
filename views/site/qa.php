<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FormComputer */
/* @var $form ActiveForm */
?>
<div class="site-test">

    
<div class="col-sm-12">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">HOME</a></li>
                <li><a data-toggle="tab" href="#qacom">ถาม-ตอบ เรื่องการจัดหาระบบคอมฯ</a></li>
                <li><a data-toggle="tab" href="#qacctv">ถาม-ตอบ เรื่องการจัดหาระบบ CCTV</a></li>
            </ul>

            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <h3>Q & A</h3>
                    <p>ถาม-ตอบ
                        <br> รวบรวมคำถามที่พบบ่อยและข้อสงสัยต่างๆ จะพยายามรวบรวมให้ได้มากที่สุดครับ 
                    </p>
                </div>

                <div id="qacom" class="tab-pane fade">
                    <h3>Q & A</h3>
                    <p>
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-secondary">Q : ครุภัณฑ์คอมพิวเตอร์มีในเกณฑ์ราคากลาง คุณลักษณะพื้นฐาน <font color="red">"สูงกว่า"</font> ราคา <font color="red">"สูงกว่า"</font> เกณฑ์ราคากลาง สามารถจัดหาได้หรือไม่?</li>
                            <li class="list-group-item list-group-item-success">A : สามารถจัดหาได้ครับ ส่งแบบฟอร์มการจัดหาฯ มา CIO สสจ. เพื่อให้เลขาฯ ส่งเอกสารฯ ไปยัง CIO ระดับ สป. พิจารณาอนุมัติต่อไป
                                <br> เอกสารที่ต้องส่ง มีดังนี้
                                <br> 1.แบบฟอร์มการจัดหาระบบคอมฯ 1 ชุด (ฉบับจริง) พร้อมระบุเหตุผลชัดเจน 
                                <br> 2.ใบเสนอราคาอย่างน้อย 3 ร้าน  
                                <br> ทั้งนี้ อาจจะเกิดความล่าช้าในการส่งเอกสารไปยัง ศทส.สป.สธ. เร็วสุด 3 สัปดาห์ ในเวลาทำการ
                            </li>

                            <li class="list-group-item list-group-item-secondary">Q : ครุภัณฑ์คอมพิวเตอร์มีในเกณฑ์ราคากลาง คุณลักษณะพื้นฐาน <font color="red">"ต่ำกว่า"</font> ราคาอยู่ในเกณฑ์ราคากลาง สามารถจัดหาได้หรือไม่?</li>
                            <li class="list-group-item list-group-item-success">A : สามารถจัดหาได้ครับ ส่งแบบฟอร์มการจัดหาฯ มา CIO สสจ. เพื่อให้เลขาฯ ส่งเอกสารฯ ไปยัง CIO ระดับ สป. พิจารณาอนุมัติต่อไป
                                <br> เอกสารที่ต้องส่ง มีดังนี้
                                <br> 1.แบบฟอร์มการจัดหาระบบคอมฯ 1 ชุด (ฉบับจริง) พร้อมระบุเหตุผลชัดเจน
                                <br> 2.ใบเสนอราคาอย่างน้อย 3 ร้าน  
                                <br> ทั้งนี้ อาจจะเกิดความล่าช้าในการส่งเอกสารไปยัง ศทส.สป.สธ. เร็วสุด 3 สัปดาห์ ในเวลาทำการ
                            </li>

                            <li class="list-group-item list-group-item-secondary">Q : ครุภัณฑ์คอมพิวเตอร์ <font color="red">"ไม่มี"</font> ในเกณฑ์ราคากลาง คุณลักษณะพื้นฐาน <font color="red">"ดีกว่า" และหรือ "ต่ำกว่า" ราคา "สูงกว่า" และหรือ อยู่ในเกณฑ์ราคากลาง</font> สามารถจัดหาได้หรือไม่?</li>
                            <li class="list-group-item list-group-item-success">A : สามารถจัดหาได้ครับ ส่งแบบฟอร์มการจัดหาฯ มา CIO สสจ. เพื่อให้เลขาฯ ส่งเอกสารฯ ไปยัง CIO ระดับ สป. พิจารณาอนุมัติต่อไป
                                <br> เอกสารที่ต้องส่ง มีดังนี้
                                <br> 1.แบบฟอร์มการจัดหาระบบคอมฯ 1 ชุด (ฉบับจริง) พร้อมระบุเหตุผลชัดเจน
                                <br> 2.ใบเสนอราคาอย่างน้อย 3 ร้าน  
                                <br> ทั้งนี้ อาจจะเกิดความล่าช้าในการส่งเอกสารไปยัง ศทส.สป.สธ. เร็วสุด 3 สัปดาห์ ในเวลาทำการ
                            </li>

                                             
                            <li class="list-group-item list-group-item-secondary">Q : ถ้าต้องการจัดหาโปรเจคเตอร์ ต้องส่งแบบฟอร์มขออนุมัติจัดหาระบบฯ ส่งไปยัง คณะกรรมการฯ หรือไม่? </li>
                            <li class="list-group-item list-group-item-success">A : โปรเจคเตอร์ ไม่ใช่ครุภัณฑ์คอมพิวเตอร์ สามารถซื้อได้เลย โดยไม่ต้องขออนุมัติจัดหาครับ</li>
                            
                            <li class="list-group-item list-group-item-secondary">Q : ฮาร์ดดิส(HDD) ต้องขออนมัติฯ หรือไม่? </li>
                            <li class="list-group-item list-group-item-success">A : ฮาร์ดดิส ไม่ใช่ครุภัณฑ์คอมพิวเตอร์ สามารถซื้อได้เลย โดยไม่ต้องขออนุมัติจัดหาครับ</li>
                            
                        </ul> 
                    </p>
                </div>

                <div id="qacctv" class="tab-pane fade">
                    <h3>ถาม-ตอบ</h3>
                    <p>
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-secondary">Q : ต้องใช้เกณฑ์ราคากลางฯ ของ กระทรวงดิจิทัลเพื่อเศรษฐกิจและสังคม (MDES) หรือ คุณลักษณะพื้นฐานระบบ CCTV จ.เลย?</li>
                            <li class="list-group-item list-group-item-success">A : ใช้เกณฑ์ราคากลางและคุณลักษณะพื้นฐานระบบ CCTV จ.เลย ประจำปี พ.ศ.2560 
                                <a href="https://drive.google.com/file/d/1kSfDt6GnyvmuOzewkeQv1ONdETiVAZrk/view?usp=sharing" target="_blank">
                                    - คลิก -
                                </a>
                            </li>

                            <li class="list-group-item list-group-item-secondary">Q : ถ้าต้องการจัดหาระบบกล้อง CCTV 1 ชุด ต้องส่งแบบฟอร์มขออนุมัติจัดหาระบบฯ ส่งไปยัง คณะกรรมการฯ หรือไม่? </li>
                            <li class="list-group-item list-group-item-success">A : ต้องส่งแบบฟอร์มการจัดหาฯ มายัง คณะกรรมการฯ ระดับ สสจ. </li>
                        </ul> 
                    </p>
                </div>
            </div>

        </div>

</div><!-- site-test -->
