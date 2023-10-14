<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Recommends $model */

$this->title = 'Update Recommends: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Recommends', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="recommends-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
