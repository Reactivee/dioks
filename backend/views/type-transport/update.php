<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\TypeTransport $model */

$this->title = 'Изменить вид транспорта: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Вид транспорта', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="type-transport-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
