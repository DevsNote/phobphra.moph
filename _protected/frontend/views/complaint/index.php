<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

$this->title = 'ข้อเสนอแนะ/ร้องเรียน';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">

    <header id="head" class="secondary">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h1><?= $this->title ?></h1>
                </div>
                <div class="col-sm-4">
                    <h1>
                        <?= Html::a('ส่งข้อเสนอแนะ/ข้อร้องเรียน', ['create'], ['class' => 'btn btn-info btn-sm']) ?>
                    </h1>
                </div>
            </div>
        </div>
    </header>

    <!-- container -->
    <div class="container">


        <?=
        GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                //'id',
                'created_at',
                //'complaint_name',
                //'complaint_tel',
                //'complaint_email:email',
                'complaint_subject',
                //'complaint_detail:ntext',
                //'complaint_ip',
                //'created_at',
                'complaint_status',
                //'complaint_answer:ntext',
                //'updated_at',
                [
                    'class' => 'yii\grid\ActionColumn',
                    'template' => '{view}',
                    'buttons' => [
                        'view' => function($url, $model, $key) {
                            return Html::a('รายละเอียด', $url);
                        }
                    ]
                ],
            ],
        ]);
        ?>
    </div>
    <!-- /container -->

</div>
