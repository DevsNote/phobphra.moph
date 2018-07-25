<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\Newstype;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $searchModel backend\modules\news\models\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ข่าวประชาสัมพันธ์';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">

    <div class="box box-primary">
        <div class="box-header with-border">
            <?= Html::a('เพิ่มข่าวประชาสัมพันธ์', ['create'], ['class' => 'btn btn-success']) ?>
            <div class="box-tools pull-right">
                <!-- Buttons, labels, and many other things can be placed here! -->
                <!-- Here is a label for example -->
                <span class="label label-primary">Label</span>
            </div><!-- /.box-tools -->
        </div><!-- /.box-header -->
        <div class="box-body">
            <?=
            GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'summary' => "รายการที่แสดง {begin} - {end} ทั้งหมด {totalCount} รายการ",
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    //'id',
                    'title',
                    //'detail:ntext',
                    //'newtype',
                    [
                        'format' => 'html',
                        //'options' => ['style' => 'width:200px;'],
                        'attribute' => 'newtype',
                        'value' => function($model) {
                    return $model->newstype->newstype;
                },
                        'filter' => Html::activeDropDownList($searchModel, 'newtype', ArrayHelper::map(Newstype::find()->all(), 'id', 'newstype'), ['class' => 'form-control',
                            'prompt' => 'เลือกประเภทข่าว']),
                    ],
                    //'created_at',
                    // 'created_by',
                    // 'updated_at',
                    // 'updated_by',
                    // 'status',
                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]);
            ?>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
</div>
