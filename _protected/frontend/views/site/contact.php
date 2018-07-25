<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

$this->title = Yii::t('app', 'Contact');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">

    <header id="head" class="secondary">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h1>ติดต่อ</h1>
                </div>
            </div>
        </div>
    </header>

    <!-- container -->
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 class="section-title">ส่งข้อความของคุณถึงเราโดยตรง</h3>
                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                <div class="form-light mt-20" role="form">
                    <div class="form-group">
                        <?= $form->field($model, 'name') ?>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <?= $form->field($model, 'email') ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <?= $form->field($model, 'subject') ?>
                    </div>
                    <div class="form-group">
                        <?= $form->field($model, 'body')->textArea(['rows' => 6]) ?>
                    </div>
                    <div class="form-group">
                        <?=
                                $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                                    'template' => '<div class="row"><div class="col-lg-4">{image}</div><div class="col-lg-6">{input}</div></div>',
                                ])
                                ?>
                    </div>
                    <div class="form-group">
                        <?= Html::submitButton(Yii::t('app', 'ส่งข้อความ'), ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="section-title">ที่อยู่โรงพยาบาล</h3>
                        <div class="contact-info">
                            <h5>Address</h5>
                            <p>245 หมู่ที่ 2 ตำบลพบพระ อำเภอพบพระ จังหวัดตาก 63160</p>

                            <h5>Email</h5>
                            <p>info@webthemez.com</p>

                            <h5>Phone</h5>
                            <p>055-569023</p>
                            
                            <h5>Fax</h5>
                            <p>055-569117</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h3 class="section-title">เวลาทำการ</h3>
                        <div class="contact-info">
                            <h5>ทุกวันในเวลาราชการ</h5>
                            <p>08:00 AM - 16:00 PM</p>

                            <h5>ทุกวันนอกเวลาราชการ</h5>
                            <p>16:00 PM - 08:00 AM</p>

                        </div>
                    </div>
                </div>
                <h3 class="section-title">การติดต่อสื่อสาร</h3>
                <p>
                    ข้อความของท่านที่ส่งมา ทางเราจะรีบดำเนินการและตอบกลับให้เร็วที่สุด...
                </p>						
            </div>
        </div>
    </div>
    <!-- /container -->

</div>
