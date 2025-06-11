 
 <?php
 use frontend\widgets\LanguagePicker;
 ?>
 <div class="nav">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-3 col-lg-4  logo">
                        <a href="/">
                            <img  src="<?= Yii::getAlias('@web') ?>/images/icons/Logo_Silver.svg" alt="logo">
                        </a>
                        <div class="burger">
                            <img src="<?= Yii::getAlias('@web') ?>/images/icons/menu.svg" alt="">
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