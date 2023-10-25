<?php

/** @var \yii\web\View $this */

/** @var string $content */

use frontend\assets\AppAsset;

use frontend\widgets\LanguagePicker;
use yii\bootstrap4\Html;

AppAsset::register($this);
//dd(Yii::$app->language);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>" class="h-100">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php $this->registerCsrfMetaTags() ?>
        <?= Html::csrfMetaTags() ?>
        <!--        <link rel="preconnect" href="https://fonts.googleapis.com">-->
        <!--        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>-->
        <title>DIOKS</title>
        <link rel="shortcut icon" href="images/icons/favicon.svg" type="image/x-s">
        <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/images/favicon.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/images/favicon.png">
        <link rel="mask-icon" href="images/icons/favicon.svg">
        <meta property="og:site_name" content="DIOKS">
        <meta property="og:title" content="DIOKS">
        <meta property="og:locale" content="uz">
        <?php $this->head() ?>
        <script src="//code.jivosite.com/widget/AhFpK4LiBM" async></script>

    </head>
    <body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>


    <div class="overlay"></div>
    <div class="preloader  js-preloader flex-center">

        <div class="dots d-flex flex-column">

            <a class="navbar-brand ">
                <div class="logo_pre text-center">
                    <img src="images/icons/logo.png" alt="logo">
                </div>
            </a>

            <div class="d-flex flex-row mt-4">
                <div class="dot dot_yel"></div>
                <div class="dot dot_blue"></div>
                <div class="dot dot_yel"></div>
                <div class="dot dot_blue"></div>
                <div class="dot dot_blue"></div>
            </div>
        </div>
    </div>
    <div class="mobile_menu">
        <div class="row justify-content-between">
            <div class="col-9">
                <!--                <span class="color_logo_blue m-menu">Меню</span>-->
            </div>
            <div class="col-3 close_btn">
                <img src="images/icons/x.svg" alt="">
            </div>
            <hr>
        </div>
        <div class="col-md-12 text-right d-flex align-items-center justify-content-end footer_nav_social">
            <ul class="list-unstyled p-0 m-0 d-flex align-items-center justify-content-end nav_items_footer">

                <li><a class="nav_items_footer_link color_black text-decoration-none"
                       href="#guaranty"><?= Yii::t('main', 'Guarantees') ?></a></li>
                <li><a class="nav_items_footer_link text-decoration-none color_black"
                       href="#service"><?= Yii::t('main', 'Service') ?></a></li>
                <li><a class="nav_items_footer_link text-decoration-none color_black" href="#contact">FAQ</a></li>
                <li><a class="nav_items_footer_link text-decoration-none color_black"
                       href="#contact"><?= Yii::t('main', 'Address') ?> </a></li>

            </ul>
            <?= LanguagePicker::widget([

            ]); ?>
            <div class="social d-flex align-items-center">
                <a href="https://t.me/oksachi">
                                <span class="social_round">
                                <img src="images/icons/tg.svg" alt="">
                                </span>
                </a>
                <img class="mx-3" src="images/icons/Button (2).svg" alt="">
                <img src="images/icons/Button.svg" alt="">
            </div>
        </div>


    </div>

    <!--    --><?//= Alert::widget() ?>

    <header class="d-flex align-items-center">
        <div class="back_map">
            <div class="rus start">
                <!--                                <img src="/images/icons/dot1.svg" alt="">-->
                <img src="/images/icons/DOT.svg" alt="">
                <!--                                <img src="/images/icons/dot3.svg" alt="">-->
                <!--                                <img src="/images/icons/dot4.svg" alt="">-->
                <!--                                <img src="/images/icons/dot5.svg" alt="">-->
                <!--                                <img src="/images/icons/dot6.svg" alt="">-->

            </div>
            <div class="rus2 start">
                <img src="/images/icons/DOT.svg" alt="">

            </div>
            <div class="rus3 start">
                <img src="/images/icons/DOT.svg" alt="">

            </div>
            <div class="rus4 start">
                <img src="/images/icons/DOT.svg" alt="">

            </div>
            <div class="rus5 start">
                <img src="/images/icons/DOT.svg" alt="">

            </div>
            <div class="rus6 start">
                <img src="/images/icons/DOT.svg" alt="">

            </div>
            <div class="rus7 start">
                <img src="/images/icons/DOT.svg" alt="">
            </div>
            <div class="rus8 start">
                <img src="/images/icons/DOT.svg" alt="">
            </div>
            <div class="rus9 start">
                <img src="/images/icons/DOT.svg" alt="">
            </div>
            <div class="rus10 start">
                <img src="/images/icons/DOT.svg" alt="">
            </div>

            <img class="all_map" src="images/banner/map 1.png" alt="">
        </div>
        <div class="nav">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-4 logo">
                        <a href="/">
                            <img src="images/icons/logo_footer.svg" alt="">
                        </a>
                        <div class="burger">
                            <img src="images/icons/menu.svg" alt="">
                        </div>
                    </div>
                    <div class="col-md-8 text-right">
                        <ul class="list-unstyled p-0 m-0 d-flex align-items-center justify-content-end nav_items">
                            <!--                            <li><a href="/" class="text-uppercase">-->
                            <?//= Yii::t('main', 'main') ?><!-- </a></li>-->
                            <li><a href="#service" class="text-uppercase"><?= Yii::t('main', 'Service') ?></a></li>
                            <li><a href="#guaranty" class="text-uppercase"><?= Yii::t('main', 'Guarantees') ?></a></li>
                            <li><a href="#contact" class="text-uppercase"><?= Yii::t('main', 'Address') ?> </a></li>
                            <li><a href="#order" class="text-uppercase"><?= Yii::t('main', 'submit') ?></a></li>
                            <li>
                                <!--                                --><? //= \lajax\languagepicker\widgets\LanguagePicker::widget([
                                //                                    'skin' => \lajax\languagepicker\widgets\LanguagePicker::SKIN_BUTTON,
                                //                                    'size' => \lajax\languagepicker\widgets\LanguagePicker::SIZE_SMALL
                                //                                ]); ?>

                                <?= LanguagePicker::widget([

                                ]); ?>

                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <div class="main_recommends w-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="main_recommends_title">
                            <h2> <?= Yii::t('main', 'slogan') ?></h2>
                        </div>
                        <div class="main_recommends_text">
                            <h3>
                                <?= Yii::t('main', 'slogan') ?>
                                <?= Yii::t('main', 'slogan_text') ?>
                            </h3>
                        </div>
                        <div class="main_recommends_items">
                            <div class="stepper-wrapper">
                                <div class="stepper-item ">
                                    <div class="step-counter"></div>
                                    <div class="step-name"><?= Yii::t('main', 'air') ?></div>
                                </div>
                                <div class="stepper-item">
                                    <div class="step-counter"></div>
                                    <div class="step-name"><?= Yii::t('main', 'road') ?></div>
                                </div>
                                <div class="stepper-item active">
                                    <div class="step-counter"></div>
                                    <div class="step-name"><?= Yii::t('main', 'rail') ?></div>
                                </div>
                                <div class="stepper-item">
                                    <div class="step-counter"></div>
                                    <div class="step-name"><?= Yii::t('main', 'multi') ?></div>
                                </div>
                            </div>
                        </div>

                        <div class="main_text">
                            <h2><?= Yii::t('main', 'cargo') ?><span class="font-weight-bold"> </span>
                            </h2>
                        </div>
                        <div class="header_btns d-flex">
                            <a href="#check_order" class="btn font-weight-bold"><?= Yii::t('main', 'check') ?></a>
                            <a href="#order" class="btn font-weight-bold"><?= Yii::t('main', 'submit') ?></a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </header>
    <div class="position-relative">
        <?= $content ?>
    </div>
    <footer class="pt-5">
        <div class="container">

            <div id="contact" class="row">
                <div class="col-md-7">
                    <div class="title_footer ">
                        <h2 class="color_blue font-weight-bold"><?= Yii::t('main', 'faq') ?></h2>
                    </div>
                    <div class="accordion_wrapper mt-5">
                        <div class="" id="accordionExample">
                            <div class="card" id="headingOne">
                                <div class="card-header">
                                    <h2 class="mb-0">
                                        <a class="text-decoration-none color_blue btn_collapse" type="button"
                                           data-toggle="collapse"
                                           data-target="#collapseOne" aria-expanded="true"
                                           aria-controls="collapseOne">
                                            <?= Yii::t('main', 'type_cargo') ?>
                                        </a>
                                    </h2>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                     data-parent="#accordionExample">
                                    <div class="card-body">
                                        <?= Yii::t('main', 'type_cargo_ans') ?>

                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <a class="text-decoration-none color_blue btn_collapse" type="button"
                                           data-toggle="collapse"
                                           data-target="#collapseTwo" aria-expanded="false"
                                           aria-controls="collapseTwo">
                                            <?= Yii::t('main', 'type_trans') ?>

                                        </a>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                     data-parent="#accordionExample">
                                    <div class="card-body">
                                        <?= Yii::t('main', 'type_trans_ans') ?>

                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <a class="text-decoration-none color_blue btn_collapse" type="button"
                                           data-toggle="collapse"
                                           data-target="#collapseThree" aria-expanded="false"
                                           aria-controls="collapseThree">
                                            <?= Yii::t('main', 'locate_cargo') ?>

                                        </a>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                     data-parent="#accordionExample">
                                    <div class="card-body">
                                        <?= Yii::t('main', 'locate_cargo_ans') ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img class="w-100 px-5 mt-5" src="images/icons/logo_footer.svg" alt="">
                </div>
                <div class="col-md-5">
                    <div class="map">
                        <iframe src="https://yandex.com/map-widget/v1/?um=constructor%3A8771966f064672b1228893a04d4cde6c25ce6ea46c0d91efdec5276ad3e0e8d2&amp;source=constructor"
                                width="100%" height="421" frameborder="0"></iframe>
                    </div>
                    <div class="address text-center mt-4">
                        <h3 class="color_blue font-weight-bold"><?= Yii::t('main', 'full_address') ?></h3>
                    </div>
                    <div class="add_address">
                        <p class="color_gray text-right"><?= Yii::t('main', 'address_info') ?></p>
                        <p class="color_blue font-weight-bold text-right">
                            <?= Yii::t('main', 'text_address') ?>
                        </p>
                    </div>
                    <div class="phones text-right">
                        <a class="color_blue" href="">(+99899) <span class="font-weight-bold"> 880-03-45</span> </a>
                        <br>
                        <a href="" class="color_blue">(+99894) <span class="font-weight-bold">618-10-06</span> </a>
                    </div>
                    <div class="email text-right">
                        <a class="color_blue" href="">info@dioks.uz</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="nav_footer py-4">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-5 logo_footer d-flex justify-content-between align-items-center">
                        <span class="color_white mt-3 mt-md-0">Copyright ©2023 Dioks Dream Logistics</span>
                        <a href="#" class="px-4">
                            <img style="width: 162px" class="" src="images/icons/logo_footer.png" alt="">
                        </a>
                    </div>
                    <div class="col-md-7 text-right d-flex align-items-center justify-content-end footer_nav_social">
                        <ul class="list-unstyled p-0 m-0 d-flex align-items-center justify-content-end nav_items_footer">

                            <li><a class="nav_items_footer_link text-decoration-none"
                                   href="#guaranty"><?= Yii::t('main', 'Guarantees') ?></a></li>
                            <li><a class="nav_items_footer_link text-decoration-none"
                                   href="#service"><?= Yii::t('main', 'Service') ?></a></li>
                            <li><a class="nav_items_footer_link text-decoration-none" href="#contact">FAQ</a></li>
                            <li><a class="nav_items_footer_link text-decoration-none"
                                   href="#contact"><?= Yii::t('main', 'Address') ?> </a></li>
                        </ul>
                        <div class="social d-flex align-items-center">
                            <a href="https://t.me/oksachi">
                                <span class="social_round">
                                <img src="images/icons/tg.svg" alt="">
                                </span>
                            </a>
                            <a href="#">
                                <img class="mx-3" src="images/icons/Button (2).svg" alt="">
                            </a>
                            <a href="#">
                                <img src="images/icons/Button.svg" alt="">
                            </a>

                        </div>
                    </div>
                </div>

            </div>
        </div>

    </footer>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage();
