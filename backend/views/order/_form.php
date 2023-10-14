<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\order $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="order-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cargo_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cargo_from_location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cargo_to_location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([]) ?>

    <?= $form->field($model, 'currently_location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'delivery_time')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'whom')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'how')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mass')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
