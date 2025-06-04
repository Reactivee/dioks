<?php

/** @var \yii\web\View $this */

/** @var string $content */

use frontend\assets\AppAsset;

use frontend\widgets\LanguagePicker;
use yii\bootstrap4\Html;

AppAsset::register($this);
$settings = \common\models\Settings::find()->one();

?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>" class="h-100">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php $this->registerCsrfMetaTags() ?>
        <meta name="description"
              content="<?= $settings['desc_' . Yii::$app->language] ?>">
        <meta name="keywords" content="<?= $settings['key_' . Yii::$app->language] ?>">
        <?= Html::csrfMetaTags() ?>
        <title><?= $settings['site_name_' . Yii::$app->language] ?></title>
        <link rel="canonical" href="https://sherxonlogistics.uz/">
        <link rel="shortcut icon" href="images/icons/favicon.svg" type="image/x-s">
        <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/images/favicon.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/images/favicon.png">
        <link rel="mask-icon" href="images/icons/favicon.svg">
        <meta property="og:site_name" content="<?= $settings['site_name_' . Yii::$app->language] ?>">
        <meta property="og:title" content="<?= $settings['site_name_' . Yii::$app->language] ?>">
        <meta property="og:locale" content=<?= Yii::$app->language ?>>
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

    <div class="mobile_menu overflow-hidden">
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
                <a href="<?= $settings->tg ?>">
                                <span class="social_round">
                                <img src="images/icons/tg.svg" alt="">
                                </span>
                </a>
                <a href="<?= $settings->instagram ?>">
                    <img class="mx-3" src="images/icons/Button (2).svg" alt="">
                </a>
                <a href="<?= $settings->facebook ?>">
                    <img src="images/icons/Button.svg" alt="">
                </a>
            </div>
        </div>


    </div>

    <!--    --><?//= Alert::widget() ?>

    <header class="d-flex align-items-center">
        <div class="back_map">
            <div class="south_usa"></div>
            <div class="north_usa"></div>
            <div class="aust"></div>
            <div class="asia"></div>
            <div class="africa"></div>
            <div class="rus start">
            </div>
            <div class="rus1 start">
            </div>
            <div class="rus2 start">
            </div>
            <div class="rus3 start">
            </div>
            <div class="rus4 start">
            </div>
            <div class="rus5 start">
            </div>
            <div class="rus6 start">
            </div>
            <div class="rus7 start">
            </div>
            <div class="rus8 start">
            </div>
            <div class="rus9 start">
            </div>
            <div class="rus10 start">
            </div>
            <div class="rus11 start">
            </div>


            <img class="all_map" src="images/banner/map 1.png" alt="">
        </div>
        <div class="nav">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-3 col-lg-4  logo">
                        <a href="/">
                            <img  src="images/icons/Logo_Silver.svg" alt="logo">
                        </a>
                        <div class="burger">
                            <img src="images/icons/menu.svg" alt="">
                        </div>
                    </div>
                    <div class="col-md-9 col-lg-8 text-right">
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
                    <div class="col-md-8 col-lg-6 ">
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
                            <h2><?= Yii::t('main', 'cargo') ?><span class="font-weight-bold">
                                <?= Yii::t('main', 'cargo_cont') ?>
                                </span>
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
                <div class="col-md-12 col-lg-7">
                    <div class="title_footer ">
                        <h2 class="color_blue font-weight-bold"><?= Yii::t('main', 'faq') ?></h2>
                    </div>
                    <div class="accordion_wrapper  mt-5">
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
                                        <div class='text-center'>
                    <img  class="w-50  mt-5" src="images/icons/logo.png" alt="logo">
                    </div>
                </div>
                <div class="col-md-12 col-lg-5">
                    <div class="map">

                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1057.461189332887!2d69.29998537023324!3d41.275361760837185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38aef559c3c707db%3A0x6a8a4aa67175cad2!2sTalimarjon%20Street%2012%2C%20100005%2C%20Tashkent%2C%20Uzbekistan!5e1!3m2!1sen!2slv!4v1748957886299!5m2!1sen!2slv" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                        <a class="color_blue" href="">(+99899) <span class="font-weight-bold"> 880 03 45</span> </a>
                        <br>

                    </div>

                </div>
            </div>

        </div>
        <div class="nav_footer py-4">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-12 col-lg-5  logo_footer d-flex justify-content-between align-items-center">
                        <span class="color_white mt-3 mt-md-0">Copyright ©2025 Sherxon Logistics
                        </span>
                                                <a href="/" class="px-4">
                            <img style="width: 60px" class="" src="images/icons/Logo_Silver.svg" alt="logo">
                        </a>
                                            </div>
                    <div class="col-lg-7  col-md-12 text-right d-flex align-items-center  justify-content-end    footer_nav_social">
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
                            <a href="<?= $settings->tg ?>">
                                <span class="social_round">
                                <img src="images/icons/tg.svg" alt="">
                                </span>
                            </a>
                            <a href="<?= $settings->instagram ?>">
                                <img class="mx-3" src="images/icons/Button (2).svg" alt="">
                            </a>
                            <a href="<?= $settings->facebook ?>">
                                <img src="images/icons/Button.svg" alt="">
                            </a>
                        </div>
                    </div>
                    <a class='text-decoration-none text-white  ml-3' href="https://alfatechno.uz/">Alfa Technologies</a>

                </div>

            </div>
        </div>

    </footer>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage();
