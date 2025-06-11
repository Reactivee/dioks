   <footer class="pt-5">     
        <div class="nav_footer py-4">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-12 col-lg-5  logo_footer d-flex justify-content-between align-items-center">
                        <span class="color_white mt-3 mt-md-0">Copyright ©2025 Sherxon Logistics
                        </span>
                                                <a href="/" class="px-4">
                            <img style="width: 60px" class="" src="<?= Yii::getAlias('@web') ?>/images/icons/Logo_Silver.svg" alt="logo">
                        </a>
                                            </div>
                    <div class="col-lg-7  col-md-12 text-right d-flex align-items-center  justify-content-end    footer_nav_social">
                        <ul class="list-unstyled p-0 m-0 d-flex align-items-center justify-content-end nav_items_footer">

                            <li><a class="nav_items_footer_link text-decoration-none"
                                   href="#guaranty"><?= Yii::t('main', 'Guarantees') ?></a></li>
                            <li><a class="nav_items_footer_link text-decoration-none"
                                   href="#service"><?= Yii::t('main', 'Service') ?></a></li>
                            <li><a class="nav_items_footer_link text-decoration-none" href="#contact">FAQ</a></li>
                            <li><a class="nav_items_footer_link text-decoration-none"
                                   href="#contact"><?= Yii::t('main', 'Address') ?> </a></li>
                        </ul>
                        <div class="social d-flex align-items-center">
                            <a target='_blank' href="<?= $settings->tg ?>">
                                <span class="social_round">
                                <img src="<?= Yii::getAlias('@web') ?>/images/icons/tg.svg" alt="">
                                </span>
                            </a>
                            <a target='_blank' href="<?= $settings->instagram ?>">
                                <img class="mx-3" src="<?= Yii::getAlias('@web') ?>/images/icons/Button (2).svg" alt="">
                            </a>
                            <a target='_blank' href="<?= $settings->facebook ?>">
                                <img src="<?= Yii::getAlias('@web') ?>/images/icons/Button.svg" alt="">
                            </a>
                        </div>
                    </div>
                    <a class='text-decoration-none text-white  ml-3' href="https://alfatechno.uz/">Alfa Technologies</a>

                </div>

            </div>
        </div>
    </footer>