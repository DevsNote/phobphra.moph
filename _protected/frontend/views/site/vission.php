<?php
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
/* @var $this yii\web\View */

$this->title = Yii::t('app', 'วิสัยทัศน์ พันธกิจ');
//$this->params['breadcrumbs'][] = ['label' => 'เกี่ยวกับ รพ.', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="site-about">

     <header id="head" class="secondary">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h1><?= Html::encode($this->title) ?></h1>
                </div>
            </div>
        </div>
    </header>
    
    <section class="container content-header text-right">
        <?= Breadcrumbs::widget(['links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],]) ?>
    </section>
    
    
    
 </div>   
    
