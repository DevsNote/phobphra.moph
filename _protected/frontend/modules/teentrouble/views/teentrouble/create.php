<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Teentrouble */

$this->title = 'Create Teentrouble';
$this->params['breadcrumbs'][] = ['label' => 'Teentroubles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teentrouble-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
