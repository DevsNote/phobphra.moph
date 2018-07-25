<?php

use frontend\assets\AppAsset;
use frontend\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>

        <?php $this->beginBody() ?>

        <!-- Fixed navbar -->
        <div class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <!-- Button for smallest screens -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img src="<?= Yii::getAlias('@themes') . '/assets/' ?>images/logo-1.png" alt="Techro HTML5 template"></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav pull-right mainNav">
                        <li class="active"><?= Html::a('<i class="fa fa-home"></i>', ['/site/index']) ?></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">เกี่ยวกับ รพ. <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><?= Html::a('ประวัติความเป็นมา', ['/site/about']) ?></li>
                                <li><?= Html::a('วิสัยทัศน์ พันธกิจ', ['/site/vission']) ?></li>
                                <li><?= Html::a('โครงสร้างหน่วยงาน', ['/site/organization']) ?></li>
                                <li><?= Html::a('ภารกิจและหน้าที่', ['/site/mission']) ?></li>
                                <li><?= Html::a('แผนยุทธศาสตร์', ['/site/strategicplan']) ?></li>
                                <li><?= Html::a('กฎหมาย ระเบียบ ข้อบังคับ', ['/site/raws']) ?></li>
                                <li><?= Html::a('ข้อมูลผู้บริหารสารสนเทศระดับสูง (CIO)', ['/site/cio']) ?></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">บริการ <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><?= Html::a('คู่มือสำหรับประชาชน', ['#']) ?></li>
                                <li><?= Html::a('ห้องปรึกษาปัญหาวัยรุ่น', ['#']) ?></li>
                                <li><?= Html::a('สำหรับเจ้าหน้าที่', ['#']) ?></li>
                                <li><?= Html::a('e-Service', ['#']) ?></li>
                                <li><?= Html::a('e-Form/Online Forms', ['#']) ?></li>
                                <li><?= Html::a('คลังความรู้', ['#']) ?></li>
                                <li><?= Html::a('คำถามที่พบบ่อย', ['#']) ?></li>
                                <li><?= Html::a('เว็บลิงค์', ['#']) ?></li>
                                <li><?= Html::a('ผังเว็บไซต์', ['#']) ?></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <?= Html::a('ข้อมูลสารสนเทศ <b class="caret"></b>', ['#'],['class' => 'dropdown-toggle','data-toggle'=>'dropdown']) ?>
                            <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown">ข้อมูลสารสนเทศ <b class="caret"></b></a> -->
                            <ul class="dropdown-menu">
                                <li><?= Html::a('ศูนย์ข้อมูลโรงพยาบาล', ['#']) ?></li>
                                <li><?= Html::a(' ', ['#']) ?></li>
                                <li><?= Html::a(' ', ['#']) ?></li>
                            </ul>
                        </li>
                        <li><?= Html::a('ข้อเสนอแนะ/ร้องเรียน', ['/complaint/index']) ?></li>
                        <li><?= Html::a('ติดต่อ', ['/site/contact']) ?></li>

                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
        <!-- /.navbar -->

        <section class="content">
            <?= Alert::widget() ?>
            <?= $content ?>
        </section>

        <footer id="footer">
            <div class="container">
                <div class="social text-center">
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                    <a href="#"><i class="fa fa-flickr"></i></a>
                    <a href="#"><i class="fa fa-github"></i></a>
                    <a href="#"><i class="fa fa-home"></i></a>
                </div>

                <div class="clear"></div>
                <!--CLEAR FLOATS-->
            </div>
            <div class="footer2">
                <div class="container">
                    <div class="row">

                        <div class="col-md-6 panel">
                            <div class="panel-body">
                                <p class="simplenav">
                                    <a href="#">Home</a> | 
                                    <a href="#">About</a> |
                                    <a href="#">Services</a> |
                                    <a href="#">Price</a> |
                                    <a href="#">Projects</a> |
                                    <a href="#">Contact</a>
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6 panel">
                            <div class="panel-body">
                                <p class="text-right">
                                    Copyright &copy; 2015. Template by <a href="http://webthemez.com/" rel="develop">WebThemez.com</a> Develop by <a href="natthaphon.dev@gmail.com" rel="DevsNote">DevsNote</a>
                                </p>
                            </div>
                        </div>

                    </div>
                    <!-- /row of panels -->
                </div>
            </div>
        </footer>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
