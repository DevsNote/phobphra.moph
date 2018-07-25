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

    <?= DetailView::widget([
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
                                            $files .= pdfjs\PdfJs::widget(['url' => Url::to(Yii::getAlias(Yii::getAlias('@web')) . $data->upload_folder . '/' . $value)]);
                                        }
                                        return $files;
                                    } else {
                                        return null;
                                    }
                                }, $model),
                            ],
            'created_at',
           // 'created_by',
           // 'updated_at',
           // 'updated_by',
           // 'status',
        ],
    ]) ?>

</div>
