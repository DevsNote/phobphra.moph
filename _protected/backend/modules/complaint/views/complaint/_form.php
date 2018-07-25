<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Complaint */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="complaint-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'complaint_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'complaint_tel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'complaint_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'complaint_subject')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'complaint_detail')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'complaint_ip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'complaint_status')->textInput() ?>

    <?= $form->field($model, 'complaint_answer')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
