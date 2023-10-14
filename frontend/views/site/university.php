<main class="page main- page" data-page="page">
    <section class="section section--information-banner bg_cover">
        <div class="information-banner">
            <div class="information-banner__title title_normal-bold size_max">
                Об университете
            </div>
            <div class="information-banner__crumbs size_xx title_normal-bold">
                <ul class="crumbs theme--inherit">
                    <li class="crumb theme--inherit">Главное</li>
                    <li class="crumb theme--inherit">Унверситеты</li>
                </ul>
            </div>
        </div>
    </section>
    <section class=" section--popular-countries">
        <div class="popular-countries">
            <div class="cart_slider">
                <div class="carts__header container">
                    <div class="carts__title title_light-bold size_6x">
                        Популярные университеты
                    </div>
                </div>
                <div class="container py-5">
                    <div class="row">
                        <? foreach ($univer as $item) { ?>
                            <div class="col-md-4">
                                <div class="cart">
                                    <div class="cart__item cart__top">
                                        <img class="cart__image w-h-100"
                                             src="<?= $item->img ?>"
                                             alt="singapur">
                                    </div>
                                    <div class="cart__item cart__bottom">
                                        <div class="cart__maining">
                                            <div class="cart__title title_light-bold size_4x"><?= $item->name_ru ?></div>
                                            <div class="cart__desc text_normal size_xx">
                                                <?= $item->text_ru ?>
                                            </div>
                                        </div>
                                        <div class="cart__btn">
                                            <button class="btn btn--theme--white">
                                                <span class="btn__text">Подробнее</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <? } ?>
                    </div>
                </div>
            </div>


        </div>
    </section>

</main>