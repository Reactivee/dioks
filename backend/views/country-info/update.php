<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\CountryInfo $model */

$this->title = 'Update Country Info: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Country Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="country-info-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
