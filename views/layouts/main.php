<?php
/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\web\View;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>

        <div class="wrap">
            <?php
            NavBar::begin([
                'brandLabel' => Yii::$app->name,
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            if (Yii::$app->user->isGuest){
                
            }
 else {
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
                    ['label' => 'ข้อมูลผู้ใช้งาน', 'url' => ['/employee']],
                    ['label' => 'ข้อมูลผู้รับบริการ', 'url' => ['/patient']],
                    ['label' => 'ยา เวชภัณฑ์', 'url' => ['/drug']],
                    ['label' => 'ตรวจเบื้องต้น', 'url' => ['/visit']],
                    ['label' => 'ตรวจรักษา', 'url' => ['/service']],
                    ['label' => 'จ่ายยา', 'items' => [
                            ['label' => 'ผู้ตรวจรักษา', 'url' => ['/dispense']],
                            ['label' => 'เจ้าหน้าที่', 'url' => ['/dispense/report']],
                        ]],
                    ['label' => 'การนัดหมาย', 'items' => [
                            ['label' => 'ผู้ตรวจรักษา', 'url' => ['/appointment']],
                            ['label' => 'เจ้าหน้าที่', 'url' => ['/appointment/report']],
                        ]],
                    ['label' => 'ค่าใช้จ่าย', 'url' => ['/payment']],
                    // ['label' => 'รายงาน', 'url' => ['/reports']],
                    Yii::$app->user->isGuest ? ['label' => 'รายงาน',] :
                            ['label' => 'รายงาน', 'items' => [
                            ['label' => 'เจ้าหน้าที่', 'url' => ['/patient/report1']],
                            ['label' => 'ผู้ใช้บริการ', 'url' => ['/patient/report2']],
                            ['label' => 'ยอดการชำระเงินประจำวัน', 'url' => ['/patient/report3']],
                            ['label' => 'ยอดเวชภัณฑ์', 'url' => ['/patient/report4']],
                            ['label' => 'เวชภัณฑ์หมดอายุ', 'url' => ['/patient/report5']],
                            ['label' => 'รายงานผู้รับบริการประจำวัน', 'url' => ['/patient/reportptday']],
                            ['label' => 'รายงานค่าบริการประจำวัน', 'url' => ['/patient/reportmday']],
                        ]],
                    Yii::$app->user->isGuest ? ['label' => 'Sign in', 'url' => ['/user/security/login']] :
                            ['label' => '(' . Yii::$app->user->identity->username . ')', 'items' => [
                            ['label' => 'ข้อมูลส่วนตัว', 'url' => ['/user/settings/profile']],
                            ['label' => 'รหัสผ่าน', 'url' => ['/user/settings/account']],
                            ['label' => 'ออกระบบ', 'url' => ['/user/security/logout'], 'linkOptions' => ['data-method' => 'post']],
                        ]],
                ],
            ]);
            
 }
            NavBar::end();
            ?>

            <div class="container">
                <?=
                Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ])
                ?>
                <?= Alert::widget() ?>
                <?= $content ?>
            </div>
        </div>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
