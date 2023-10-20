<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\TypeTransport $model */

$this->title = 'Create Type Transport';
$this->params['breadcrumbs'][] = ['label' => 'Type Transports', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="type-transport-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
