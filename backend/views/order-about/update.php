<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\OrderAbout $model */

$this->title = 'Update Order About: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Order Abouts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="order-about-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
