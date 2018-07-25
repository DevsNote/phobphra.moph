<?php
/* @var $this yii\web\View */

use yii\helpers\Url;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use yii\timeago\TimeAgo;
/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);

//Yii::setAlias('@icon', '../uploads/');
$this->title = 'PHOBPHRA HOSPITAL';
?>

<!-- Header -->
<header id="head">
    <div class="container">
        <div class="fluid_container">
            <div class="camera_wrap camera_emboss pattern_1" id="camera_wrap_4">
                <div data-thumb="<?= Yii::getAlias('@themes') . '/assets/' ?>images/slides/thumbs/img1.jpg" data-src="<?= Yii::getAlias('@themes') . '/assets/' ?>images/slides/img1.jpg">
                </div> 
                <div data-thumb="<?= Yii::getAlias('@themes') . '/assets/' ?>images/slides/thumbs/img2.jpg" data-src="<?= Yii::getAlias('@themes') . '/assets/' ?>images/slides/img2.jpg">
                </div>
                <div data-thumb="<?= Yii::getAlias('@themes') . '/assets/' ?>images/slides/thumbs/img3.jpg" data-src="<?= Yii::getAlias('@themes') . '/assets/' ?>images/slides/img3.jpg">
                </div> 

            </div><!-- #camera_wrap_3 -->
        </div><!-- .fluid_container -->
    </div>
</header>
<!-- /Header -->


<section class="news-box top-margin">
    <div class="container">
        <h2><span>รอบรั้ว รพ.</span></h2>
        <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="newsBox">
                    <div class="thumbnail">
                        <figure><img src="<?= Yii::getAlias('@themes') . '/assets/' ?>images/news_1.jpg" alt=""></figure>
                        <div class="caption maxheight2">
                            <div class="box_inner">
                                <div class="box">
                                    <p class="title"><strong>รดน้ำดำหัวผู้สูงอายุภายใน รพ. ประจำปี 2561</strong></p>
                                    <p>ผู้อำนวยการและเจ้าหน้าที่โรงพยาบาลพบพระ สืบสานประเพณีรดน้ำดำหัวผู้สูงอายุในโรงพยาบาล...</p>
                                </div>
                                <div>
                                    <a href="#" class="btn-inline">more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="newsBox">
                    <div class="thumbnail">
                        <figure><img src="<?= Yii::getAlias('@themes') . '/assets/' ?>images/news_2.jpg" alt=""></figure>
                        <div class="caption maxheight2">
                            <div class="box_inner">
                                <div class="box">
                                    <p class="title"><strong>ประชุมซ้อมแผนอุบัติเหตุกับภาคส่วนในอำเภอพบพระ ประจำปี 2561</strong></p>
                                    <p>งานอุบัติเหตุและฉุกเฉินโรงพยาบาลพบพระจัดประชุมซ้อมแผนอุบัติเหตุ เพื่อปรึกษาหารือเกี่ยวกับแผนรับมืออุบัติเหตุในช่วงเทศกาล...</p>
                                </div>
                                <div>
                                    <a href="#" class="btn-inline">more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="newsBox">
                    <div class="thumbnail">
                        <figure><img src="<?= Yii::getAlias('@themes') . '/assets/' ?>images/news_3.jpg" alt=""></figure>
                        <div class="caption maxheight2">
                            <div class="box_inner">
                                <div class="box">
                                    <p class="title"><strong>นศ.แพทย์ศึกษาดูงาน รพ.พบพระ</strong></p>
                                    <p>โรงพยาบาลพบพระขอต้อนรับ นศ.แพทย์ ที่มาศึกษาดูงาน...</p>
                                </div>
                                <div>
                                    <a href="#" class="btn-inline">more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="container">
    <div class="row">
        <!--
        <div class="col-md-4"><div class="title-box clearfix "><h2 class="title-box_primary">จัดซื้อจัดจ้าง</h2></div> 
        <p><span>Perspiciatis unde omnis iste natus error sit voluptatem. Cum sociis natoque penatibus et magnis dis parturient montes ascetur ridiculus musull dui.</span></p>
        <p>Lorem ipsumulum aenean noummy endrerit mauris. Cum sociis natoque penatibus et magnis dis parturient montes ascetur ridiculus mus. Null dui. Fusce feugiat malesuada odio.</p>
        <a href="#" title="read more" class="btn-inline " target="_self">read more</a> </div>
        -->

        <div class="col-md-6">
            <div class="title-box clearfix "><h2 class="title-box_primary">จัดซื้อจัดจ้าง</h2></div> 
            <blockquote class="blockquote-1">
                <div class="list styled custom-list">
                    <ul>
                        <?php foreach ($news_type1 as $news1): ?>
                            <li class="list-group-item"><span class="badge"><?= $news1['created_at']; ?></span><?= Html::a($news1['title'], ['news/view', 'id' => $news1['id']]) ?></li>                    
                        <?php endforeach; ?>
                    </ul>
                </div>
            </blockquote></div>

        <div class="col-md-6">
            <div class="title-box clearfix "><h2 class="title-box_primary">ประกาศ/ประชาสัมพันธ์</h2></div> 
            <blockquote class="blockquote-1">
                <div class="list styled custom-list">
                    <ul>
                        <?php foreach ($news_type2 as $news2): ?>
                            <li class="list-group-item"><span class="badge"><?= $news2['created_at']; ?></span><?= Html::a($news2['title'], ['news/view', 'id' => $news2['id']]) ?></li>                    
                        <?php endforeach; ?>
                    </ul>
                </div>
            </blockquote>
        </div>
    </div>
</section>

<section class="container">
    <div class="row">
        <div class="col-md-12">
            <h2><span>กิจกรรม รพ.</span></h2>
            <div class="carousel slide" id="myCarousel">
                <div class="carousel-inner">
                    <div class="item active">
                        <ul class="thumbnails">
                            <li class="col-md-3">
                                <div class="thumbnail">
                                    <a href="#"><img src="<?= Yii::getAlias('@themes') . '/assets/' ?>images/portfolio/img_1.jpg" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4>กิจกรรม 5 ส งานผู้ป่วยใน</h4>
                                    <p>เจ้าหน้าที่โรงพยาบาลพบพระ ช่วยกันทำกิจกรรม 5 ส ตึกผู้ป่วยในที่เตรียมจะเปิดให้บริการในเร็ว ๆ นี้</p>
                                    <a class="btn btn-mini" href="#">Read More</a>
                                </div>
                            </li>
                            <li class="col-md-3">
                                <div class="thumbnail">
                                    <a href="#"><img src="<?= Yii::getAlias('@themes') . '/assets/' ?>images/portfolio/img_2.jpg" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4>กิจกรรมซ้อมแผนอัคคีภัย</h4>
                                    <p>กิจกรรมเพิ่มความสามารถให้กับบุคลากรให้มีความรู้ความสามารถให้การรับมือกับอัคคีภัยที่อาจจะเกิดขึ้น...</p>
                                    <a class="btn btn-mini" href="#">Read More</a>
                                </div>
                            </li>
                            <li class="col-md-3">
                                <div class="thumbnail">
                                    <a href="#"><img src="<?= Yii::getAlias('@themes') . '/assets/' ?>images/portfolio/img_3.jpg" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4>ปรับพฤติกรรมเพียงนิดพิชิตโรคอ้วน ครั้งที่ 2</h4>
                                    <p>กิจกรรมต่อเนื่องจากปีที่แล้ว โดยปีนี้ได้เชิญวิทยากรที่มีความรู้เรื่องโยคะ มาสอนให้กับผู้ที่สนใจ...</p>
                                    <a class="btn btn-mini" href="#">Read More</a>
                                </div>
                            </li>
                            <li class="col-md-3">
                                <div class="thumbnail">
                                    <a href="#"><img src="<?= Yii::getAlias('@themes') . '/assets/' ?>images/portfolio/img_4.jpg" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4>ปรับพฤติกรรมเพียงนิดพิชิตโรคอ้วน</h4>
                                    <p>เป็นกิจกรรมที่ส่งเสริมให้เจ้าหน้าที่โรงพยาบาลพบพระหันมารักสุขภาพ...</p>
                                    <a class="btn btn-mini" href="#">Read More</a>
                                </div>
                            </li>
                        </ul>
                    </div><!-- /Slide1 --> 
                    <div class="item">
                        <ul class="thumbnails">
                            <li class="col-md-3">
                                <div class="thumbnail">
                                    <a href="#"><img src="<?= Yii::getAlias('@themes') . '/assets/' ?>images/portfolio/img_4.jpg" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4>ปรับพฤติกรรมเพียงนิดพิชิตโรคอ้วน</h4>
                                    <p>เป็นกิจกรรมที่ส่งเสริมให้เจ้าหน้าที่โรงพยาบาลพบพระหันมารักสุขภาพ...</p>
                                    <a class="btn btn-mini" href="#">Read More</a>
                                </div>
                            </li>
                            <li class="col-md-3">
                                <div class="thumbnail">
                                    <a href="#"><img src="<?= Yii::getAlias('@themes') . '/assets/' ?>images/portfolio/img_3.jpg" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4>ปรับพฤติกรรมเพียงนิดพิชิตโรคอ้วน ครั้งที่ 2</h4>
                                    <p>กิจกรรมต่อเนื่องจากปีที่แล้ว โดยปีนี้ได้เชิญวิทยากรที่มีความรู้เรื่องโยคะ มาสอนให้กับผู้ที่สนใจ...</p>
                                    <a class="btn btn-mini" href="#">Read More</a>
                                </div>
                            </li>
                            <li class="col-md-3">
                                <div class="thumbnail">
                                    <a href="#"><img src="<?= Yii::getAlias('@themes') . '/assets/' ?>images/portfolio/img_1.jpg" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4>กิจกรรม 5 ส งานผู้ป่วยใน</h4>
                                    <p>เจ้าหน้าที่โรงพยาบาลพบพระ ช่วยกันทำกิจกรรม 5 ส ตึกผู้ป่วยในที่เตรียมจะเปิดให้บริการในเร็ว ๆ นี้</p>
                                    <a class="btn btn-mini" href="#">Read More</a>
                                </div>
                            </li>
                            <li class="col-md-3">
                                <div class="thumbnail">
                                    <a href="#"><img src="<?= Yii::getAlias('@themes') . '/assets/' ?>images/portfolio/img_2.jpg" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4>กิจกรรมซ้อมแผนอัคคีภัย</h4>
                                    <p>กิจกรรมเพิ่มความสามารถให้กับบุคลากรให้มีความรู้ความสามารถให้การรับมือกับอัคคีภัยที่อาจจะเกิดขึ้น...</p>
                                    <a class="btn btn-mini" href="#">Read More</a>
                                </div>
                            </li>
                        </ul>
                    </div><!-- /Slide2 --> 
                    <div class="item">
                        <ul class="thumbnails">
                            <li class="col-md-3">
                                <div class="thumbnail">
                                    <a href="#"><img src="<?= Yii::getAlias('@themes') . '/assets/' ?>images/portfolio/img_1.jpg" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4>กิจกรรม 5 ส งานผู้ป่วยใน</h4>
                                    <p>เจ้าหน้าที่โรงพยาบาลพบพระ ช่วยกันทำกิจกรรม 5 ส ตึกผู้ป่วยในที่เตรียมจะเปิดให้บริการในเร็ว ๆ นี้</p>
                                    <a class="btn btn-mini" href="#">Read More</a>
                                </div>
                            </li>
                            <li class="col-md-3">
                                <div class="thumbnail">
                                    <a href="#"><img src="<?= Yii::getAlias('@themes') . '/assets/' ?>images/portfolio/img_2.jpg" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4>กิจกรรมซ้อมแผนอัคคีภัย</h4>
                                    <p>กิจกรรมเพิ่มความสามารถให้กับบุคลากรให้มีความรู้ความสามารถให้การรับมือกับอัคคีภัยที่อาจจะเกิดขึ้น...</p>
                                    <a class="btn btn-mini" href="#">Read More</a>
                                </div>
                            </li>
                            <li class="col-md-3">
                                <div class="thumbnail">
                                    <a href="#"><img src="<?= Yii::getAlias('@themes') . '/assets/' ?>images/portfolio/img_3.jpg" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4>ปรับพฤติกรรมเพียงนิดพิชิตโรคอ้วน ครั้งที่ 2</h4>
                                    <p>กิจกรรมต่อเนื่องจากปีที่แล้ว โดยปีนี้ได้เชิญวิทยากรที่มีความรู้เรื่องโยคะ มาสอนให้กับผู้ที่สนใจ...</p>
                                    <a class="btn btn-mini" href="#">Read More</a>
                                </div>
                            </li>
                            <li class="col-md-3">
                                <div class="thumbnail">
                                    <a href="#"><img src="<?= Yii::getAlias('@themes') . '/assets/' ?>images/portfolio/img_4.jpg" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4>ปรับพฤติกรรมเพียงนิดพิชิตโรคอ้วน</h4>
                                    <p>เป็นกิจกรรมที่ส่งเสริมให้เจ้าหน้าที่โรงพยาบาลพบพระหันมารักสุขภาพ...</p>
                                    <a class="btn btn-mini" href="#">Read More</a>
                                </div>
                            </li>
                        </ul>
                    </div><!-- /Slide3 --> 
                </div>

                <div class="control-box">                            
                    <a data-slide="prev" href="#myCarousel" class="carousel-control left">‹</a>
                    <a data-slide="next" href="#myCarousel" class="carousel-control right">›</a>
                </div><!-- /.control-box -->   

            </div><!-- /#myCarousel -->

        </div><!-- /.span12 -->          
    </div><!-- /.row --> 
</section><!-- /.container -->



