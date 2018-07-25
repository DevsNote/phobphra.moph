<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\captcha\Captcha;
/* @var $this yii\web\View */
/* @var $model common\models\Complaint */
/* @var $form yii\widgets\ActiveForm */
?>


    <!-- container -->
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 class="section-title">ส่งข้อความของคุณถึงเราโดยตรง</h3>
                <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($model, 'complaint_name')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'complaint_tel')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'complaint_email')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'complaint_subject')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'complaint_detail')->textarea(['rows' => 6]) ?>
                
                <div class="form-group">
                        <?=
                                $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                                    'template' => '<div class="row"><div class="col-lg-4">{image}</div><div class="col-lg-6">{input}</div></div>',
                                ])
                                ?>
                    </div>

                <div class="form-group">
                    <?= Html::submitButton('ส่งข้อความ', ['class' => 'btn btn-success']) ?>
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
                            <p>info@phobphrahospital.com</p>

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



