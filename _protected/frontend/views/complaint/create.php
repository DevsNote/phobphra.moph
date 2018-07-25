<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

$this->title = Yii::t('app', 'ข้อเสนอแนะ/ร้องเรียน');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">

    <header id="head" class="secondary">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h1>ข้อเสนอแนะ/ร้องเรียน</h1>
                </div>
            </div>
        </div>
    </header>
    <div class="complaint-create">

        <?=
        $this->render('_form', [
            'model' => $model,
        ])
        ?>

    </div>
</div>