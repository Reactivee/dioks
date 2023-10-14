<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\OrderAbout $model */

$this->title = 'Create Order About';
$this->params['breadcrumbs'][] = ['label' => 'Order Abouts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-about-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
