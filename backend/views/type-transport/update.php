<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\TypeTransport $model */

$this->title = 'Update Type Transport: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Type Transports', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="type-transport-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
