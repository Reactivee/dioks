<?php

/** @var \yii\web\View $this */

/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap4\Html;

AppAsset::register($this);
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
        <!--        <link rel="shortcut icon" href="/images/favicon.png" type="image/x-s">-->
        <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/images/favicon.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/images/favicon.png">
        <!--        <link rel="mask-icon" href="/images/favicon.png">-->
        <meta property="og:site_name" content="Ustudent">
        <meta property="og:title" content="Ustudent">
        <meta property="og:locale" content="uz">
        <?php $this->head() ?>
    </head>
    <body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>


    <div class="overlay"></div>
    <?= Alert::widget() ?>

    <header class="d-flex align-items-center">
        <div class="back_map">
            <img src="images/banner/map 1.png" alt="">
        </div>
        <div class="nav">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-4 logo">
                        <a href="#">
                            <img src="images/banner/logo.svg" alt="">
                        </a>
                    </div>
                    <div class="col-md-8 text-right">
                        <ul class="list-unstyled p-0 m-0 d-flex align-items-center justify-content-end nav_items">
                            <li><a href="#">ГЛАВНАЯ</a></li>
                            <li><a href="#">УСЛУГИ</a></li>
                            <li><a href="#">ГАРАНТИИ</a></li>
                            <li><a href="#">КОНТАКТЫ </a></li>
                            <li><a href="#">ОСТАВИТЬ ЗАЯВКУ</a></li>
                            <li><a href="#">RU | UZ | EN</a></li>
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
                            <h2>DIOKS DREAM LOGISTICS</h2>
                        </div>
                        <div class="main_recommends_text">
                            <h3>предлагает услуги по транспортировке грузов разных видов</h3>
                        </div>
                        <div class="main_recommends_items">
                            <div class="stepper-wrapper">
                                <div class="stepper-item ">
                                    <div class="step-counter"></div>
                                    <div class="step-name">авиа</div>
                                </div>
                                <div class="stepper-item">
                                    <div class="step-counter"></div>
                                    <div class="step-name">автомобилем</div>
                                </div>
                                <div class="stepper-item active">
                                    <div class="step-counter"></div>
                                    <div class="step-name">железнодорожный</div>
                                </div>
                                <div class="stepper-item">
                                    <div class="step-counter"></div>
                                    <div class="step-name">мультитраспортными путями.</div>
                                </div>
                            </div>
                        </div>

                        <div class="main_text">
                            <h2>Грузовые перевозки <span class="font-weight-bold">по всему миру </span></h2>
                        </div>
                        <div class="header_btns d-flex">
                            <a class="btn font-weight-bold">Проверить груз</a>
                            <a class="btn font-weight-bold">Проверить город</a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </header>


    <?= $content ?>
    <footer class="pt-5">
        <div class="container">

            <div class="row">
                <div class="col-md-7">
                    <div class="title_footer ">
                        <h2 class="color_blue font-weight-bold">Часто задаваемые
                            вопросы</h2>
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
                    <img class="w-100 px-5 mt-5 gray_logo" src="images/banner/foot.png" alt="">
                </div>
                <div class="col-md-5">
                    <div class="map">
                        <iframe src="https://yandex.com/map-widget/v1/?um=constructor%3A8771966f064672b1228893a04d4cde6c25ce6ea46c0d91efdec5276ad3e0e8d2&amp;source=constructor"
                                width="100%" height="421" frameborder="0"></iframe>
                    </div>
                    <div class="address text-center mt-4">
                        <h3 class="color_blue font-weight-bold">Адрес и Время работы</h3>
                    </div>
                    <div class="add_address">
                        <p class="color_gray text-right">DIOKS DREAM LOGISTICS готов помочь вам при транспортировке
                            вашего груза по адресу:</p>
                        <p class="color_blue font-weight-bold text-right">г. Ташкент Мирабадский район, ул. А.
                            Фитрат
                            дом-2/1 с 9:00 до 18:00 с Понедельника по Пятницу</p>
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
                        <a href="#">
                            <img class="invert" src="images/banner/logo.svg" alt="">
                        </a>
                    </div>
                    <div class="col-md-7 text-right d-flex align-items-center justify-content-end">
                        <ul
                                class="list-unstyled p-0 m-0 d-flex align-items-center justify-content-end nav_items_footer">
                            <li><a class="nav_items_footer_link" href="#">Гарантии</a></li>
                            <li><a class="nav_items_footer_link" href="#">Услуги</a></li>
                            <li><a class="nav_items_footer_link" href="#">FAQ</a></li>
                            <li><a class="nav_items_footer_link" href="#">Контакты </a></li>

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
