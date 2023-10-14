<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\CountryAdvantages $model */

$this->title = 'Create Country Advantages';
$this->params['breadcrumbs'][] = ['label' => 'Country Advantages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="country-advantages-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
