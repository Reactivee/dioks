<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Recommends $model */

$this->title = 'Create Recommends';
$this->params['breadcrumbs'][] = ['label' => 'Recommends', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="recommends-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
