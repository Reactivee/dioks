<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Settings $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="settings-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'key_uz')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'key_ru')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'key_en')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'site_name_uz')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'site_name_ru')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'site_name_en')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'desc_uz')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'desc_en')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'desc_ru')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tg')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'facebook')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'instagram')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
