<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Newstype;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model common\models\News */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form">

    <?php $form = ActiveForm::begin([
                'options' => ['enctype' => 'multipart/form-data']
    ]); ?>
    <div class="box">
        <div class="box-header with-border">
            <?= Html::a('<i class="fa fa-times"></i> Close', ['index'], ['class' => 'btn btn-danger btn-sm']) ?>
            <?= Html::submitButton($model->isNewRecord ? '<i class="fa fa-floppy-o"></i> Save' : '<i class="fa fa-floppy-o"></i> Save', ['class' => $model->isNewRecord ? 'btn btn-success btn-sm' : 'btn btn-success btn-sm']) ?>
            <div class="box-tools pull-right">
                <!-- Buttons, labels, and many other things can be placed here! -->
                <!-- Here is a label for example -->
                <!--<span class="label label-primary">Label</span> -->
                
            </div><!-- /.box-tools -->
        </div><!-- /.box-header -->
        <div class="box-body">

            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'detail')->textarea(['rows' => 6]) ?>

            <?=
            $form->field($model, 'newtype')->dropDownList(ArrayHelper::map(Newstype::find()->where(['status' => '1'])->all(), 'id', 'newstype'), ['prompt' => ' -- เลือกประเภทข่าว --', 'class' => 'form-control'])
            ?>


            <?= $form->field($model, 'file_pdf[]')->fileInput(['multiple' => true])//ต้องมี [] ด้วยนะเพราะหลายไฟล์เป็น array และมี multiple ด้วย?>

        </div><!-- /.box-body -->
        <div class="box-footer">
            <div class="alert alert-danger" role="alert">หมายเหตุ: ไฟล์ที่อัพโหลดต้องเป็นไฟล์ PDF เท่านั้น และสามารถอัพโหลดได้สูงสด 5 ไฟล์...</div>
        </div><!-- box-footer -->
    </div><!-- /.box -->

    <?php ActiveForm::end(); ?>

</div>
