<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\teentrouble\models\TeentroubleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Teentroubles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teentrouble-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Teentrouble', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'teen_trouble_type_id',
            'title',
            'detail:ntext',
            'email:email',
            //'facebook',
            //'nickname',
            //'post_ip',
            //'created_at',
            //'answer_by',
            //'answer_detail:ntext',
            //'answer_at',
            //'approve_post',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
