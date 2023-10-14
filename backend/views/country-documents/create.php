<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\CountryDocuments $model */

$this->title = 'Create Country Documents';
$this->params['breadcrumbs'][] = ['label' => 'Country Documents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="country-documents-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
