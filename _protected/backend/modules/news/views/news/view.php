<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;
use yii2assets\pdfjs;

/* @var $this yii\web\View */
/* @var $model common\models\News */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'News', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-view">

    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">
                <p>
                    <?= Html::a('<i class="fa fa-times"></i> Close', ['index'], ['class' => 'btn btn-danger btn-sm']) ?>
                    <?= Html::a('<i class="fa fa-refresh"></i> Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary btn-sm']) ?>
                    <?=
                    Html::a('<i class="fa fa-trash-o"></i> Delete', ['delete', 'id' => $model->id], [
                        'class' => 'btn btn-warning btn-sm',
                        'data' => [
                            'confirm' => 'Are you sure you want to delete this item?',
                            'method' => 'post',
                        ],
                    ])
                    ?>
                </p>
            </h3>
            <div class="box-tools pull-right">
                <!-- Buttons, labels, and many other things can be placed here! -->
                <!-- Here is a label for example -->
                <!--<span class="label label-primary">Label</span> -->
                
            </div><!-- /.box-tools -->
        </div><!-- /.box-header -->
        <div class="box-body">

            <?=
            DetailView::widget([
                'model' => $model,
                'attributes' => [
                    //'id',
                    'title',
                    'detail:ntext',
                    [
                        'attribute' => 'newstype.newstype',
                        'label' => 'ประเภทข่าว'
                    ],
                    [
                        'attribute' => 'file_pdf',
                        'format' => 'raw',
                        'value' => call_user_func(function($data) {
                                    $files = null;
                                    if ($data->files) {
                                        foreach ($data->getFiles() as $key => $value) {
                                            $files .= pdfjs\PdfJs::widget([
                                                
                                                'url' => Url::to(Yii::getAlias(str_replace("/backend", "", Yii::getAlias('@web'))) . $data->upload_folder . '/' . $value)]);
                                        }
                                        return $files;
                                    } else {
                                        return null;
                                    }
                                }, $model),
                            ],
                        ],
                    ])
                    ?>
        </div><!-- /.box-body -->
    </div><!-- /.box -->

</div>
