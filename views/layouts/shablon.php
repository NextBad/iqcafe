<?php
/**
 * Created by PhpStorm.
 * User: Владислав
 * Date: 12.05.2018
 * Time: 18:39
 */
?>
<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php

/* @var $this \yii\web\View */
/* @var $content string */

//use app\widgets\Alert;
use yii\bootstrap\Alert;
use yii\helpers\Html;
//use yii\bootstrap\Nav;
//use yii\bootstrap\NavBar;
//use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>





<!--    <title>Baked a Hotel Category Bootstrap responsive WebTemplate | Home :: w3layouts</title>-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1">-->
<!--    <meta charset="utf-8">-->
<!--    <meta name="keywords" content="Baked a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,-->
<!--Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />-->
<!--    <script>-->
<!--        addEventListener("load", function () {-->
<!--            setTimeout(hideURLbar, 0);-->
<!--        }, false);-->
<!---->
<!--        function hideURLbar() {-->
<!--            window.scrollTo(0, 1);-->
<!--        }-->
<!--    </script>-->
<!--    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />-->
<!--    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />-->
<!--    <link href="css/style.css" rel='stylesheet' type='text/css' />-->
<!--    <link href="css/fontawesome-all.css" rel="stylesheet">-->
<!--    <link href="css/simpleLightbox.css" rel='stylesheet' type='text/css' />-->
<!--    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">-->
<!--    <link href="//fonts.googleapis.com/css?family=Lato:100i,300,300i,400,400i,700,700i,900" rel="stylesheet">-->
<!--    <link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700" rel="stylesheet">-->





</head>

<body>
<?php $this->beginBody() ?>
<!--/banner-->
<!--<header>-->
<!--    <div class="top-bar_sub container-fluid">-->
<!--        <div class="row">-->
<!--            <div class="col-md-4 top-forms text-left mt-4"  data-aos="fade-up">-->
<!--                <span>Welcome Back!</span>-->
<!--                <span class="mx-lg-4 mx-md-2  mx-1">-->
<!--						<a href="login.html">-->
<!--							<i class="fas fa-lock"></i> Sign In</a>-->
<!--					</span>-->
<!--                <span>-->
<!--						<a href="register.html">-->
<!--							<i class="far fa-user"></i> Register</a>-->
<!--					</span>-->
<!--            </div>-->
<!--            <div class="col-md-4 logo text-center" data-aos="fade-up">-->
<!--                <a class="navbar-brand" href="index.html">-->
<!--                    <i class="fab fa-gitkraken"></i> Baked</a>-->
<!--            </div>-->
<!---->
<!--            <div class="col-md-4 log-icons text-right"  data-aos="fade-up">-->
<!---->
<!--                <ul class="social_list1 mt-4">-->
<!---->
<!--                    <li>-->
<!--                        <a href="#" class="facebook1 mx-2">-->
<!--                            <i class="fab fa-facebook-f"></i>-->
<!---->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="#" class="twitter2">-->
<!--                            <i class="fab fa-twitter"></i>-->
<!---->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="#" class="dribble3 mx-2">-->
<!--                            <i class="fab fa-dribbble"></i>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="#" class="pin">-->
<!--                            <i class="fab fa-pinterest-p"></i>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</header>-->
<div class="header_top" id="home">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler navbar-toggler-right mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Регистрация
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">Меню</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        Кухня
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#"></a>
                        <a class="dropdown-item" href="gallery.html">Горячие блюда</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="404.html">Супы</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="404.html">Напитки/Алкоголь</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="404.html">Десерты</a>

                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link scroll" href="#menu">О компании</a>
                </li>


            </ul>
        </div>
    </nav>

</div>
<div class="banner">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="carousel-caption">
                    <h3>IQ кафе
                        <span>мы открылись!</span>
                    </h3>

                </div>
            </div>
            <div class="carousel-item item2">
                <div class="carousel-caption">
                    <h3>Высокие технологии
                        <span>на страже вкуса</span>
                    </h3>

                </div>
            </div>
            <div class="carousel-item item3">
                <div class="carousel-caption">
                    <h3>Bakers Delight Your
                        <span>Local Baker</span>
                    </h3>

                </div>
            </div>
            <div class="carousel-item item4">
                <div class="carousel-caption">
                    <h3>Freshly baked all day
                        <span>Every day!</span>
                    </h3>

                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<?php
//
//<!--//nav-->
//<!--<!--/inner-content-->-->
//<!--<!--/banner-bottom-->-->
//<!--<section class="banner-bottom">-->
//<!--    <div class="container">-->
//<!--        <h3 class="tittle">Our History</h3>-->
//<!--        <div class="row inner-sec">-->
//<!--            <div class="col-lg-6 about-img" data-aos="flip-right">-->
//<!--                <img src="images/ab.jpg" class="img-fluid" alt="">-->
//<!--            </div>-->
//<!--            <div class="col-lg-6 about-info text-left" data-aos="flip-left" >-->
//<!--                <h4 class="sub-hd mb-4">We are the Best </h4>-->
//<!--                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore et dolore magna-->
//<!--                    aliqua uta enim ad minim ven iam quis nostrud exercitation ullamco labor nisi ut aliquip exea commodo consequat duis-->
//<!--                    aute irudre dolor in elit sed uta labore dolore reprehender</p>-->
//<!--                <p class="sup-para mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore et dolore magna-->
//<!--                    aliqua uta enim ad minim ven iam quis nostrud exercitation ullamco labor nisi ut aliquip exea commodo consequat duis-->
//<!--                    aute irudre dolor in elit sed uta labore dolore reprehender</p>-->
//<!--                <div class="view my-4">-->
//<!--                    <a href="single.html" class="btn btn-primary read-m">View More</a>-->
//<!--                </div>-->
//<!---->
//<!--                <img src="images/banner3.jpg" class="img-fluid" alt="">-->
//<!--            </div>-->
//<!--        </div>-->
//<!--    </div>-->
//<!--</section>-->
//<!--<!--//banner-bottom-->-->
//<!--<!--/banner-bottom-->-->
//<!--<section class="grid-info-section">-->
//<!--    <div class="container">-->
//<!--        <h3 class="tittle">Best Seller</h3>-->
//<!--        <div class="row inner-sec">-->
//<!--            <ul id="flexiselDemo1">-->
//<!--                <li>-->
//<!--                    <div class="blog-item text-center">-->
//<!--                        <img src="images/1.jpg" alt=" " class="img-fluid rounded-circle" />-->
//<!--                        <div class="floods-text">-->
//<!--                            <h3>Item 1</h3>-->
//<!---->
//<!--                        </div>-->
//<!--                    </div>-->
//<!--                </li>-->
//<!--                <li>-->
//<!--                    <div class="blog-item text-center">-->
//<!--                        <img src="images/2.jpg" alt=" " class="img-fluid rounded-circle" />-->
//<!--                        <div class="floods-text">-->
//<!--                            <h3>Item 2</h3>-->
//<!---->
//<!--                        </div>-->
//<!--                    </div>-->
//<!--                </li>-->
//<!--                <li>-->
//<!--                    <div class="blog-item text-center">-->
//<!--                        <img src="images/3.jpg" alt=" " class="img-fluid rounded-circle" />-->
//<!--                        <div class="floods-text">-->
//<!--                            <h3>Item 3</h3>-->
//<!--                        </div>-->
//<!--                    </div>-->
//<!--                </li>-->
//<!--                <li>-->
//<!--                    <div class="blog-item text-center">-->
//<!--                        <img src="images/4.jpg" alt=" " class="img-fluid rounded-circle" />-->
//<!--                        <div class="floods-text">-->
//<!--                            <h3>Item 4</h3>-->
//<!--                        </div>-->
//<!--                    </div>-->
//<!--                </li>-->
//<!--                <li>-->
//<!--                    <div class="blog-item text-center">-->
//<!--                        <img src="images/5.jpg" alt=" " class="img-fluid rounded-circle" />-->
//<!--                        <div class="floods-text">-->
//<!--                            <h3>Item 5</h3>-->
//<!---->
//<!--                        </div>-->
//<!--                    </div>-->
//<!--                </li>-->
//<!--            </ul>-->
//<!--        </div>-->
//<!--    </div>-->
//<!--</section>-->
//<!--<!--//banner-bottom-->-->
//<!--<!--/Menu-->-->
//<!--<section class="banner-bottom menu" id="menu">-->
//<!--    <div class="container">-->
//<!--        <h3 class="tittle">Our Menu</h3>-->
//<!--        <div class="row inner-sec">-->
//<!--            <div class="tabs">-->
//<!--                <ul class="nav nav-pills mb-5 justify-content-center" id="pills-tab" role="tablist">-->
//<!--                    <li class="nav-item">-->
//<!--                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home"-->
//<!--                           aria-selected="true">Hot Cake</a>-->
//<!--                    </li>-->
//<!--                    <li class="nav-item">-->
//<!--                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile"-->
//<!--                           aria-selected="false">New Cake</a>-->
//<!--                    </li>-->
//<!---->
//<!--                </ul>-->
//<!--                <div class="tab-content" id="pills-tabContent">-->
//<!--                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">-->
//<!--                        <div class="menu-grids my-lg-4 my-md-2">-->
//<!--                            <div class="row inner-menu mt-4">-->
//<!--                                <div class="col-md-6 menu-grid-left" data-aos="fade-down">-->
//<!--                                    <div class="row mt-2">-->
//<!--                                        <div class="col-md-5 menu-img">-->
//<!--                                            <img src="images/1.jpg" class="img-fluid rounded-circle" alt="">-->
//<!--                                        </div>-->
//<!--                                        <div class="col-md-7 menu-img-info mt-4 mt-md-2">-->
//<!--                                            <h5>Pellentesque dui, non felis. Maecenas male non felis</h5>-->
//<!--                                            <p class="sub-meta mt-2">-->
//<!---->
//<!--                                                $80-->
//<!--                                            </p>-->
//<!--                                        </div>-->
//<!--                                    </div>-->
//<!---->
//<!--                                </div>-->
//<!--                                <div class="col-md-6 menu-grid-right" data-aos="fade-down">-->
//<!--                                    <div class="row mt-2">-->
//<!--                                        <div class="col-md-5 menu-img">-->
//<!--                                            <img src="images/2.jpg" class="img-fluid rounded-circle" alt="">-->
//<!--                                        </div>-->
//<!--                                        <div class="col-md-7 menu-img-info mt-4 mt-md-2">-->
//<!--                                            <h5>Pellentesque dui, non felis. Maecenas male non felis</h5>-->
//<!--                                            <p class="sub-meta mt-2">-->
//<!---->
//<!--                                                $70-->
//<!--                                            </p>-->
//<!--                                        </div>-->
//<!--                                    </div>-->
//<!---->
//<!--                                </div>-->
//<!--                            </div>-->
//<!--                            <div class="row inner-menu mt-4">-->
//<!--                                <div class="col-md-6 menu-grid-left" data-aos="fade-down">-->
//<!--                                    <div class="row mt-2">-->
//<!--                                        <div class="col-md-5 menu-img">-->
//<!--                                            <img src="images/3.jpg" class="img-fluid rounded-circle" alt="">-->
//<!--                                        </div>-->
//<!--                                        <div class="col-md-7 menu-img-info mt-4 mt-md-2">-->
//<!--                                            <h5>Pellentesque dui, non felis. Maecenas male non felis</h5>-->
//<!--                                            <p class="sub-meta mt-2">-->
//<!---->
//<!--                                                $90-->
//<!--                                            </p>-->
//<!--                                        </div>-->
//<!--                                    </div>-->
//<!---->
//<!--                                </div>-->
//<!--                                <div class="col-md-6 menu-grid-right" data-aos="fade-down">-->
//<!--                                    <div class="row mt-2">-->
//<!--                                        <div class="col-md-5 menu-img">-->
//<!--                                            <img src="images/4.jpg" class="img-fluid rounded-circle" alt="">-->
//<!--                                        </div>-->
//<!--                                        <div class="col-md-7 menu-img-info mt-4 mt-md-2">-->
//<!--                                            <h5>Pellentesque dui, non felis. Maecenas male non felis</h5>-->
//<!--                                            <p class="sub-meta mt-2">-->
//<!--                                                $100-->
//<!--                                            </p>-->
//<!--                                        </div>-->
//<!--                                    </div>-->
//<!---->
//<!--                                </div>-->
//<!--                            </div>-->
//<!--                        </div>-->
//<!--                    </div>-->
//<!--                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">-->
//<!--                        <div class="menu-grids my-lg-4 my-md-2">-->
//<!--                            <div class="row inner-menu mt-4">-->
//<!--                                <div class="col-md-6 menu-grid-left" data-aos="fade-down">-->
//<!--                                    <div class="row mt-2">-->
//<!--                                        <div class="col-md-5 menu-img">-->
//<!--                                            <img src="images/1.jpg" class="img-fluid rounded-circle" alt="">-->
//<!--                                        </div>-->
//<!--                                        <div class="col-md-7 menu-img-info mt-4 mt-md-2">-->
//<!--                                            <h5>Pellentesque dui, non felis. Maecenas male non felis</h5>-->
//<!--                                            <p class="sub-meta mt-2">-->
//<!---->
//<!--                                                $100-->
//<!--                                            </p>-->
//<!--                                        </div>-->
//<!--                                    </div>-->
//<!---->
//<!--                                </div>-->
//<!--                                <div class="col-md-6 menu-grid-right" data-aos="fade-down">-->
//<!--                                    <div class="row mt-2">-->
//<!--                                        <div class="col-md-5 menu-img">-->
//<!--                                            <img src="images/2.jpg" class="img-fluid rounded-circle" alt="">-->
//<!--                                        </div>-->
//<!--                                        <div class="col-md-7 menu-img-info mt-4 mt-md-2">-->
//<!--                                            <h5>Pellentesque dui, non felis. Maecenas male non felis</h5>-->
//<!--                                            <p class="sub-meta mt-2">-->
//<!---->
//<!--                                                $98-->
//<!--                                            </p>-->
//<!--                                        </div>-->
//<!--                                    </div>-->
//<!---->
//<!--                                </div>-->
//<!--                            </div>-->
//<!--                            <div class="row inner-menu mt-4">-->
//<!--                                <div class="col-md-6 menu-grid-left" data-aos="fade-down">-->
//<!--                                    <div class="row mt-2">-->
//<!--                                        <div class="col-md-5 menu-img">-->
//<!--                                            <img src="images/3.jpg" class="img-fluid rounded-circle" alt="">-->
//<!--                                        </div>-->
//<!--                                        <div class="col-md-7 menu-img-info mt-4 mt-md-2">-->
//<!--                                            <h5>Pellentesque dui, non felis. Maecenas male non felis</h5>-->
//<!--                                            <p class="sub-meta mt-2">-->
//<!---->
//<!--                                                $ 100-->
//<!--                                            </p>-->
//<!--                                        </div>-->
//<!--                                    </div>-->
//<!---->
//<!--                                </div>-->
//<!--                                <div class="col-md-6 menu-grid-right" data-aos="fade-down">-->
//<!--                                    <div class="row mt-2">-->
//<!--                                        <div class="col-md-5 menu-img">-->
//<!--                                            <img src="images/4.jpg" class="img-fluid rounded-circle" alt="">-->
//<!--                                        </div>-->
//<!--                                        <div class="col-md-7 menu-img-info mt-4 mt-md-2">-->
//<!--                                            <h5>Pellentesque dui, non felis. Maecenas male non felis</h5>-->
//<!--                                            <p class="sub-meta mt-2">-->
//<!---->
//<!--                                                $ 88-->
//<!--                                            </p>-->
//<!--                                        </div>-->
//<!--                                    </div>-->
//<!---->
//<!--                                </div>-->
//<!--                            </div>-->
//<!--                        </div>-->
//<!--                    </div>-->
//<!---->
//<!--                </div>-->
//<!--            </div>-->
//<!--        </div>-->
//<!--    </div>-->
//<!--</section>-->
//<!--<!--//Menu-->-->
//<!---->
//<!--<!--/blog-->-->
//<!--<section class="blog_sec container-fluid">-->
//<!--    <h3 class="tittle">Latest Blogs</h3>-->
//<!--    <div class="row inner-sec">-->
//<!--        <div class="col-lg-6 banner-btm-left">-->
//<!--            <div class="banner-btm-top">-->
//<!--                <div class="banner-btm-inner a1 text-left">-->
//<!--                    <div class="blog_date">-->
//<!---->
//<!--                        <h4>Feb.05.2018</h4>-->
//<!---->
//<!--                    </div>-->
//<!--                    <h6>-->
//<!--                        <a href="single.html">Malted wheat flake bread</a>-->
//<!--                    </h6>-->
//<!--                    <p class="paragraph">Aenean orci erat, placerat id pulvinar nec, tincidunt vel eros.</p>-->
//<!---->
//<!--                    <a href="single.html" class="blog-btn" data-aos="fade-down">Know More</a>-->
//<!--                </div>-->
//<!--                <div class="banner-btm-inner a2">-->
//<!---->
//<!--                </div>-->
//<!--            </div>-->
//<!--            <div class="banner-btm-bottom">-->
//<!--                <div class="banner-btm-inner a3">-->
//<!---->
//<!--                </div>-->
//<!--                <div class="banner-btm-inner a4 text-left">-->
//<!--                    <div class="blog_date">-->
//<!---->
//<!--                        <h4>Feb.18.2018</h4>-->
//<!---->
//<!--                    </div>-->
//<!--                    <h6>-->
//<!--                        <a href="single.html">Malted wheat flake bread</a>-->
//<!--                    </h6>-->
//<!--                    <p class="paragraph">Aenean orci erat, placerat id pulvinar nec, tincidunt vel eros.</p>-->
//<!---->
//<!--                    <a href="single.html" class="blog-btn" data-aos="fade-down">Know More</a>-->
//<!--                </div>-->
//<!--            </div>-->
//<!--        </div>-->
//<!--        <div class="col-lg-6 banner-btm-left">-->
//<!--            <div class="banner-btm-top">-->
//<!--                <div class="banner-btm-inner a1 text-left">-->
//<!--                    <div class="blog_date">-->
//<!---->
//<!--                        <h4>Mar.25.2018</h4>-->
//<!---->
//<!--                    </div>-->
//<!--                    <h6>-->
//<!--                        <a href="single.html">Malted wheat flake bread</a>-->
//<!--                    </h6>-->
//<!--                    <p class="paragraph">Aenean orci erat, placerat id pulvinar nec, tincidunt vel eros.</p>-->
//<!---->
//<!--                    <a href="single.html" class="blog-btn" data-aos="fade-down">Know More</a>-->
//<!--                </div>-->
//<!--                <div class="banner-btm-inner a5">-->
//<!---->
//<!--                </div>-->
//<!--            </div>-->
//<!--            <div class="banner-btm-bottom">-->
//<!--                <div class="banner-btm-inner a6">-->
//<!---->
//<!--                </div>-->
//<!--                <div class="banner-btm-inner a4 text-left">-->
//<!--                    <div class="blog_date">-->
//<!---->
//<!--                        <h4>Mar.30.2018</h4>-->
//<!---->
//<!--                    </div>-->
//<!--                    <h6>-->
//<!--                        <a href="single.html">Malted wheat flake bread</a>-->
//<!--                    </h6>-->
//<!--                    <p class="paragraph">Aenean orci erat, placerat id pulvinar nec, tincidunt vel eros.</p>-->
//<!---->
//<!--                    <a href="single.html" class="blog-btn" data-aos="fade-down">Know More</a>-->
//<!--                </div>-->
//<!--            </div>-->
//<!--        </div>-->
//<!---->
//<!--    </div>-->
//<!--</section>-->
//<!--<!--//blog-->-->
//<!--<!--/Gallry-->-->
//<!--<section class="banner-bottom">-->
//<!--    <div class="container">-->
//<!--        <h3 class="tittle">Our Gallery</h3>-->
//<!--        <div class="row inner-sec">-->
//<!---->
//<!--            <div class="col-md-4 proj_gallery_grid" data-aos="zoom-in">-->
//<!--                <div class="section_1_gallery_grid">-->
//<!--                    <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/p1.jpg">-->
//<!--                        <div class="section_1_gallery_grid1">-->
//<!--                            <img src="images/p1.jpg" alt=" " class="img-fluid" />-->
//<!--                            <div class="proj_gallery_grid1_pos">-->
//<!--                                <h3>Baked Food</h3>-->
//<!--                                <p>Add some text</p>-->
//<!--                            </div>-->
//<!--                        </div>-->
//<!--                    </a>-->
//<!--                </div>-->
//<!--                <div class="section_1_gallery_grid" data-aos="zoom-in">-->
//<!--                    <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/p2.jpg">-->
//<!--                        <div class="section_1_gallery_grid1">-->
//<!--                            <img src="images/p2.jpg" alt=" " class="img-fluid" />-->
//<!--                            <div class="proj_gallery_grid1_pos">-->
//<!--                                <h3>Baked Food</h3>-->
//<!--                                <p>Add some text</p>-->
//<!--                            </div>-->
//<!--                        </div>-->
//<!--                    </a>-->
//<!--                </div>-->
//<!---->
//<!--            </div>-->
//<!--            <div class="col-md-4 proj_gallery_grid" data-aos="zoom-in">-->
//<!--                <div class="section_1_gallery_grid">-->
//<!--                    <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/p4.jpg">-->
//<!--                        <div class="section_1_gallery_grid1">-->
//<!--                            <img src="images/p4.jpg" alt=" " class="img-fluid" />-->
//<!--                            <div class="proj_gallery_grid1_pos">-->
//<!--                                <h3>Baked Food</h3>-->
//<!--                                <p>Add some text</p>-->
//<!--                            </div>-->
//<!--                        </div>-->
//<!--                    </a>-->
//<!--                </div>-->
//<!--                <div class="section_1_gallery_grid" data-aos="zoom-in">-->
//<!--                    <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/p5.jpg">-->
//<!--                        <div class="section_1_gallery_grid1">-->
//<!--                            <img src="images/p5.jpg" alt=" " class="img-fluid" />-->
//<!--                            <div class="proj_gallery_grid1_pos">-->
//<!--                                <h3>Baked Food</h3>-->
//<!--                                <p>Add some text</p>-->
//<!--                            </div>-->
//<!--                        </div>-->
//<!--                    </a>-->
//<!--                </div>-->
//<!---->
//<!--            </div>-->
//<!--            <div class="col-md-4 proj_gallery_grid" data-aos="zoom-in">-->
//<!--                <div class="section_1_gallery_grid">-->
//<!--                    <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/p3.jpg">-->
//<!--                        <div class="section_1_gallery_grid1">-->
//<!--                            <img src="images/p3.jpg" alt=" " class="img-fluid" />-->
//<!--                            <div class="proj_gallery_grid1_pos">-->
//<!--                                <h3>Baked Food</h3>-->
//<!--                                <p>Add some text</p>-->
//<!--                            </div>-->
//<!--                        </div>-->
//<!--                    </a>-->
//<!--                </div>-->
//<!--                <div class="section_1_gallery_grid" data-aos="zoom-in">-->
//<!--                    <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/p2.jpg">-->
//<!--                        <div class="section_1_gallery_grid1">-->
//<!--                            <img src="images/p2.jpg" alt=" " class="img-fluid" />-->
//<!--                            <div class="proj_gallery_grid1_pos">-->
//<!--                                <h3>Baked Food</h3>-->
//<!--                                <p>Add some text</p>-->
//<!--                            </div>-->
//<!--                        </div>-->
//<!--                    </a>-->
//<!--                </div>-->
//<!---->
//<!--            </div>-->
//<!--        </div>-->
//<!--    </div>-->
//<!--</section>-->
//<!--<!--//gallery-->-->
//<!--<!--reviews_sec-->-->
//<!--<section class="banner-bottom reviews_sec">-->
//<!--    <div class="container">-->
//<!--        <h3 class="tittle cen">Testimonial</h3>-->
//<!--        <div class="inner-sec">-->
//<!--            <div class="flexslider mx-auto">-->
//<!--                <ul class="slides">-->
//<!--                    <li>-->
//<!--                        <div class="row">-->
//<!--                            <div class="col-md-3 testimonials_grid-inn">-->
//<!---->
//<!--                                <img src="images/t1.jpg" alt=" " class="img-fluid" />-->
//<!--                            </div>-->
//<!--                            <div class="col-md-9 testimonials_grid text-left">-->
//<!--                                <h3>Gretchen-->
//<!--                                    <span>(Customer)</span>-->
//<!--                                </h3>-->
//<!--                                <i>United States</i>-->
//<!--                                <p>Maecenas interdum, metus vitae tincidunt porttitor,Proin eget gravida odio. Donec ullamcorper est eu magna quam-->
//<!--                                    egestas sem, ac scelerisque nisl nibh vel lacus. Proin eget gravida odio. Donec ullamcorper est eu accumsan cursus.</p>-->
//<!--                            </div>-->
//<!--                        </div>-->
//<!--                    </li>-->
//<!--                    <li>-->
//<!--                        <div class="row">-->
//<!--                            <div class="col-md-3 testimonials_grid-inn">-->
//<!---->
//<!--                                <img src="images/t2.jpg" alt=" " class="img-fluid" />-->
//<!--                            </div>-->
//<!--                            <div class="col-md-9 testimonials_grid text-left">-->
//<!--                                <h3>Josephine Lee-->
//<!--                                    <span>Customer</span>-->
//<!--                                </h3>-->
//<!--                                <i>United States</i>-->
//<!--                                <p>Maecenas interdum, metus vitae tincidunt porttitor,Proin eget gravida odio. Donec ullamcorper est eu magna quam-->
//<!--                                    egestas sem, ac scelerisque nisl nibh vel lacus. Proin eget gravida odio. Donec ullamcorper est eu accumsan cursus.</p>-->
//<!--                            </div>-->
//<!--                        </div>-->
//<!--                    </li>-->
//<!--                    <li>-->
//<!--                        <div class="row">-->
//<!--                            <div class="col-md-3 testimonials_grid-inn">-->
//<!---->
//<!---->
//<!--                                <img src="images/t1.jpg" alt=" " class="img-fluid" />-->
//<!--                            </div>-->
//<!--                            <div class="col-md-9 testimonials_grid text-left">-->
//<!--                                <h3>Mark Olson-->
//<!--                                    <span>Customer</span>-->
//<!--                                </h3>-->
//<!--                                <i>United States</i>-->
//<!--                                <p>Maecenas interdum, metus vitae tincidunt porttitor,Proin eget gravida odio. Donec ullamcorper est eu magna quam-->
//<!--                                    egestas sem, ac scelerisque nisl nibh vel lacus. Proin eget gravida odio. Donec ullamcorper est eu accumsan cursus.</p>-->
//<!--                            </div>-->
//<!--                        </div>-->
//<!--                    </li>-->
//<!--                </ul>-->
//<!--            </div>-->
//<!--        </div>-->
//<!--    </div>-->
//<!--</section>-->
//<!--<!---->-->
//<!--<!--//inner-content-->
//<!--footer-->
?>
<?= Alert::widget() ?>
<?= $content ?>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 footer-grid text-left" data-aos="fade-right">
                <h3>About US</h3>
                <p>Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. lacinia eget consectetur sed, convallis at tellus..</p>
                <div class="read">
                    <a href="single.html" class="btn btn-primary read-m">Read More</a>
                </div>
            </div>
            <!-- subscribe -->
            <div class="col-lg-8 subscribe-main footer-grid text-left" data-aos="fade-left">
                <h2>Subscribe for hot updates</h2>
                <div class="subscribe-main text-left">
                    <div class="subscribe-form">
                        <form action="#" method="post" class="subscribe_form">
                            <input class="form-control" type="email" placeholder="Enter your email..." required="">
                            <button type="submit" class="btn btn-primary submit">Submit</button>
                        </form>

                    </div>
                    <p>We respect your privacy.No spam ever!</p>
                </div>
                <!-- //subscribe -->
                <div class="footer-cpy text-left">
                    <div class="copyrighttop">
                        <ul>
                            <li class="mx-lg-3 mx-md-2 mx-1">
                                <a class="facebook" href="#">
                                    <i class="fab fa-facebook-f"></i>
                                    <span>Facebook</span>
                                </a>
                            </li>
                            <li>
                                <a class="facebook" href="#">
                                    <i class="fab fa-twitter"></i>
                                    <span>Twitter</span>
                                </a>
                            </li>
                            <li class="mx-lg-3 mx-md-2 mx-1">
                                <a class="facebook" href="#">
                                    <i class="fab fa-google-plus-g"></i>
                                    <span>Google+</span>
                                </a>
                            </li>
                            <li>
                                <a class="facebook" href="#">
                                    <i class="fab fa-pinterest-p"></i>
                                    <span>Pinterest</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="copyrightbottom">
                        <p>© 2018 Baked. All Rights Reserved | Design by
                            <a href="http://w3layouts.com/">W3layouts</a>
                        </p>

                    </div>
                </div>
            </div>
        </div>
        <!-- //footer -->
    </div>
</footer>
<!---->

<!--<!-- js -->-->
<!--<script src="js/jquery-2.2.3.min.js"></script>-->
<!--<!-- //js -->-->
<!--<!-- /flexisel -->-->
<!--<script>-->
<!--    $(window).load(function () {-->
<!--        $("#flexiselDemo1").flexisel({-->
<!--            visibleItems: 4,-->
<!--            animationSpeed: 1000,-->
<!--            autoPlay: true,-->
<!--            autoPlaySpeed: 3000,-->
<!--            pauseOnHover: true,-->
<!--            enableResponsiveBreakpoints: true,-->
<!--            responsiveBreakpoints: {-->
<!--                portrait: {-->
<!--                    changePoint: 480,-->
<!--                    visibleItems: 1-->
<!--                },-->
<!--                landscape: {-->
<!--                    changePoint: 640,-->
<!--                    visibleItems: 2-->
<!--                },-->
<!--                tablet: {-->
<!--                    changePoint: 768,-->
<!--                    visibleItems: 3-->
<!--                }-->
<!--            }-->
<!--        });-->
<!---->
<!--    });-->
<!--</script>-->
<!--<script src="js/jquery.flexisel.js"></script>-->
<!--<!-- //flexisel -->-->
<!--<!-- flexSlider -->-->
<!--<script defer src="js/jquery.flexslider.js"></script>-->
<!--<script>-->
<!--    $(window).load(function () {-->
<!--        $('.flexslider').flexslider({-->
<!--            animation: "slide",-->
<!--            start: function (slider) {-->
<!--                $('body').removeClass('loading');-->
<!--            }-->
<!--        });-->
<!--    });-->
<!--</script>-->
<!---->
<!--<!-- //flexSlider -->-->

<!--<!-- simpleLightbox -->-->
<!--<script src="js/simpleLightbox.js"></script>-->
<!--<script>-->
<!--    $('.proj_gallery_grid a').simpleLightbox();-->
<!--</script>-->
<!--<!-- //simpleLightbox -->-->
<!-- /js files -->
<!--<link href='css/aos.css' rel='stylesheet prefetch' type="text/css" media="all" />-->
<!--<link href='css/aos-animation.css' rel='stylesheet prefetch' type="text/css" media="all" />-->
<!--<script src='js/aos.js'></script>-->
<!--<script src="js/aosindex.js"></script>-->
<!--<!-- //js files -->-->
<!--<!--/ start-smoth-scrolling -->-->
<!--<script src="js/move-top.js"></script>-->
<!--<script src="js/easing.js"></script>-->
<!--<script>-->
<!--    jQuery(document).ready(function ($) {-->
<!--        $(".scroll").click(function (event) {-->
<!--            event.preventDefault();-->
<!--            $('html,body').animate({-->
<!--                scrollTop: $(this.hash).offset().top-->
<!--            }, 900);-->
<!--        });-->
<!--    });-->
<!--</script>-->
<!--<!--// end-smoth-scrolling -->-->
<!---->
<!--<script>-->
<!--    $(document).ready(function () {-->
<!--        /*-->
<!--                                var defaults = {-->
<!--                                      containerID: 'toTop', // fading element id-->
<!--                                    containerHoverID: 'toTopHover', // fading element hover id-->
<!--                                    scrollSpeed: 1200,-->
<!--                                    easingType: 'linear'-->
<!--                                 };-->
<!--                                */-->
<!---->
<!--        $().UItoTop({-->
<!--            easingType: 'easeOutQuart'-->
<!--        });-->
<!---->
<!--    });-->
<!--</script>-->
<a href="#home" class="scroll" id="toTop" style="display: block;">
    <span id="toTopHover" style="opacity: 1;"> </span>
</a>
<!--<!-- //Custom-JavaScript-File-Links -->-->
<!--<script src="js/bootstrap.js"></script>-->

<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>

