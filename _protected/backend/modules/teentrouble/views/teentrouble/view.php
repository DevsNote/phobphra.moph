<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Teentrouble */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Teentroubles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teentrouble-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'teen_trouble_type_id',
            'title',
            'detail:ntext',
            'email:email',
            'facebook',
            'nickname',
            'post_ip',
            'created_at',
            'answer_by',
            'answer_detail:ntext',
            'answer_at',
            'approve_post',
        ],
    ]) ?>

</div>
