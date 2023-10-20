<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\TypeTransport $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="type-transport-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'desc_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'desc_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'desc_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'key')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
