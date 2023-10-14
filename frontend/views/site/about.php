<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<main class="page about_us-page" data-page="page">
    <section class="section section--information-banner bg_cover">
        <div class="information-banner">
            <div class="information-banner__title title_normal-bold size_max">
                О нас
            </div>
            <div class="information-banner__crumbs size_xx title_normal-bold">
                <ul class="crumbs theme--inherit">
                    <li class="crumb theme--inherit">Главное</li>
                    <li class="crumb theme--inherit"> О нас</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="section section--about-company">
        <div class="about-company container">
            <div class=" row">
                <div class="about-company__photo col-md-5">
                    <img class="about-company__img w-h-100"
                         src="http://ohioinsureplan.com/wp-content/uploads/2018/04/Depositphotos_65548041_l-2015.jpg"
                         alt="company photo">
                </div>
                <div class="about-company__info col-md-7">
                    <div class="about-company__title title_light-bold size_6x">
                        Коротко о нас
                    </div>
                    <div class="about-company__desc title_normal size_xx lh_6x">
                        Динамично развивающаяся компания, которая поможет исполнить вашу мечту об обучении
                        зарубежом. Мы поможем вам при поступлении в бакалавриат или магистратуру в зарубежный
                        университет, поможем реализовать ваш потенциал и достичь ваших целей
                    </div>
                    <div class="about-company__check-list">
                        <div class="check-list">
                            <div class="check-list__title title_normal size_3x">С нами вы сможете:</div>
                            <ul class="check-list__block">
                                <li class="check-list__item">
                                            <span class="check-list_icon square--31">
                                                <svg class="check-list_icon-svg w-h-100">
                                                    <use xlink:href="/icons/sprite-svg.svg#checkbox-red"/>
                                                </svg>
                                            </span>
                                    <span class="check-list__item_text title_normal size_xx">поступить в престижный зарубужный университет</span>
                                </li>
                                <li class="check-list__item">
                                            <span class="check-list_icon square--31">
                                                <svg class="check-list_icon-svg w-h-100">
                                                    <use xlink:href="/icons/sprite-svg.svg#checkbox-red"/>
                                                </svg>
                                            </span>
                                    <span class="check-list__item_text title_normal size_xx">получить качественное образование и возможность путешествия</span>
                                </li>
                                <li class="check-list__item">
                                            <span class="check-list_icon square--31">
                                                <svg class="check-list_icon-svg w-h-100">
                                                    <use xlink:href="/icons/sprite-svg.svg#checkbox-red"/>
                                                </svg>
                                            </span>
                                    <span class="check-list__item_text title_normal size_xx">сэкономить деньги, время и нервы</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!--                    <div class="about-company__info__btn">-->
                    <!--                        <button class="btn btn--theme--white">-->
                    <!--                            <span class="btn__text">Подробнее</span>-->
                    <!--                        </button>-->
                    <!--                    </div>-->
                </div>
            </div>
        </div>
    </section>

    <div class="line container">
        <div class="line__item"></div>
    </div>

    <section class="section section--our-advantages bg_cover">
        <div class="our-advantages container">
            <div class="our-advantages__block">
                <div class="our-advantages__title title_light-bold size_6x txt_al_center">
                    Наши преимущества
                </div>
                <ul class="our-advantages__lists">
                    <li class="our-advantages__list">
                        <div class="cart-advantage">
                            <div class="cart-advantage__block">
                                <div class="cart-advantage__icon">
                                    <div class="square--116">
                                        <img src="/frontend/web/icons/about12.svg" alt="">
                                    </div>
                                </div>
                                <div class="cart-advantage__desc txt_al_center">
                                            <span class="text_normal size_3x">Работаем со многими университетами и
                                                странами</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="our-advantages__list">
                        <div class="cart-advantage">
                            <div class="cart-advantage__block">
                                <div class="cart-advantage__icon">
                                    <div class="square--116">
                                        <img src="/frontend/web/icons/about13.svg" alt="">
                                    </div>
                                </div>
                                <div class="cart-advantage__desc txt_al_center">
                                    <span class="text_normal size_3x">Открыто говорим о ценах на услуги, у нас нет лишних платежей и наценок</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="our-advantages__list">
                        <div class="cart-advantage">
                            <div class="cart-advantage__block">
                                <div class="cart-advantage__icon">
                                    <div class="square--116">
                                        <img src="/frontend/web/icons/about14.svg" alt="">
                                    </div>
                                </div>
                                <div class="cart-advantage__desc txt_al_center">
                                            <span class="text_normal size_3x">Работаем со многими университетами и
                                                странами</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="our-advantages__list">
                        <div class="cart-advantage">
                            <div class="cart-advantage__block">
                                <div class="cart-advantage__icon">
                                    <div class="square--116">
                                        <img src="/frontend/web/icons/about15.svg" alt="">
                                    </div>
                                </div>
                                <div class="cart-advantage__desc txt_al_center">
                                            <span class="text_normal size_3x">Работаем со многими университетами и
                                                странами</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="our-advantages__list">
                        <div class="cart-advantage">
                            <div class="cart-advantage__block">
                                <div class="cart-advantage__icon">
                                    <div class="square--116">
                                        <img src="/frontend/web/icons/about1.svg" alt="">

                                    </div>
                                </div>
                                <div class="cart-advantage__desc txt_al_center">
                                            <span class="text_normal size_3x">Работаем со многими университетами и
                                                странами</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="our-advantages__list">
                        <div class="cart-advantage">
                            <div class="cart-advantage__block">
                                <div class="cart-advantage__icon">
                                    <div class="square--116">
                                        <img src="/frontend/web/icons/about16.svg" alt="">
                                    </div>
                                </div>
                                <div class="cart-advantage__desc txt_al_center">
                                            <span class="text_normal size_3x">Работаем со многими университетами и
                                                странами</span>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- <section class="section section--feedback">
        <div class="feedback container">
            <div class="feedback__block">
                <div class="feedback__title title_light-bold size_6x">
                    Не знаете с чего начать?
                    <p class="feedback__desc title_normal size_xx"> Начните с консультации, свяжитесь с нами</p>
                </div>
                <div class="feedback__info">
                    <div class="feedback__item feedback__location">
                        <div class="feedback__item__top">
                            <svg class="feedback__item-svg feedback__location-svg w-h-100">
                                <use xlink:href="./assets/icons/sprite-svg.svg#location_circle" />
                            </svg>
                        </div>
                        <div class="feedback__item__bottom">
                            <div class="title_light-bold size_4x">
                                г. Ташкент, улица Навоий, 65
                            </div>
                            <div class="text_normal size_xx">
                                Приезжайте в наш офис на консультацию
                            </div>
                        </div>
                    </div>
                    <div class="feedback__item feedback__phone">
                        <div class="feedback__item__top">
                            <svg class="feedback__item-svg feedback__phone-svg w-h-100">
                                <use xlink:href="./assets/icons/sprite-svg.svg#phone_circle" />
                            </svg>
                        </div>
                        <div class="feedback__item__bottom">
                            <div class="title_light-bold size_4x">
                                г. Ташкент, улица Навоий, 65
                            </div>
                            <div class="text_normal size_xx">
                                Приезжайте в наш офис на консультацию
                            </div>
                        </div>
                    </div>
                    <div class="feedback__item feedback__mail">
                        <div class="feedback__item__top">
                            <svg class="feedback__item-svg feedback__mail-svg w-h-100">
                                <use xlink:href="./assets/icons/sprite-svg.svg#mail_circle" />
                            </svg>
                        </div>
                        <div class="feedback__item__bottom">
                            <div class="title_light-bold size_4x">
                                г. Ташкент, улица Навоий, 65
                            </div>
                            <div class="text_normal size_xx">
                                Приезжайте в наш офис на консультацию
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section> -->

    <section class="section section--working">
        <div class="working w-h-100 container">
            <div class="">
                <div class="working__block">
                    <div class="working__title title_light-bold size_6x">Как мы работаем?</div>
                    <ul class="working__lists">
                        <li class="working__list">
                            <div class="numerable numerable--theme--primary">
                                <div class="numerable__count square--116 step_round">
                                    <svg class="numerable__count-svg w-h-100">
                                        <use xlink:href="/icons/sprite-svg.svg#circle"/>
                                    </svg>
                                    <div class="numerable__count_num title_light-bold size_6x">1</div>
                                </div>
                                <div class="numerable__text text_normal size_3x">
                                    узнаем вас и ваши предпочтения
                                </div>
                            </div>
                        </li>
                        <li class="working__list">
                            <div class="numerable numerable--theme--primary">
                                <div class="numerable__count square--116 step_round">
                                    <svg class="numerable__count-svg w-h-100">
                                        <use xlink:href="/icons/sprite-svg.svg#circle"/>
                                    </svg>
                                    <div class="numerable__count_num title_light-bold size_6x">2</div>
                                </div>
                                <div class="numerable__text text_normal size_3x">
                                    подберем страну и университет
                                </div>
                            </div>
                        </li>
                        <li class="working__list">
                            <div class="numerable numerable--theme--primary">
                                <div class="numerable__count square--116 step_round">
                                    <svg class="numerable__count-svg w-h-100">
                                        <use xlink:href="/icons/sprite-svg.svg#circle"/>
                                    </svg>
                                    <div class="numerable__count_num title_light-bold size_6x">3</div>
                                </div>
                                <div class="numerable__text text_normal size_3x">
                                    подготовим документы и подадим заявку
                                </div>
                            </div>
                        </li>
                        <li class="working__list">
                            <div class="numerable numerable--theme--primary">
                                <div class="numerable__count square--116 step_round">
                                    <svg class="numerable__count-svg w-h-100">
                                        <use xlink:href="/icons/sprite-svg.svg#circle"/>
                                    </svg>
                                    <div class="numerable__count_num title_light-bold size_6x">4</div>
                                </div>
                                <div class="numerable__text text_normal size_3x">
                                    сообщим о приглашениях от ВУЗов
                                </div>
                            </div>
                        </li>
                        <li class="working__list">
                            <div class="numerable numerable--theme--primary">
                                <div class="numerable__count square--116 step_round">
                                    <svg class="numerable__count-svg w-h-100">
                                        <use xlink:href="/icons/sprite-svg.svg#circle"/>
                                    </svg>
                                    <div class="numerable__count_num title_light-bold size_6x">5</div>
                                </div>
                                <div class="numerable__text text_normal size_3x">
                                    поддержим при получении Визы
                                </div>
                            </div>
                        </li>
                        <li class="working__list">
                            <div class="numerable numerable--theme--primary">
                                <div class="numerable__count square--116 step_round">
                                    <svg class="numerable__count-svg w-h-100">
                                        <use xlink:href="/icons/sprite-svg.svg#circle"/>
                                    </svg>
                                    <div class="numerable__count_num title_light-bold size_6x">6</div>
                                </div>
                                <div class="numerable__text text_normal size_3x">
                                    будем на связи и во время учебы зарубежом
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!-- <section class="section section--our-service">
        <div class="our-service container">
            <div class="our-service__block faq__block">
                <div class="our-service__title txt_al_center title_light-bold size_6x">Наши услуги</div>
                <ul class="our-service__lists faq__lists">
                    <li class="our-service__list faq__list">
                        <div class="accordion">
                            <div class="accordion__block">
                                <div class="accordion__info">
                                    <div class="accordion__title title_light-bold size_4x">Какие услуги
                                        оказывают
                                        Ustudent?
                                    </div>
                                    <ul class="accordion__lists accordion__desc">
                                        <li class="accordion__list title_normal size_xx lh_5xx">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                            nonummy
                                            nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                                            volutpat. Ut
                                            wisi enim ad minim veniam, quis
                                        </li>
                                    </ul>
                                </div>
                                <div class="accordion__btn">
                                    <div class="accordion__btn__block square--64">
                                        <span class="bg_dark-blue"></span>
                                        <span class="bg_dark-blue"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="our-service__list faq__list">
                        <div class="accordion">
                            <div class="accordion__block">
                                <div class="accordion__info">
                                    <div class="accordion__title title_light-bold size_4x">Какие услуги
                                        оказывают
                                        Ustudent?
                                    </div>
                                    <ul class="accordion__lists accordion__desc">
                                        <li class="accordion__list title_normal size_xx lh_5xx">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                            nonummy
                                            nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                                            volutpat. Ut
                                            wisi enim ad minim veniam, quis
                                        </li>
                                    </ul>
                                </div>
                                <div class="accordion__btn">
                                    <div class="accordion__btn__block square--64">
                                        <span class="bg_dark-blue"></span>
                                        <span class="bg_dark-blue"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="our-service__list faq__list">
                        <div class="accordion">
                            <div class="accordion__block">
                                <div class="accordion__info">
                                    <div class="accordion__title title_light-bold size_4x">Какие услуги
                                        оказывают
                                        Ustudent?
                                    </div>
                                    <ul class="accordion__lists accordion__desc">
                                        <li class="accordion__list title_normal size_xx lh_5xx">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                            nonummy
                                            nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                                            volutpat. Ut
                                            wisi enim ad minim veniam, quis
                                        </li>
                                    </ul>
                                </div>
                                <div class="accordion__btn">
                                    <div class="accordion__btn__block square--64">
                                        <span class="bg_dark-blue"></span>
                                        <span class="bg_dark-blue"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="our-service__list faq__list">
                        <div class="accordion">
                            <div class="accordion__block">
                                <div class="accordion__info">
                                    <div class="accordion__title title_light-bold size_4x">Какие услуги
                                        оказывают
                                        Ustudent?
                                    </div>
                                    <ul class="accordion__lists accordion__desc">
                                        <li class="accordion__list title_normal size_xx lh_5xx">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                            nonummy
                                            nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                                            volutpat. Ut
                                            wisi enim ad minim veniam, quis
                                        </li>
                                    </ul>
                                </div>
                                <div class="accordion__btn">
                                    <div class="accordion__btn__block square--64">
                                        <span class="bg_dark-blue"></span>
                                        <span class="bg_dark-blue"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="our-service__list faq__list">
                        <div class="accordion">
                            <div class="accordion__block">
                                <div class="accordion__info">
                                    <div class="accordion__title title_light-bold size_4x">Какие услуги
                                        оказывают
                                        Ustudent?
                                    </div>
                                    <ul class="accordion__lists accordion__desc">
                                        <li class="accordion__list title_normal size_xx lh_5xx">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                            nonummy
                                            nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                                            volutpat. Ut
                                            wisi enim ad minim veniam, quis
                                        </li>
                                    </ul>
                                </div>
                                <div class="accordion__btn">
                                    <div class="accordion__btn__block square--64">
                                        <span class="bg_dark-blue"></span>
                                        <span class="bg_dark-blue"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="our-service__list faq__list">
                        <div class="accordion">
                            <div class="accordion__block">
                                <div class="accordion__info">
                                    <div class="accordion__title title_light-bold size_4x">Какие услуги
                                        оказывают
                                        Ustudent?
                                    </div>
                                    <ul class="accordion__lists accordion__desc">
                                        <li class="accordion__list title_normal size_xx lh_5xx">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                            nonummy
                                            nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                                            volutpat. Ut
                                            wisi enim ad minim veniam, quis
                                        </li>
                                    </ul>
                                </div>
                                <div class="accordion__btn">
                                    <div class="accordion__btn__block square--64">
                                        <span class="bg_dark-blue"></span>
                                        <span class="bg_dark-blue"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="our-service__list faq__list">
                        <div class="accordion">
                            <div class="accordion__block">
                                <div class="accordion__info">
                                    <div class="accordion__title title_light-bold size_4x">Какие услуги
                                        оказывают
                                        Ustudent?
                                    </div>
                                    <ul class="accordion__lists accordion__desc">
                                        <li class="accordion__list title_normal size_xx lh_5xx">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                            nonummy
                                            nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                                            volutpat. Ut
                                            wisi enim ad minim veniam, quis
                                        </li>
                                    </ul>
                                </div>
                                <div class="accordion__btn">
                                    <div class="accordion__btn__block square--64">
                                        <span class="bg_dark-blue"></span>
                                        <span class="bg_dark-blue"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="our-service__list faq__list">
                        <div class="accordion">
                            <div class="accordion__block">
                                <div class="accordion__info">
                                    <div class="accordion__title title_light-bold size_4x">Какие услуги
                                        оказывают
                                        Ustudent?
                                    </div>
                                    <ul class="accordion__lists accordion__desc">
                                        <li class="accordion__list title_normal size_xx lh_5xx">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                            nonummy
                                            nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                                            volutpat. Ut
                                            wisi enim ad minim veniam, quis
                                        </li>
                                    </ul>
                                </div>
                                <div class="accordion__btn">
                                    <div class="accordion__btn__block square--64">
                                        <span class="bg_dark-blue"></span>
                                        <span class="bg_dark-blue"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="our-service__list faq__list">
                        <div class="accordion">
                            <div class="accordion__block">
                                <div class="accordion__info">
                                    <div class="accordion__title title_light-bold size_4x">Какие услуги
                                        оказывают
                                        Ustudent?
                                    </div>
                                    <ul class="accordion__lists accordion__desc">
                                        <li class="accordion__list title_normal size_xx lh_5xx">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                            nonummy
                                            nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                                            volutpat. Ut
                                            wisi enim ad minim veniam, quis
                                        </li>
                                    </ul>
                                </div>
                                <div class="accordion__btn">
                                    <div class="accordion__btn__block square--64">
                                        <span class="bg_dark-blue"></span>
                                        <span class="bg_dark-blue"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section> -->

    <!-- <section class="section section--question">
        <div class="question w-h-100 container">
            <div class="question__form">
                <form class="form" action="/" method="post">
                    <div class="form__title title_light-bold size_7x">Остались вопросы?</div>
                    <div class="form__description title_normal size_xx">Ждем вас на консультации, оставить
                        заявку</div>

                    <div class="form__input">
                        <label class="label label__input_text">
                            <input class="input" type="text" placeholder="Ваше имя" name="name">
                        </label>
                        <label class="label label__input_text">
                            <input class="input" type="text" placeholder="Ваш номер" name="phone">
                        </label>

                        <label class="label label__input_checkbox">
                            <span class="input_checkbox">
                                <input class="input input_checkbox" type="checkbox">
                            </span>
                            <span class="input_checkbox_desc text_normal size_min">Я согласен с тем, что мои
                                данные собираются и будут храниться</span>
                        </label>

                        <button class="btn btn--theme--primary">
                            <span class="btn__text">Оставить заявку</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section> -->

    <!-- <section class="section section--about-company section--about-company--reverse">
        <div class="about-company container">
            <div class="about-company__block block--reverse">
                <div class="about-company__photo">
                    <img class="about-company__img w-h-100"
                        src="http://ohioinsureplan.com/wp-content/uploads/2018/04/Depositphotos_65548041_l-2015.jpg"
                        alt="company photo">
                </div>
                <div class="about-company__info">
                    <div class="about-company__title title_light-bold size_6x">
                        Коротко о нас
                    </div>
                    <div class="about-company__desc title_normal size_xx lh_6x">
                        Динамично развивающаяся компания, которая поможет исполнить вашу мечту об обучении
                        зарубежом. Мы поможем вам при поступлении в бакалавриат или магистратуру в зарубежный
                        университет, поможем реализовать ваш потенциал и достичь ваших целей
                    </div>
                    <div class="about-company__check-list">
                        <div class="check-list">
                            <div class="check-list__title title_normal size_3x">С нами вы сможете:</div>
                            <ul class="check-list__block">
                                <li class="check-list__item">
                                    <span class="check-list_icon square--31">
                                        <svg class="check-list_icon-svg w-h-100">
                                            <use xlink:href="./assets/icons/sprite-svg.svg#checkbox-red" />
                                        </svg>
                                    </span>
                                    <span class="check-list__item_text title_normal size_xx">поступить в
                                        престижный зарубужный университет</span>
                                </li>
                                <li class="check-list__item">
                                    <span class="check-list_icon square--31">
                                        <svg class="check-list_icon-svg w-h-100">
                                            <use xlink:href="./assets/icons/sprite-svg.svg#checkbox-red" />
                                        </svg>
                                    </span>
                                    <span class="check-list__item_text title_normal size_xx">поступить в
                                        престижный зарубужный университет</span>
                                </li>
                                <li class="check-list__item">
                                    <span class="check-list_icon square--31">
                                        <svg class="check-list_icon-svg w-h-100">
                                            <use xlink:href="./assets/icons/sprite-svg.svg#checkbox-red" />
                                        </svg>
                                    </span>
                                    <span class="check-list__item_text title_normal size_xx">поступить в
                                        престижный зарубужный университет</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="about-company__info__btn">
                        <button class="btn btn--theme--white">
                            <span class="btn__text">Подробнее</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <?
    echo \frontend\widgets\SubmitForm::widget()
    ?>
</main>
