<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'News';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'summary' => "รายการที่แสดง {begin} - {end} ทั้งหมด {totalCount} รายการ",
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //'id',
            'title',
            'detail:ntext',
            [
                'attribute' => 'newstype.newstype',
                'label' => 'ประเภทข่าว'
            ],
            //'file_pdf',
            // 'created_at',
            // 'created_by',
            // 'updated_at',
            // 'updated_by',
            // 'status',
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view}',
                'options' => ['style' => 'width:100px;'],
                'contentOptions' => [
                    'noWrap' => true
                ],
            ],
        ],
    ]);
    ?>
</div>
