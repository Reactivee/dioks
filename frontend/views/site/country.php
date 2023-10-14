<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Country';
$this->params['breadcrumbs'][] = $this->title;
?>
<main class="page main- page" data-page="page">
    <section class="section section--information-banner bg_cover">
        <div class="information-banner">
            <div class="information-banner__title title_normal-bold size_max">
                Малайзия
            </div>
            <div class="information-banner__crumbs size_xx title_normal-bold">
                <ul class="crumbs theme--inherit">
                    <li class="crumb theme--inherit">Главное</li>
                    <li class="crumb theme--inherit">Страны</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section section--about-country">
        <div class="about-country container">
            <div class="row ">
                <div class="col-md-6 about-country__left">
                    <div class="about-country__content">
                        <div class="about-country__content__title">
                            <p class="title_light-bold size_5x">Содержание</p>
                        </div>
                        <ul class="about-country__content__block">
                            <li class="about-country__content__item">
                                <p class="text_light_normal size_4x lh_7x">О Малайзии</p>
                            </li>
                            <li class="about-country__content__item">
                                <p class="text_light_normal size_4x lh_7x">Образование в Малайзии</p>
                            </li>
                            <li class="about-country__content__item">
                                <p class="text_light_normal size_4x lh_7x">Преимущества и Недостатки обучения в
                                    Малайзии</p>
                            </li>
                            <li class="about-country__content__item">
                                <p class="text_light_normal size_4x lh_7x">Система высшего оброзания</p>
                            </li>
                            <li class="about-country__content__item">
                                <p class="text_light_normal size_4x lh_7x">Стоимость обучения</p>
                            </li>
                            <li class="about-country__content__item">
                                <p class="text_light_normal size_4x lh_7x">Университеты Малайзии</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 about-country__right">
                    <div class="about-country__desc">
                        <div class="about-country__desc__title">
                            <p class="title_bold size_6x">О Малайзии</p>
                        </div>
                        <div class="about-country__desc__info">
                            <p
                                    class="about-country__desc__info_text text_normal size_xx lh_4xx about-country__desc__info_logo square--116">
                                <span class="title_logo">M</span>
                            </p>
                            <p class="about-country__desc__info_text text_normal size_xx lh_4xx">
                                Малайзия - это страна в
                                Юго-Восточной Азии, популярная своими белоснежными пляжами, развивающейся
                                экономикой
                                и многонациональной культурой.
                            </p>
                            <p class="about-country__desc__info_text text_normal size_xx lh_4xx">
                                Малайзия сумела сохранить свой культурный колорит и экзотику, является
                                уникальной
                                смесью современности и аутентичности, чем в последние годы привлекает все
                                большее
                                количество иностранных туристов и студентов.
                            </p>
                            <p class="about-country__desc__info_text text_normal size_xx lh_4xx">
                                Государственный язык малайский, но языком межнационального общения и ведения
                                бизнеса
                                является английский.
                            </p>
                            <p class="about-country__desc__info_text text_normal size_xx lh_4xx">
                                Местное население дружелюбное и гостеприимное, а высокий уровень безопасности
                                позволит спокойно заняться повседневной рутиной. В стране крайне редки кражи и
                                другие виды преступлении, не принято злоупотребление спиртными напитками и
                                наркотическими средствами, все это благоприятно влияют на качество жизни.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section--general-information">
        <img class="section--general-information__img w-h-100"
             src="/images/back-country.png" alt="">
        <div class="general-information container">
            <div class="general-information__block">
                <div class="general-information__title title_light-bold size_6x">Общая информация</div>
                <ul class="general-information__lists">
                    <li class="general-information__list">
                        <div class="general-information__icon square--80">
                            <svg class="display_flex w-h-100" xmlns="http://www.w3.org/2000/svg" width="80"
                                 height="80" viewBox="0 0 80 80" fill="none">
                                <path
                                        d="M63.3327 34.2156C63.3327 43.7029 51.5907 59.4151 44.7659 67.7461C42.269 70.794 37.7297 70.794 35.2328 67.7461C28.408 59.4151 16.666 43.7029 16.666 34.2156C16.666 20.8417 27.1127 9.99994 39.9994 9.99994C52.886 9.99994 63.3327 20.8417 63.3327 34.2156Z"
                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                <path
                                        d="M48.6673 33.3335C48.6673 38.1199 44.7871 42.0001 40.0006 42.0001C35.2142 42.0001 31.334 38.1199 31.334 33.3335C31.334 28.547 35.2142 24.6668 40.0006 24.6668C44.7871 24.6668 48.6673 28.547 48.6673 33.3335Z"
                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="general-information__key title_normal size_5x">Столица</div>
                        <div class="general-information__value title_light-bold size_6x">Куала-Лумпур</div>
                    </li>
                    <li class="general-information__list">
                        <div class="general-information__icon">
                            <svg class="display_flex w-h-100" xmlns="http://www.w3.org/2000/svg" width="81"
                                 height="80" viewBox="0 0 81 80" fill="none">
                                <path
                                        d="M8.33301 65C8.33301 55.9626 16.5411 50 26.6663 50C36.7916 50 44.9997 55.9626 44.9997 65M71.6663 56.6667C71.6663 47.6293 63.4582 41.6667 53.333 41.6667C49.6409 41.6667 46.2068 42.4188 43.333 43.8194M34.9997 31.6667C34.9997 36.269 31.2687 40 26.6663 40C22.064 40 18.333 36.269 18.333 31.6667C18.333 27.0643 22.064 23.3333 26.6663 23.3333C31.2687 23.3333 34.9997 27.0643 34.9997 31.6667ZM61.6663 23.3333C61.6663 27.9357 57.9354 31.6667 53.333 31.6667C48.7306 31.6667 44.9997 27.9357 44.9997 23.3333C44.9997 18.731 48.7306 15 53.333 15C57.9354 15 61.6663 18.731 61.6663 23.3333Z"
                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="general-information__key title_normal size_5x">Население</div>
                        <div class="general-information__value title_light-bold size_6x">32 382 300</div>
                    </li>
                    <li class="general-information__list">
                        <div class="general-information__icon">
                            <svg class="display_flex w-h-100" xmlns="http://www.w3.org/2000/svg" width="81"
                                 height="80" viewBox="0 0 81 80" fill="none">
                                <path
                                        d="M21.2903 54.8352C21.7563 53.5607 21.2149 52.1798 20.1115 51.3898C19.6005 51.0239 19.0961 50.6515 18.6069 50.2577C15.8245 48.0384 13.5132 45.3841 12.0972 42.0101C9.79765 36.5409 10.3156 31.2615 13.3302 26.2417C16.4572 21.035 21.0983 17.7775 26.5345 15.7041C35.5454 12.2646 44.6613 12.0944 53.773 15.2617C59.1034 17.1139 63.7494 20.0867 67.1927 24.8291C72.1294 31.6356 71.7848 40.3374 66.3606 46.7886C61.9654 52.0147 56.2809 54.8539 49.9074 56.417C46.4474 57.2668 37.4948 55.8141 35.1915 57.7636C30.3393 61.998 24.7722 64.6765 18.5883 66.0281C18.0257 66.1496 17.4491 66.2274 16.8794 66.3125C16.1575 66.4218 15.5668 66.2152 15.1964 65.5152C14.8284 64.8151 14.962 64.1783 15.4214 63.5998C15.9559 62.9289 16.4997 62.2629 17.0834 61.6455C18.9321 59.6979 20.3615 57.3758 21.2903 54.8352Z"
                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="general-information__key title_normal size_5x">Язык</div>
                        <div class="general-information__value title_light-bold size_6x">Малайский</div>
                    </li>
                    <li class="general-information__list">
                        <div class="general-information__icon">
                            <svg class="display_flex w-h-100" xmlns="http://www.w3.org/2000/svg" width="80"
                                 height="80" viewBox="0 0 80 80" fill="none">
                                <path
                                        d="M56.7409 14.3101C52.8352 18.2157 46.5029 18.2157 42.5973 14.3101M14.3101 56.7408C18.2157 52.8352 18.2157 46.5029 14.3101 42.5973M66.1699 23.7391C62.2643 27.6448 62.2643 33.9771 66.1699 37.8827M23.7391 66.1699C27.6448 62.2643 33.9771 62.2643 37.8827 66.1699M11.9528 44.9545L44.9545 11.9528C47.5583 9.34906 51.7798 9.34906 54.3836 11.9528L68.5272 26.0964C71.1309 28.7002 71.1309 32.9217 68.5272 35.5255L35.5255 68.5272C32.9217 71.1309 28.7002 71.1309 26.0964 68.5272L11.9528 54.3836C9.34906 51.7798 9.34906 47.5583 11.9528 44.9545ZM44.9545 35.5255C47.5583 38.1292 47.5583 42.3508 44.9545 44.9545C42.3508 47.5583 38.1292 47.5583 35.5255 44.9545C32.9217 42.3508 32.9217 38.1292 35.5255 35.5255C38.1292 32.9217 42.3508 32.9217 44.9545 35.5255Z"
                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="general-information__key title_normal size_5x">Валюта</div>
                        <div class="general-information__value title_light-bold size_6x">Ринггит</div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section section--about-study">
        <div class="about-study container">
            <div class="row">
                <div class="about-study__left about-country__left col-md-6">
                    <img class="about-study__left__img w-h-100"
                         src="/images/portrait-pretty-teenage.png" alt="portrait-pretty-teenage">
                </div>
                <div class="about-study__right about-country__right col-md-6">
                    <div class="about-country__desc">
                        <div class="about-country__desc__title">
                            <p class="title_bold size_6x">О Малайзии</p>
                        </div>
                        <div class="about-country__desc__info">
                            <p
                                    class="about-country__desc__info_text text_normal size_xx lh_4xx about-country__desc__info_logo square--116">
                                <span class="title_logo">O</span>
                            </p>
                            <p class="about-country__desc__info_text text_normal size_xx lh_4xx">
                                Малайзия - это страна в
                                Юго-Восточной Азии, популярная своими белоснежными пляжами, развивающейся
                                экономикой
                                и многонациональной культурой.
                            </p>
                            <p class="about-country__desc__info_text text_normal size_xx lh_4xx">
                                Малайзия сумела сохранить свой культурный колорит и экзотику, является
                                уникальной
                                смесью современности и аутентичности, чем в последние годы привлекает все
                                большее
                                количество иностранных туристов и студентов.
                            </p>
                            <p class="about-country__desc__info_text text_normal size_xx lh_4xx">
                                Государственный язык малайский, но языком межнационального общения и ведения
                                бизнеса
                                является английский.
                            </p>
                            <p class="about-country__desc__info_text text_normal size_xx lh_4xx">
                                Местное население дружелюбное и гостеприимное, а высокий уровень безопасности
                                позволит спокойно заняться повседневной рутиной. В стране крайне редки кражи и
                                другие виды преступлении, не принято злоупотребление спиртными напитками и
                                наркотическими средствами, все это благоприятно влияют на качество жизни.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section--admission">
        <div class="admission__container container">
            <div class="admission__title">
                <p class="title_light-bold size_6x">Поступление и требования</p>
            </div>
            <div class=" row text-center">
                <div class="admission__left col-md-6">
                    <div class="admission__requirements">
                        <p class="admission__requirements__title title_normal size_4x">
                            Чтобы поступить в ВУЗ в Малайзии, студент должен иметь за плечами 12 лет
                            образования.
                        </p>

                        <div class="admission__requirements__middle">
                            <p class="text_normal size_xx lh_5xx">
                                Абитуриенты из Узбекистана оканчивают 11 годичное образование, поэтому, чтобы
                                стать
                                студентом малайского университета необходимо компенсировать 1 год:
                            </p>
                            <ul class="admission__requirements__lists">
                                <li class="admission__requirements__list text_normal size_xx lh_5xx">Пройти
                                    подготовительную программу -
                                    Foundation
                                </li>
                                <li class="admission__requirements__list text_normal size_xx lh_5xx">Обучиться 1
                                    год
                                    в бакалавриате в университете
                                    Узбекистана
                                </li>
                            </ul>
                        </div>

                        <p class="text_normal size_xx lh_5xx">
                            Учебный год в Малайзии длится с января по ноябрь. Большинство университетов набирают
                            студентов в три периода:
                        </p>
                        <div class="admission__requirements__table overflow-x-auto">
                            <table class="table ">
                                <thead>
                                <tr>
                                    <th scope="col">Подготовка документов</th>
                                    <th scope="col">Дедлайн подачи</th>
                                    <th scope="col">Ответ из университета</th>
                                    <th scope="col">Начало учебы</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td scope="row">Май - июнь</td>
                                    <td scope="row">Октябрь</td>
                                    <td scope="row">Ноябрь</td>
                                    <td scope="row">Февраль</td>
                                </tr>
                                <tr>
                                    <td scope="row">Ноябрь - декабрь</td>
                                    <td scope="row">Март</td>
                                    <td scope="row">Апрель</td>
                                    <td scope="row">Июль</td>
                                </tr>
                                <tr>
                                    <td scope="row">Февраль - март</td>
                                    <td scope="row">Июнь</td>
                                    <td scope="row">Июль</td>
                                    <td scope="row">Октябрь</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="admission__photo">
                        <img class="admission__photo_img w-h-100"
                             src="https://baomoi-photo-fbcrawler.bmcdn.me/w720x480/2018_11_11_180_28544572/449cdb503c10d54e8c01.jpg"
                             alt="">
                    </div>
                </div>
                <div class="admission__right col-md-6">
                    <div class="admission__foundation">
                        <div class="admission__foundation__title">
                            <p class="title_light-bold size_4x">Foundation</p>
                        </div>
                        <div class="admission__foundation__inner">
                            <p class="text_normal size_xx lh_5xx">
                                Подготовительные программы, длительность составляет 12 месяцев. Изучаемые
                                дисциплины
                                зависят от выбранного направления на бакалавриате и часто привязаны к программам
                                конкретных вузов. Чтобы завершить Foundation, студент должен пройти
                                промежуточную
                                аттестацию, заработать 50 кредитов и сдать финальный экзамен. Для поступления на
                                подготовительные программы необходим аттестат о среднем общем образовании.
                            </p>
                        </div>
                    </div>
                    <div class="admission__undergraduate">
                        <div class="admission__undergraduate__title">
                            <p class="title_light-bold size_4x">Бакалавриат</p>
                        </div>
                        <div class="admission__undergraduate__inner">
                            <p class="text_normal size_xx lh_5xx">
                                Для поступления в бакалавриат в Малайзии
                                необходимо предоставить все требуемые
                                документы в приемную комиссию ВУЗа. Требования учебных заведений могут
                                отличаться,
                                но, несомненно, в каждом из них запросят:
                            </p>
                            </br>
                            </br>
                            <ul class="admission__undergraduate__lists">
                                <li class="admission__undergraduate__list text_normal size_xx lh_5xx">
                                    Аттестат о полном среднем образовании для поступления на программу
                                    бакалавриата,
                                    диплом о полном высшем – для магистратуры и диплом выпускника-магистра для
                                    докторантуры;
                                </li>
                                <li class="admission__undergraduate__list  text_normal size_xx lh_5xx">
                                    Анкету-заявление на поступление;
                                </li>
                                <li class="admission__undergraduate__list  text_normal size_xx lh_5xx">
                                    Копию паспорта с фотографией;
                                </li>
                                <li class="admission__undergraduate__list  text_normal size_xx lh_5xx">
                                    Результаты международных языков экзаменов IELTS/TOEFL;
                                </li>
                                <li class="admission__undergraduate__list  text_normal size_xx lh_5xx">
                                    Оплату консульского сбора для иностранных студентов (обычно не более 50
                                    долларов
                                    США).
                                </li>
                            </ul>
                            </br>
                            </br>
                            <p class="text_normal size_xx lh_5xx">
                                Имея необходимый уровень знаний для поступления в выбранный вами ВУЗ и требуемый
                                уровень владения английским языком, стать студентом малайского вуза несложно.
                                Рассмотрение документов абитуриента обычно не занимает больше двух недель, а в
                                случае положительного решения приемной комиссии университет окажет поддержку в
                                получении студенческой визы.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section--study-in-country">
        <div class="study-in-country container">
            <img class="study-in-country__bg" src="/images/logo-gray.png" alt="">
            <div class="study-in-country__container">
                <div class="study-in-country__title">
                    <p class="title_light-bold size_6x">Oбучения в Малайзии</p>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div onclick="showPlus()" class="study-in-country__btn-adv">
                            <button class="btn btn--theme--gray btn--theme--gray_active  w-h-100" id="home-tab"
                                    data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab"
                                    aria-controls="home" aria-selected="true">
                                <span class="btn__text">+ Преимущества </span>
                            </button>
                        </div>
                    </div>

                    <div  class="col-md-6 mt-md-0 mt-4">
                        <div onclick="showMinus()" class="study-in-country__btn-des">
                            <button class="btn btn--theme--gray w-h-100">
                                <span class="btn__text">- Недостатки</span>
                            </button>
                        </div>
                    </div>
                </div>

                <div id="plus" class="row show">
                    <div class="study-in-country__item col-md-6 mb-4" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="study-in-country__option">
                            <div class="study-in-country__option__icon square--80">
                                <img class="w-h100" src="/images/metrics.png" alt="metrics">
                            </div>
                            <div class="study-in-country__option__title">
                                <p class="title_light-bold size_4x lh_6x">Качество образования</p>
                            </div>
                            <div class="study-in-country__option__text">
                                <p class="text_normal size_xx lh_5xx">
                                    Малайзия предоставляет широкий выбор
                                    университетов по разным направлениям,
                                    программы обучения поддерживаются в Евросоюзе и США. Университеты
                                    Малайзии
                                    соответствуют самым высоким международным стандартам и представлены
                                    крупнейшие
                                    британские, австралийские и новозеландские ВУЗы, которые
                                    предоставляют
                                    абсолютно
                                    такие же учебные программы и точно такой же преподавательский
                                    состав,
                                    как и
                                    в
                                    своих основных учебных центрах.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="study-in-country__item col-md-6 mb-4" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="study-in-country__option">
                            <div class="study-in-country__option__icon square--80">
                                <img class="w-h100" src="/images/metrics.png" alt="metrics">
                            </div>
                            <div class="study-in-country__option__title">
                                <p class="title_light-bold size_4x lh_6x">Качество образования</p>
                            </div>
                            <div class="study-in-country__option__text">
                                <p class="text_normal size_xx lh_5xx">
                                    Малайзия предоставляет широкий выбор
                                    университетов по разным направлениям,
                                    программы обучения поддерживаются в Евросоюзе и США. Университеты
                                    Малайзии
                                    соответствуют самым высоким международным стандартам и представлены
                                    крупнейшие
                                    британские, австралийские и новозеландские ВУЗы, которые
                                    предоставляют
                                    абсолютно
                                    такие же учебные программы и точно такой же преподавательский
                                    состав,
                                    как и
                                    в
                                    своих основных учебных центрах.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="minus" class="row ">
                    <div class="study-in-country__item col-md-6 mb-4" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="study-in-country__option">
                            <div class="study-in-country__option__icon square--80">
                                <img class="w-h100" src="/images/metrics.png" alt="metrics">
                            </div>
                            <div class="study-in-country__option__title">
                                <p class="title_light-bold size_4x lh_6x">Качество образования</p>
                            </div>
                            <div class="study-in-country__option__text">
                                <p class="text_normal size_xx lh_5xx">
                                    Малайзия предоставляет широкий выбор
                                    университетов по разным направлениям,
                                    программы обучения поддерживаются в Евросоюзе и США. Университеты
                                    Малайзии
                                    соответствуют самым высоким международным стандартам и представлены
                                    крупнейшие
                                    британские, австралийские и новозеландские ВУЗы, которые
                                    предоставляют
                                    абсолютно
                                    такие же учебные программы и точно такой же преподавательский
                                    состав,
                                    как и
                                    в
                                    своих основных учебных центрах.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="study-in-country__item col-md-6 mb-4" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="study-in-country__option">
                            <div class="study-in-country__option__icon square--80">
                                <img class="w-h100" src="/images/metrics.png" alt="metrics">
                            </div>
                            <div class="study-in-country__option__title">
                                <p class="title_light-bold size_4x lh_6x">Качество образования</p>
                            </div>
                            <div class="study-in-country__option__text">
                                <p class="text_normal size_xx lh_5xx">
                                    Малайзия предоставляет широкий выбор
                                    университетов по разным направлениям,
                                    программы обучения поддерживаются в Евросоюзе и США. Университеты
                                    Малайзии
                                    соответствуют самым высоким международным стандартам и представлены
                                    крупнейшие
                                    британские, австралийские и новозеландские ВУЗы, которые
                                    предоставляют
                                    абсолютно
                                    такие же учебные программы и точно такой же преподавательский
                                    состав,
                                    как и
                                    в
                                    своих основных учебных центрах.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </section>

    <section class="section section--country-shortly-info bg_cover">
        <div class="country-shortly-info container">
            <div class="country-shortly-info row align-items-center">
                <div class="col-md-6">
                    <div class="country-shortly-info__title title_light-bold size_7x">
                        Малайзия
                    </div>
                    <div class="country-shortly-info__desc text_light_normal size_3x lh_4xxx">
                        Cтрана с высокими темпами экономического роста и высоким уровнем жизни, но невысокими
                        ценами
                        на обучение и проживание. Получив высшее образование в Малайзии, вы станете
                        востребованным
                        специалистом на рынке труда и для вас откроются хорошие перспективы для получения
                        престижной
                        работы в крупных компаниях
                    </div>
                </div>
                <div class="col-md-6 ">
                    <img src="/images/image6.png" alt="" class="country-shortly-info__img w-h-100">
                </div>
            </div>
        </div>
    </section>

    <section class="section section--list-documents">
        <div class="list-documents container">
            <div class="row">
                <div class="col-md-6 list-documents__left">
                    <img class="list-documents__img w-h-100" src="/images/list-documents.png" alt="">
                </div>
                <div class="col-md-6 list-documents__right">
                    <div class="list-documents__title lh_8x size_6x title_light-bold">
                        Список документов
                    </div>
                    <ul class="list-documents__lists">
                        <li class="list-documents__list">
                            <p class="text_normal lh_5xx size_xx">
                                1. Скан аттестата или диплома об образовании;
                            </p>
                        </li>
                        <li class="list-documents__list">
                            <p class="text_normal lh_5xx size_xx">
                                2. Транскрипт;
                            </p>
                        </li>
                        <li class="list-documents__list">
                            <p class="text_normal lh_5xx size_xx">
                                3. Скан всех страниц паспорта и/или свидетельства о рождении;
                            </p>
                        </li>
                        <li class="list-documents__list">
                            <p class="text_normal lh_5xx size_xx">
                                4. Результаты вступительных экзаменов (при необходимости);
                            </p>
                        </li>
                        <li class="list-documents__list">
                            <p class="text_normal lh_5xx size_xx">
                                5. Подтверждение владения английским языком (сертификат TOEFL / IELTS / PTE-A /
                                CAE
                                / CPE / MUET);
                            </p>
                        </li>
                        <li class="list-documents__list">
                            <p class="text_normal lh_5xx size_xx">
                                6. Подтверждение стипендии или справка о финансовой состоятельности;
                            </p>
                        </li>
                        <li class="list-documents__list">
                            <p class="text_normal lh_5xx size_xx">
                                7. Рекомендательные письма;
                            </p>
                        </li>
                        <li class="list-documents__list">
                            <p class="text_normal lh_5xx size_xx">
                                8. Резюме;
                            </p>
                        </li>
                        <li class="list-documents__list">
                            <p class="text_normal lh_5xx size_xx">
                                9. Мотивационное письмо;
                            </p>
                        </li>
                        <li class="list-documents__list">
                            <p class="text_normal lh_5xx size_xx">
                                10. Портфолио.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <?
    echo \frontend\widgets\SubmitForm::widget()
    ?>
</main>
