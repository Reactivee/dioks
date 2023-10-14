<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\CountryDocuments $model */

$this->title = 'Update Country Documents: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Country Documents', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="country-documents-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
