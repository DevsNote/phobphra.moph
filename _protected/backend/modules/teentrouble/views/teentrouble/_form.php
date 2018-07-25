<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Teentrouble */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="teentrouble-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'teen_trouble_type_id')->textInput() ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'detail')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'facebook')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nickname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'post_ip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'answer_by')->textInput() ?>

    <?= $form->field($model, 'answer_detail')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'answer_at')->textInput() ?>

    <?= $form->field($model, 'approve_post')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
