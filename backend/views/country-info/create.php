<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\CountryInfo $model */

$this->title = 'Create Country Info';
$this->params['breadcrumbs'][] = ['label' => 'Country Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="country-info-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
