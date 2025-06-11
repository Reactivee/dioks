<?php

use frontend\widgets\LanguagePicker;
$settings = \common\models\Settings::find()->one();

?>

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
        <?= LanguagePicker::widget([]); ?>
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

<header class="d-flex align-items-center">


    <?=
    $this->render('./Header/navbar');
    ?>

    <?=
    $this->render('./Header/hero');
    ?>


</header>