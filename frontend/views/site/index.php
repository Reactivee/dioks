<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Application';

?>
<section class="check_order ">
    <div class="container">
        <div class="row">
            <div class="col-md-6 pr-5">
                <div class="check_wrapper overflow-hidden h-100">
                    <div class="check_wrapper_title">Проверьте локацию груза</div>
                    <div class="check_wrapper_time font-weight-bold">24/7</div>
                    <div class="check_form  h-100">
                        <div class="check_order_label mb-3">Трек-номер груза</div>
                        <div class=" d-flex align-items-center">
                            <input type="text" class="w-100 check_order_input"
                                   placeholder="Введите трек-номер вашего груза">
                            <a class="btn check_order_btn">Поиск</a>
                        </div>
                        <span class="check_info">Актуальная информация о статусе вашего груза и городе его
                                расположения</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 pl-5 h-100">
                <div class="check_response">
                    <div class="res_title">Информация о Вашем перевозке</div>
                    <div class="status_order">Статус заказа</div>
                    <div class="country">Страна</div>
                    <div class="city">Город</div>
                    <div class="delivery_time">Примерное время доставки</div>
                </div>
                <div class="map">
                    <iframe src="https://yandex.com/map-widget/v1/?um=constructor%3A8771966f064672b1228893a04d4cde6c25ce6ea46c0d91efdec5276ad3e0e8d2&amp;source=constructor"
                            width="100%" height="321" frameborder="0"></iframe>
                </div>
            </div>
        </div>
</section>
<section class="guaranty">
    <div class="container">
        <div class="title_guaranty text-center">
            <h2>Наши Гарантии</h2>
        </div>
        <div class="title_guaranty_text text-center ">
            <span>Мы предоставляем лицензированные услуги перевозок по всему миру</span>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-md-4">
                <div class="col-item-gua text-center">
                    <div class="col-item-gua_img">

                        <img class="round_icon" src="images/icons/Круги 2.svg" alt="">
                        <img class="add_icon" src="images/icons/🦆 icon _truck_.svg" alt="">

                    </div>
                    <div class="col-item-gua_title  mt-4">Гарантии при перевозке груза</div>
                    <div class="col-item-gua_label  mt-2">Гарантии при перевозке груза</div>
                    <a class="gua_down color_red mt-5"><img src="images/icons/down 2.svg" alt="">Скачать
                        презентацию о компании</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="col-item-gua  text-center">
                    <div class="col-item-gua_img col-item-gua_border">
                        <img class="round_icon" src="images/icons/Круги 2.svg" alt="">
                        <img class="add_icon" src="images/icons/🦆 icon _Alternate Money Bill_.svg" alt="">

                    </div>
                    <div class="col-item-gua_title  mt-4">Гарантии при перевозке груза</div>
                    <div class="col-item-gua_label  mt-2">Гарантии при перевозке груза</div>
                    <a class="gua_down color_red mt-5"><img src="images/icons/down 2.svg" alt="">Скачать
                        презентацию о компании</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="col-item-gua text-center">
                    <div class="col-item-gua_img">
                        <img class="round_icon" src="images/icons/Круги 2.svg" alt="">
                        <img class="add_icon" src="images/icons/🦆 icon _Alternate Map Marker_.svg" alt="">
                    </div>
                    <div class="col-item-gua_title  mt-4">Гарантии при перевозке груза</div>
                    <div class="col-item-gua_label  mt-2">Гарантии при перевозке груза</div>
                    <a class="gua_down color_red mt-5"> <img src="images/icons/down 2.svg" alt=""> Скачать
                        презентацию о компании</a>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="calculation">
    <div class="container">
        <div class="title_guaranty text-center ">
            <h2 class="color_blue">Стоимость отправки груза</h2>
        </div>
        <div class="title_guaranty_text text-center ">
                <span class="color_blue">Мы рассчитаем Вам стоимость груза исходя из ваших данных и отправим на вашу
                    почту готовое
                    коммерческое предложение</span>
        </div>

        <div class="row mt-5 justify-content-center align-items-center">
            <div class="col-md-5">
                <label for="" class="form_label">ОТКУДА</label>
                <input type="text" class="form-control form_calculate" placeholder="Выбрать город отправки">
            </div>
            <div class="col-md-2 text-center">
                <div class="arrow d-flex flex-column justify-content-center align-items-center">
                    <img src="images/icons/Прво.svg" alt="">
                    <img class="arrow_left" src="images/icons/Прво.svg" alt="">
                </div>
            </div>
            <div class="col-md-5">
                <label for="" class="form_label">КУДА</label>
                <input type="text" class="form-control form_calculate" placeholder="Выбрать город получения">
            </div>
            <div class="col-md-5">
                <label for="" class="form_label">КУДА</label>
                <input type="text" class="form-control form_calculate" placeholder="Выбрать город получения">
            </div>
            <div class="col-md-2 text-center">

            </div>
            <div class="col-md-5">
                <label for="" class="form_label">КУДА</label>
                <input type="text" class="form-control form_calculate" placeholder="Выбрать город получения">
            </div>

            <div class="col-md-5">
                <label for="" class="form_label">КУДА</label>
                <input type="text" class="form-control form_calculate" placeholder="Выбрать город получения">
            </div>
            <div class="col-md-2 text-center">

            </div>
            <div class="col-md-5">
                <label for="" class="form_label">КУДА</label>
                <input type="text" class="form-control form_calculate" placeholder="Выбрать город получения">
            </div>
            <div class="send_form d-block mt-4 flex-column">
                <button class="btn btn-primary">Отправить</button>
            </div>

        </div>
        <div class="d-block text-center">
            <input type="checkbox" class="mt-4">
            <span class="title_guaranty_text text-center color_gray">
                    Отправить коммерческое предложение
                </span>
        </div>
    </div>
</section>
<section class="gallary">
    <img class="w-100" src="images/banner/Frame 94.png" alt="">
</section>
<section class="service">
    <div class="container">
        <div class="title_guaranty text-center">
            <h2 class="color_blue">Наши Услуги</h2>
        </div>
        <div class="title_guaranty_text text-center ">
                <span class="color_gray">Обеспечиваем безопасность перевозимого груза и консультируем при
                    погрузке</span>
        </div>
        <div class="row justify-content-between mt-5 flex-wrap">
            <div class="col-md-service">
                <div class="col-item-gua text-center">
                    <div class="col-item-gua_img">
                        <img class="" src="images/icons/Component 10.svg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-service">
                <div class="col-item-gua  text-center">
                    <div class="col-item-gua text-center">
                        <div class="col-item-gua_img">
                            <img class="" src="images/icons/Component 11.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-service">
                <div class="col-item-gua  text-center">
                    <div class="col-item-gua text-center">
                        <div class="col-item-gua_img">
                            <img class="" src="images/icons/Component 12.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-service">
                <div class="col-item-gua  text-center">
                    <div class="col-item-gua text-center">
                        <div class="col-item-gua_img">
                            <img class="" src="images/icons/Component 13.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-service">
                <div class="col-item-gua  text-center">
                    <div class="col-item-gua text-center">
                        <div class="col-item-gua_img">
                            <img class="" src="images/icons/Component 14.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-service">
                <div class="col-item-gua  text-center">
                    <div class="col-item-gua text-center">
                        <div class="col-item-gua_img">
                            <img class="" src="images/icons/Component 15.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-service">
                <div class="col-item-gua  text-center">
                    <div class="col-item-gua text-center">
                        <div class="col-item-gua_img">
                            <img class="" src="images/icons/Component 16.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-service">
                <div class="col-item-gua  text-center">
                    <div class="col-item-gua text-center">
                        <div class="col-item-gua_img">
                            <img class="" src="images/icons/Component 17.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-service">
                <div class="col-item-gua  text-center">
                    <div class="col-item-gua text-center">
                        <div class="col-item-gua_img">
                            <img class="" src="images/icons/Component 8 (1).svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-service">
                <div class="col-item-gua  text-center">
                    <div class="col-item-gua text-center">
                        <div class="col-item-gua_img">
                            <img class="" src="images/icons/Component 9 (1).svg" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>