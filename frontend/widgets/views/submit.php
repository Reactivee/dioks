<?

use yii\helpers\Url;

?>
<section class="section section--submission submission--gradient bg_cover">
    <div class="submission w-h-100 container">
        <div class="submission__form">
            <form class="form" action="/" method="post">
                <div class="form__title title_light-bold size_7x">Измени свою жизнь сейчас</div>
                <div class="form__description title_normal size_xx">Остались вопросы? Запишитесь на
                    консультацию, будем рады пообщаться с вами!
                </div>

                <div class="form__input">
                    <label class="label label__input_text">
                        <input class="input" type="text" placeholder="Ваше имя" name="name">
                    </label>
                    <label class="label label__input_text">
                        <input class="input" type="text" placeholder="Ваш номер" name="phone">
                    </label>
                    <label class="label label__input_checkbox">
                        <!--                            <span class="input_checkbox">-->
                        <input class="input input_checkbox" type="checkbox">
                        <span class="checkmark"></span>
                        <!--                            </span>-->
                        <span class="input_checkbox_desc text_normal size_min">
                                Я согласен с тем, что мои данные собираются и будут храниться
                            </span>
                    </label>

                    <button class="btn btn--theme--primary">
                        <span class="btn__text">Оставить заявку</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

