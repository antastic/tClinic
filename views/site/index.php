<?php
/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'tClinic Clinic Data Management Web Application';
$baseUrl = Yii::getAlias('@web');
?>
<div class="site-index">

    <div class="body-content ">

        <div class="panel panel-default ">
            <div class="panel-body">

                <div class="row ">

                    <div class="col-sm-3">
                        <a href="<?= Url::to('index.php?r=employee'); ?>" class="card">
                            <div class="card-block">
                                <img class="card-img-top img-responsive" src="<?= $baseUrl . '/imgs/user.jpg' ?>" alt="Card image cap" width="150" height="100">
                                <h3 class="card-title">ข้อมูลผู้ใช้</h3>
                                <p class="card-text">จัดการข้อมูลผู้ใช้งานระบบ</p>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-3">
                        <a href="<?= Url::to('index.php?r=patient'); ?>" class="card">
                            <div class="card-block">
                                <img class="card-img-top img-responsive" src="<?= $baseUrl . '/imgs/patient.png' ?>" alt="Card image cap" width="150" height="100">
                                <h3 class="card-title">ข้อมูลผู้รับบริการ</h3>
                                <p class="card-text">จัดการข้อมูลผู้รับบริการ</p>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-3">
                        <a href="<?= Url::to('index.php?r=drug'); ?>" class="card">
                            <div class="card-block">
                                <img class="card-img-top img-responsive" src="<?= $baseUrl . '/imgs/rx.png' ?>" alt="Card image cap" width="150" height="100">
                                <h3 class="card-title">ยา เวชภัณฑ์</h3>
                                <p class="card-text">จัดการข้อมูลการยา</p>
                            </div> 
                        </a>
                    </div>
                    
                    <div class="col-sm-3">
                        <a href="<?= Url::to('index.php?r=visit'); ?>" class="card">
                            <div class="card-block">
                                <img class="card-img-top img-responsive" src="<?= $baseUrl . '/imgs/health1.png' ?>" alt="Card image cap" width="150" height="100">
                                <h3 class="card-title">ตรวจเบื้องต้น</h3>
                                <p class="card-text">จัดการข้อมูลตรวจเบื้องต้น</p>
                            </div> 
                        </a>
                    </div>
                

                    <div class="col-sm-3">
                        <a href="<?= Url::to('index.php?r=service'); ?>" class="card">
                            <div class="card-block">
                                <img class="card-img-top img-responsive" src="<?= $baseUrl . '/imgs/health1.png' ?>" alt="Card image cap" width="150" height="100">
                                <h3 class="card-title">ตรวจรักษา</h3>
                                <p class="card-text">จัดการข้อมูลตรวจรักษา</p>
                            </div> 
                        </a>
                    </div>
                
                <div class="col-sm-3">
                    <a href="<?= Url::to('index.php?r=dispense'); ?>" class="card">
                        <div class="card-block">
                            <img class="card-img-top img-responsive" src="<?= $baseUrl . '/imgs/ex.png' ?>" alt="Card image cap" width="150" height="100">
                            <h3 class="card-title">จ่ายยา</h3>
                            <p class="card-text">จัดการข้อมูลการจ่ายยา</p>
                        </div> 
                    </a>
                </div>

                <div class="col-sm-3">
                    <a href="<?= Url::to('index.php?r=appointment'); ?>" class="card">
                        <div class="card-block">
                            <img class="card-img-top img-responsive" src="<?= $baseUrl . '/imgs/app.png' ?>" alt="Card image cap" width="150" height="100">
                            <h3 class="card-title">นัดหมาย</h3>
                            <p class="card-text">จัดการข้อมูลการนัดหมาย</p>
                        </div> 
                    </a>
                </div>

                <div class="col-sm-3">
                    <a href="<?= Url::to('index.php?r=payment'); ?>" class="card">
                        <div class="card-block">
                            <img class="card-img-top img-responsive" src="<?= $baseUrl . '/imgs/finance.png' ?>" alt="Card image cap" width="150" height="100">
                            <h3 class="card-title">ค่าบริการ</h3>
                            <p class="card-text">จัดการข้อมูลค่าบริการ</p>
                        </div> 
                    </a>
                </div>

                <div class="col-sm-3">
                    <a href="<?= Url::to('index.php?r=reports'); ?>" class="card">
                        <div class="card-block">
                            <img class="card-img-top img-responsive" src="<?= $baseUrl . '/imgs/report.png' ?>" alt="Card image cap" width="150" height="100">
                            <h3 class="card-title">รายงาน</h3>
                            <p class="card-text">รายงานสำหรับผู้ตรวจรักษา</p>
                        </div> 

                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

</div>