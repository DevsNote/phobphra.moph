<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\complaint\models\ComplaintSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ข้อเสนอแนะ/ร้องเรียน';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="complaint-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Complaint', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'complaint_name',
            'complaint_tel',
            'complaint_email:email',
            'complaint_subject',
            //'complaint_detail:ntext',
            //'complaint_ip',
            //'created_at',
            //'complaint_status',
            //'complaint_answer:ntext',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
