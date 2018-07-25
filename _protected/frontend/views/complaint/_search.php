<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ComplaintSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="complaint-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'complaint_name') ?>

    <?= $form->field($model, 'complaint_tel') ?>

    <?= $form->field($model, 'complaint_email') ?>

    <?= $form->field($model, 'complaint_subject') ?>

    <?php // echo $form->field($model, 'complaint_detail') ?>

    <?php // echo $form->field($model, 'complaint_ip') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'complaint_status') ?>

    <?php // echo $form->field($model, 'complaint_answer') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
