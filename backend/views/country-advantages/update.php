<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\CountryAdvantages $model */

$this->title = 'Update Country Advantages: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Country Advantages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="country-advantages-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
