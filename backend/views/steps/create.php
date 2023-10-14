<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Steps $model */

$this->title = 'Create Steps';
$this->params['breadcrumbs'][] = ['label' => 'Steps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="steps-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
