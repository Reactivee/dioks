<?php

/** @var yii\web\View $this */

use kartik\select2\Select2;
use kartik\typeahead\Typeahead;
use voime\GoogleMaps\Map;
use yii\helpers\Url;
use yii\web\JsExpression;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;
use frontend\widgets\LanguagePicker;

$this->title = 'DIOKS';

?>

 
    
                <?=
                  $this->render('../layouts/header');
                ?>
  
<section id="check_order" class="check_order ">
    <div class="container">

        <? Pjax::begin(); ?>

        <?php $form = ActiveForm::begin(['id' => 'fform', 'method' => 'POST',
            'options' => ['data' => ['pjax' => 1]]]); ?>


        <div class="row">
            <div class="col-md-6 pr-0 pr-md-5">
                <div class="check_wrapper overflow-hidden h-100">
                    <div class="check_wrapper_title"><?= Yii::t('main', 'check_cargo') ?> </div>
                    <div class="check_wrapper_time font-weight-bold">24/7</div>
                    <div class="check_form">
                        <div class="check_order_label mb-3"><?= Yii::t('main', 'cargo_id') ?></div>
                        <div class="  d-flex align-items-center">
                            <input type="text" name="truck" class="w-100 check_order_input"
                                   placeholder="<?= Yii::t('main', 'cargo_id_type') ?>">
                            <button type="submit" class="btn check_order_btn"> <?= Yii::t('main', 'search') ?></button>
                        </div>
                        <!--                        <span class="check_info">Актуальная информация о статусе вашего груза и городе его-->
                        <!--                                расположения</span>-->
                    </div>
                </div>
            </div>
            <div class="col-md-6 pl-0 pl-md-5 h-100">
                <div class="check_response">

                    <? if ($order) { ?>
                        <div class="res_title"><?= Yii::t('main', 'Infromation') ?> </div>
                        <div class="status_order"><?= Yii::t('main', 'status') ?> <span
                                    class="font-weight-bold"> <?= $order->getStatusFront() ?? '' ?></span></div>
                        <div class="country">
                            <?= Yii::t('main', 'Сountry') ?> <span
                                    class="font-weight-bold">  <?= $order->getCurrently()[0] ?></span></div>
                        <div class="city">
                            <?= Yii::t('main', 'City') ?> <span
                                    class="font-weight-bold">  <?= $order->getCurrently()[1] ?> </span>
                        </div>
                        <div class="delivery_time">
                            <?= Yii::t('main', 'time') ?> <span
                                    class="font-weight-bold">  <?= $order->delivery_time ? date('Y-m-d H:i:s', $order->delivery_time) : ''; ?>
                            </span>
                        </div>
                    <? } ?>
                </div>


                <div class="map">
                    <?

                    //                    dd($order->locations[0]);
                    if ($order->locations) { ?>
                        <span class="d-none" id="long"><?= $order->locations[0] ?></span>
                        <span class="d-none" id="lat"><?= $order->locations[1] ?></span>

                        <div style="height: 450px" id="map"></div>
                        <?php
                        $script = <<<JS
                             let long = document.querySelector('#long').innerHTML;
                             let lat = document.querySelector('#lat').innerHTML;
                             
                            var map = L.map('map').setView([long, lat], 14);
                            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                                maxZoom: 20
                            }).addTo(map);
                               var marker = L.marker([long, lat]).addTo(map);
                               marker.bindPopup("DIOKS").openPopup();
                JS;
                        $this->registerJs($script); ?>

                        <?

//                        echo Map::widget([
//                            'apiKey' => 'AIzaSyC4HKfavBAaIgIGJCQ_zhly1V1yfjehW_E',
//                            'zoom' => 16,
//                            'center' => $order->locations,
//                            'markers' => [
//                                ['position' => 'Tartu', 'title' => 'marker title', 'content' => 'InfoWindow content', 'options' => ["icon" => "'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png'"]],
//                                ['position' => $order->locations],
//                            ],
//
//                            'height' => '350px',
//                            'mapType' => Map::MAP_TYPE_ROADMAP,
//                        ]);

                    }
                    ?>
                  
                </div>

            </div>
        </div>

        <?php ActiveForm::end(); ?>


        <? Pjax::end(); ?>

</section>
<section id="guaranty" class="guaranty">
    <div class="container">
        <div class="title_guaranty text-center">
            <h2>  <?= Yii::t('main', 'guaranty') ?></h2>
        </div>
        <div class="title_guaranty_text text-center ">
            <span> <?= Yii::t('main', 'provide') ?></span>
        </div>
        <div class="row justify-content-center mt-5">
            <div data-aos="fade-up" data-aos-delay="300" class="col-md-4">
                <div class="col-item-gua text-center">
                    <div class="col-item-gua_img">
                        <img class="round_icon" src="images/icons/Круги 2.svg" alt="">
                        <img class="add_icon" src="images/icons/🦆 icon _truck_.svg" alt="">
                    </div>
                    <div class="col-item-gua_title  mt-4"> <?= Yii::t('main', 'transportation_guarantees') ?>
                    </div>
                    <div class="col-item-gua_label  mt-2"> <?= Yii::t('main', 'years') ?>
                    </div>
                    <a class="gua_down color_red mt-5"><img class="mr-2" src="images/icons/down 2.svg" alt="">
                        <?= Yii::t('main', 'present') ?>
                    </a>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-delay="400" class="col-md-4">
                <div class="col-item-gua  text-center">
                    <div class="col-item-gua_img">
                        <div class="col-item-gua_border_left"></div>
                        <div class="col-item-gua_border_right"></div>
                        <img class="round_icon" src="images/icons/Круги 2.svg" alt="">
                        <img class="add_icon" src="images/icons/🦆 icon _Alternate Money Bill_.svg" alt="">
                    </div>
                    <div class="col-item-gua_title  mt-4"> <?= Yii::t('main', 'payment') ?>
                    </div>
                    <div class="col-item-gua_label  mt-2"> <?= Yii::t('main', 'detail') ?>
                    </div>
                    <a class="gua_down color_red mt-5"><img class="mr-2" src="images/icons/down 2.svg" alt="">
                        <?= Yii::t('main', 'offer') ?>
                    </a>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-delay="500" class="col-md-4">
                <div class="col-item-gua text-center">
                    <div class="col-item-gua_img">
                        <img class="round_icon" src="images/icons/Круги 2.svg" alt="">
                        <img class="add_icon" src="images/icons/🦆 icon _Alternate Map Marker_.svg" alt="">
                    </div>
                    <div class="col-item-gua_title  mt-4"> <?= Yii::t('main', 'ser_guaranty') ?>
                    </div>
                    <div class="col-item-gua_label  mt-2"> <?= Yii::t('main', 'tech_support') ?>
                    </div>
                    <a class="gua_down color_red mt-5"> <img class="mr-2" src="images/icons/down 2.svg" alt="">
                        <?= Yii::t('main', 'location') ?></a>
                </div>
            </div>

        </div>
    </div>
</section>
<section id="order" class="calculation">
    <div class="container">
        <div class="title_guaranty text-center ">
            <h2 class="color_blue"><?= Yii::t('main', 'cost') ?></h2>
        </div>
        <div class="title_guaranty_text text-center ">
            <span class="color_blue"><?= Yii::t('main', 'cost_text') ?></span>
        </div>

        <!-- form send order-->
        <? $form = ActiveForm::begin([
            'method' => 'GET',
            'action' => '/site/get-order',
            'options' => ['autocomplete' => 'off']]) ?>

        <div class="row mt-5 justify-content-center align-items-center">
            <div class="col-md-5">

                <label for="from" class="form_label text-uppercase"><?= Yii::t('main', 'from') ?></label>
                <?

                echo $form->field($order, 'cargo_from_location')->widget(Typeahead::classname(), [
                    'options' => ['placeholder' => Yii::t('main', 'from'), 'class' => 'form-control form_calculate',],
                    'pluginOptions' => ['highlight' => true],
                    'dataset' => [
                        [
                            'local' => $city,
                            'limit' => 20
                        ]
                    ]
                ])->label(false);

                //                echo $form->field($order, 'cargo_from_location')->widget(Select2::classname(), [
                //                    'data' => $city,
                //                    'theme' => Select2::THEME_BOOTSTRAP,
                //                    'options' => ['class' => 'form-control form_calculate',
                //                        'placeholder' => Yii::t('main', 'from')],
                //                    'pluginOptions' => [
                //                        'allowClear' => true,
                ////                        'minimumInputLength' => 2,
                //
                //                        'ajax' => [
                //                            'url' => \yii\helpers\Url::to([
                //                                'get-city'
                //                            ]),
                //                            'dataType' => 'json',
                //                            'data' => new JsExpression('function(params) { return {q:params.term}; }')
                //                        ],
                //                    ],
                //                ])->label(false);
                ?>


                <!--                --><? //= $form->field($order, 'cargo_from_location')->dropDownList($city,
                //                    ['class' => 'form_calculate_drop form-control', 'id' => 'my_country'])->label(false) ?>

                <!--                --><? //= $form->field($order, 'additional_from')->textInput([
                //                    'id' => 'add_city',
                //                    'maxlength' => true,
                //                    'class' => 'form-control form_calculate',
                //                    'placeholder' => Yii::t('main', 'from')])->label(false) ?>

                <!--                <input type="text" name="from" class="form-control form_calculate" placeholder="Город отправки">-->

            </div>
            <div class="col-md-2 text-center">
                <div class="arrow d-flex flex-column justify-content-center align-items-center">
                    <img src="images/icons/Прво.svg" alt="">
                    <img class="arrow_left" src="images/icons/Прво.svg" alt="">
                </div>
            </div>
            <div class="col-md-5">
                <label for="from_to" class="form_label text-uppercase"><?= Yii::t('main', 'to') ?></label>
                <?
                echo $form->field($order, 'cargo_to_location')->widget(Typeahead::classname(), [
                    'options' => ['placeholder' => Yii::t('main', 'to'),'class' => 'form-control form_calculate',],
                    'pluginOptions' => ['highlight' => true],
                    'dataset' => [
                        [
                            'local' => $city,
                            'limit' => 20
                        ]
                    ]
                ])->label(false);
                //                echo $form->field($order, 'cargo_to_location')->widget(Select2::classname(), [
                //                    'data' => $city,
                //                    'theme' => Select2::THEME_BOOTSTRAP,
                //
                //                    'options' => ['class' => 'form-control form_calculate',
                //                        'placeholder' => Yii::t('main', 'to')],
                //                    'pluginOptions' => [
                //                        'allowClear' => true,
                ////                        'minimumInputLength' => 2,
                //                        'ajax' => [
                //                            'url' => \yii\helpers\Url::to([
                //                                'get-city'
                //                            ]),
                //                            'dataType' => 'json',
                //                            'data' => new JsExpression('function(params) { return {q:params.term}; }')
                //                        ],
                //
                //                    ],
                //                ])->label(false);
                ?>

                <!---->
                <!--                --><? //= $form->field($order, 'cargo_to_location')->dropDownList($city,
                //                    ['class' => 'form_calculate_drop form-control', 'id' => 'my_country_to'])->label(false) ?>

                <!--                --><? //= $form->field($order, 'additional_to')->textInput([
                //                    'id' => 'add_city_to',
                //                    'maxlength' => true,
                //                    'class' => 'form-control form_calculate',
                //                    'placeholder' => Yii::t('main', 'to')])->label(false) ?>

                <!---->
                <!--                <select name="from_to" class="form-control form_calculate_drop" placeholder="Выбрать город отправки">-->
                <!--                    --><? // foreach ($city as $key => $item) { ?>
                <!--                        <option class="form_calculate_option" value="--><? //= $key ?><!--">-->
                <? //= $item ?><!--</option>-->
                <!---->
                <!--                    --><? // } ?>
                <!--                </select>-->
                <!--                <input type="text" name="from_to" class="form-control form_calculate"-->
                <!--                       placeholder="Выбрать город получения">-->
            </div>

            <div class="col-md-5">
                <label for="how" class="form_label text-uppercase"><?= Yii::t('main', 'cargo_name') ?></label>
                <?= $form->field($order, 'name_ru')->textInput(['maxlength' => true,
                    'class' => 'form-control form_calculate',
                    'placeholder' => Yii::t('main', 'enter_name')])->label(false) ?>

            </div>

            <div class="col-md-2 text-center">

            </div>
            <div class="col-md-5">
                <label for="cargo_name" class="form_label text-uppercase"><?= Yii::t('main', 'type') ?></label>
                <?= $form->field($order, 'cargo_type')->dropDownList($transport, ['class' => 'form_calculate_drop form-control'])->label(false) ?>

                <!--                --><? //= $form->field($order, 'cargo_type')->textInput(['maxlength' => true,
                //                    'class' => 'form-control form_calculate',
                //                    'placeholder' => 'Выбрать вид транспорта'])->label(false) ?>

            </div>
            <div class="col-md-5">
                <label for="mass" class="form_label text-uppercase"><?= Yii::t('main', 'size') ?></label>
                <?= $form->field($order, 'mass')->textInput(['maxlength' => true,
                    'class' => 'form-control form_calculate',
                    'placeholder' => Yii::t('main', 'size_enter')])->label(false) ?>
            </div>
            <div class="col-md-2 text-center">

            </div>
            <div class="col-md-5">
                <label for="whom" class="form_label text-uppercase"><?= Yii::t('main', 'hscode') ?></label>
                <?= $form->field($order, 'code')->textInput(['maxlength' => true,
                    'class' => 'form-control form_calculate',
                    'placeholder' => Yii::t('main', 'hscode_enter')])->label(false) ?>
            </div>

            <div class="col-md-5">
                <label for="whom" class="form_label text-uppercase"><?= Yii::t('main', 'name') ?></label>

                <?= $form->field($order, 'client_name')->textInput(['maxlength' => true, 'class' => 'form-control form_calculate',
                    'placeholder' => Yii::t('main', 'name_enter')])->label(false) ?>

                <!--                <input type="text" name="name" class="form-control form_calculate"-->
                <!--                       placeholder="Введите ваше имя">-->
            </div>
            <div class="col-md-2 text-center">

            </div>
            <div class="col-md-5">
                <label for="how" class="form_label text-uppercase"><?= Yii::t('main', 'phone') ?></label>

                <?= $form->field($order, 'phone')->textInput(['maxlength' => true,
                    'id' => 'phone',
                    'class' => 'form-control form_calculate',
                    'placeholder' => Yii::t('main', 'phone_enter')])->label(false) ?>

                <!--                <input type="text" name="phone" class="form-control form_calculate"-->
                <!--                       placeholder="Введите ваш номер телефона">-->
            </div>

            <div class="send_form d-block mt-4 flex-column">
                <button type="submit" class="btn btn-primary"><?= Yii::t('main', 'send') ?></button>
            </div>

        </div>
        <div class="d-block text-center">
            <input onclick="myEmail()" type="checkbox" id="myCheck" class="mt-4">
            <span class="title_guaranty_text text-center color_gray">
                 <?= Yii::t('main', 'send_offer') ?> </span>
            <div class="row mt-3">
                <div class="col-md-4"></div>
                <div class="col-md-4 text-center">
                    <div id="email_input" style="display: none">

                        <?= $form->field($order, 'email')->textInput(['maxlength' => true,
                            'id' => '',
                            'class' => 'form-control form_calculate',
                            'placeholder' => Yii::t('main', 'email')])->label(false) ?>
                    </div>

                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
        <? ActiveForm::end() ?>


    </div>
</section>
<section class="gallary">
    <img class="w-100" src="images/banner/Frame 94.png" alt="">
</section>
<section id="service" class="service">
    <div class="container">
        <div class="title_guaranty text-center">
            <h2 class="color_blue"><?= Yii::t('main', 'Services') ?></h2>
        </div>
        <div class="title_guaranty_text text-center ">
            <span class="color_gray"><?= Yii::t('main', 'Services_text') ?></span>
        </div>
        <div class="row justify-content-between mt-5 flex-wrap">

            <div data-aos="fade-up" data-aos-delay="300" class="col-md-service">
                <div class="col-item-gua text-center d-flex flex-column align-items-center">
                    <div class="col-item-gua_img">
                        <img class="" src="/images/icons/Vector%20(6).svg" alt="">
                    </div>
                    <h3 class="title_service color_blue font-weight-bold"><?= Yii::t('main', 'Liquid cargo') ?></h3>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-delay="300" class="col-md-service">
                <div class="col-item-gua text-center d-flex flex-column align-items-center">
                    <div class="col-item-gua_img">
                        <img class="" src="/images/icons/Vector%20(7).svg" alt="">
                    </div>
                    <h3 class="title_service color_blue font-weight-bold"><?= Yii::t('main', 'Dangerous cargo') ?></h3>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-delay="300" class="col-md-service">
                <div class="col-item-gua text-center d-flex flex-column align-items-center">
                    <div class="col-item-gua_img">
                        <img class="" src="/images/icons/Vector%20(8).svg" alt="">
                    </div>
                    <h3 class="title_service color_blue font-weight-bold"><?= Yii::t('main', 'Flammable cargo') ?></h3>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-delay="300" class="col-md-service">
                <div class="col-item-gua text-center d-flex flex-column align-items-center">
                    <div class="col-item-gua_img">
                        <img class="" src="/images/icons/Vector%20(9).svg" alt="">
                    </div>
                    <h3 class="title_service color_blue font-weight-bold"><?= Yii::t('main', 'Plants') ?></h3>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-delay="300" class="col-md-service">
                <div class="col-item-gua text-center d-flex flex-column align-items-center">
                    <div class="col-item-gua_img">
                        <img class="" src="/images/icons/Vector%20(10).svg" alt="">
                    </div>
                    <h3 class="title_service color_blue font-weight-bold"><?= Yii::t('main', 'Fragile cargo') ?></h3>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-delay="300" class="col-md-service">
                <div class="col-item-gua text-center d-flex flex-column align-items-center">
                    <div class="col-item-gua_img">
                        <img class="" src="/images/icons/Vector%20(11).svg" alt="">
                    </div>
                    <h3 class="title_service color_blue font-weight-bold"><?= Yii::t('main', 'Bulk cargo') ?></h3>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-delay="300" class="col-md-service">
                <div class="col-item-gua text-center d-flex flex-column align-items-center">
                    <div class="col-item-gua_img">
                        <img class="" src="/images/icons/🦆%20icon%20_Carrot_.svg" alt="">
                    </div>
                    <h3 class="title_service color_blue font-weight-bold"><?= Yii::t('main', 'Fruit and vegetables') ?></h3>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-delay="300" class="col-md-service">
                <div class="col-item-gua text-center d-flex flex-column align-items-center">
                    <div class="col-item-gua_img">
                        <img class="" src="/images/icons/Vector%20(13).svg" alt="">
                    </div>
                    <h3 class="title_service color_blue font-weight-bold"><?= Yii::t('main', 'Food') ?></h3>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-delay="300" class="col-md-service">
                <div class="col-item-gua text-center d-flex flex-column align-items-center">
                    <div class="col-item-gua_img">
                        <img class="" src="/images/icons/Vector%20(14).svg" alt="">
                    </div>
                    <h3 class="title_service color_blue font-weight-bold"><?= Yii::t('main', 'Gaseous substances') ?></h3>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-delay="300" class="col-md-service">
                <div class="col-item-gua text-center d-flex flex-column align-items-center">
                    <div class="col-item-gua_img">
                        <img class="" src="/images/icons/Vector%20(15).svg" alt="">
                    </div>
                    <h3 class="title_service color_blue font-weight-bold"><?= Yii::t('main', 'Metal') ?></h3>
                </div>
            </div>


        </div>
    </div>
</section>
<section id="about" class=" about">
    <div class="container">
        <div class="title_guaranty text-center">
            <h2>  <?= Yii::t('main', 'about') ?></h2>
        </div>
        <div class="title_guaranty_text text-center ">
            <span> <?= Yii::t('main', 'about_text') ?></span>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="col-item-about text-center">
                    <div class="about_figure">15+</div>
                    <div class="about_figure_text"><?= Yii::t('main', 'about_year') ?></div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                <div class="col-item-about text-center">
                    <div class="about_figure">100+</div>
                    <div class="about_figure_text"><?= Yii::t('main', 'about_country') ?></div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="500">
                <div class="col-item-about text-center">
                    <div class="about_figure">1000+</div>
                    <div class="about_figure_text"><?= Yii::t('main', 'miles') ?></div>
                </div>
            </div>


        </div>
    </div>
</section>
<section class="container pt-5">
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
                        <a class="color_blue" href="tel:+998998800345">(+99899) <span class="font-weight-bold"> 880 03 45</span> </a>
                        <br>
                          <a class="color_blue" href="tel:+998947773525">(+99894) <span class="font-weight-bold"> 777 35 25</span> </a>
                        <br>
                    </div>

                </div>
            </div>
</section>

 

