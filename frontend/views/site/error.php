<?php

/** @var yii\web\View $this */
/** @var string $name */
/** @var string $message */
/** @var Exception $exception */

use yii\helpers\Html;

$this->title = $name;
?>
<header class="d-flex align-items-center">


    <?=
    $this->render('../layouts/Header/navbar');
    ?>



</header>

<div class="container ">
    <div class="d-flex flex-column justify-content-center text-center">

   <img  style="max-width: 80%" class="mx-auto"  src="<?= Yii::getAlias('@web') ?>/images/notfound.avif" alt="logo">

    </div>

    <!-- <h1><?= Html::encode($this->title) ?></h1>

    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>

    <p>
        The above error occurred while the Web server was processing your request.
    </p>
    <p>
        Please contact us if you think this is a server error. Thank you.
    </p> -->

</div>