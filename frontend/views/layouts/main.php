<?php

/** @var \yii\web\View $this */

/** @var string $content */

use frontend\assets\AppAsset;
use frontend\widgets\LanguagePicker;

use yii\bootstrap4\Html;

AppAsset::register($this);
$settings = \common\models\Settings::find()->one();

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <meta name="description"
        content="<?= $settings['desc_' . Yii::$app->language] ?>">
    <meta name="keywords" content="<?= $settings['key_' . Yii::$app->language] ?>">
    <?= Html::csrfMetaTags() ?>
    <title><?= $settings['site_name_' . Yii::$app->language] ?></title>
    <link rel="canonical" href="https://sherxonlogistics.uz/">
    <link rel="shortcut icon" href="images/icons/favicon.svg" type="image/x-s">
    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/images/favicon.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/images/favicon.png">
    <link rel="mask-icon" href="images/icons/favicon.svg">
    <meta property="og:site_name" content="<?= $settings['site_name_' . Yii::$app->language] ?>">
    <meta property="og:title" content="<?= $settings['site_name_' . Yii::$app->language] ?>">
    <meta property="og:locale" content=<?= Yii::$app->language ?>>
    <?php $this->head() ?>
    <script src="//code.jivosite.com/widget/AhFpK4LiBM" async></script>

</head>

<body class="d-flex flex-column min-vh-100">
    <?php $this->beginBody() ?>

    <div class="overlay"></div>
    <div class="preloader  js-preloader flex-center">
        <div class="dots d-flex flex-column">
            <a class="navbar-brand ">
                <div class="logo_pre text-center">
                    <img src="<?= Yii::getAlias('@web') ?>/images/icons/logo.png" alt="logo">
                </div>
            </a>

            <div class="d-flex flex-row mt-4">
                <div class="dot dot_yel"></div>
                <div class="dot dot_blue"></div>
                <div class="dot dot_yel"></div>
                <div class="dot dot_blue"></div>
                <div class="dot dot_blue"></div>
            </div>
        </div>
    </div>





    <div class="position-relative">
        <?= $content ?>
    </div>

    <?=
    $this->render('../layouts/footer');
    ?>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage();
