<?php

/** @var \yii\web\View $this */

/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use lajax\languagepicker\widgets\LanguagePicker;
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
    </head>
    <body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>


    <div class="overlay"></div>
    <?= Alert::widget() ?>

    <header class="d-flex align-items-center">
        <div class="back_map">
            <div class="rus">
                <!--                <img src="/images/icons/dot1.svg" alt="">-->
                <!--                <img src="/images/icons/dot2.svg" alt="">-->
                <!--                <img src="/images/icons/dot3.svg" alt="">-->
                <!--                <img src="/images/icons/dot4.svg" alt="">-->
                <!--                <img src="/images/icons/dot5.svg" alt="">-->
                <!--                <img src="/images/icons/dot6.svg" alt="">-->
                <!--                <img style="color: red" src="/images/icons/light1.svg" alt="">-->

            </div>
            <img class="all_map" src="images/banner/map 1.png" alt="">
        </div>
        <div class="nav">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-4 logo">
                        <a href="#">
                            <img style="width: 160px" src="images/icons/logo.png" alt="">
                        </a>
                    </div>
                    <div class="col-md-8 text-right">
                        <ul class="list-unstyled p-0 m-0 d-flex align-items-center justify-content-end nav_items">
                            <li><a href="/" class="text-uppercase"><?= Yii::t('main', 'main') ?> </a></li>
                            <li><a href="#service" class="text-uppercase"><?= Yii::t('main', 'Service') ?></a></li>
                            <li><a href="#guaranty" class="text-uppercase"><?= Yii::t('main', 'Guarantees') ?></a></li>
                            <li><a href="#contact" class="text-uppercase"><?= Yii::t('main', 'Address') ?> </a></li>
                            <li><a href="#order" class="text-uppercase"><?= Yii::t('main', 'submit') ?></a></li>
                            <li><a href="#">RU | UZ | EN</a></li>
                        </ul>
<!--                        <div class="lang">-->
<!--                            <div class="dropdown">-->
<!--                                --><?//= \lajax\languagepicker\widgets\LanguagePicker::widget([
//                                    'skin' => \lajax\languagepicker\widgets\LanguagePicker::SKIN_BUTTON,
//                                    'size' => \lajax\languagepicker\widgets\LanguagePicker::SIZE_SMALL
//                                ]); ?>
<!--                            </div>-->
<!--                        </div>-->
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
                            <a class="btn font-weight-bold"><?= Yii::t('main', 'check') ?></a>
                            <a class="btn font-weight-bold"><?= Yii::t('main', 'submit') ?></a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </header>


    <?= $content ?>
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
                                        <a class="btn color_blue btn_collapse" type="button" data-toggle="collapse"
                                           data-target="#collapseOne" aria-expanded="true"
                                           aria-controls="collapseOne">
                                            Add commonly asked questions here
                                        </a>
                                    </h2>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                     data-parent="#accordionExample">
                                    <div class="card-body">
                                        Some placeholder content for the first accordion panel. This panel is shown
                                        by
                                        default,
                                        thanks to the
                                        <code>.show</code> class.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <a class="btn color_blue btn_collapse" type="button" data-toggle="collapse"
                                           data-target="#collapseTwo" aria-expanded="false"
                                           aria-controls="collapseTwo">
                                            Add commonly asked questions here
                                        </a>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                     data-parent="#accordionExample">
                                    <div class="card-body">
                                        Some placeholder content for the second accordion panel. This panel is
                                        hidden by
                                        default.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <a class="btn color_blue btn_collapse" type="button" data-toggle="collapse"
                                           data-target="#collapseThree" aria-expanded="false"
                                           aria-controls="collapseThree">
                                            Add commonly asked questions here
                                        </a>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                     data-parent="#accordionExample">
                                    <div class="card-body">
                                        And lastly, the placeholder content for the third and final accordion panel.
                                        This panel
                                        is hidden by
                                        default.
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
                    <div class="col-md-5 logo d-flex justify-content-between align-items-center">
                        <span class="color_red">Copyright ©2023 Dioks Dream Logistics</span>
                        <a href="#" class="px-4">
                            <img style="width: 162px" class="" src="images/icons/logo_footer.png" alt="">
                        </a>
                    </div>
                    <div class="col-md-7 text-right d-flex align-items-center justify-content-end">
                        <ul class="list-unstyled p-0 m-0 d-flex align-items-center justify-content-end nav_items_footer">

                            <li><a class="nav_items_footer_link text-decoration-none" href="#guaranty"><?= Yii::t('main', 'Guarantees') ?></a></li>
                            <li><a class="nav_items_footer_link text-decoration-none" href="#service"><?= Yii::t('main', 'Service') ?></a></li>
                            <li><a class="nav_items_footer_link text-decoration-none" href="#contact">FAQ</a></li>
                            <li><a class="nav_items_footer_link text-decoration-none" href="#contact"><?= Yii::t('main', 'Address') ?> </a></li>
                        </ul>
                        <div class="social d-flex align-items-center">
                            <img src="images/icons/Button (1).svg" alt="">
                            <img class="mx-3" src="images/icons/Button (2).svg" alt="">
                            <img src="images/icons/Button.svg" alt="">
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
