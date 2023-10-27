<?php

use kartik\datetime\DateTimePicker;
use kartik\select2\Select2;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\order $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="order-form">

    <? if ($model->price && $model->delivery_time) { ?>
        <?= Html::a('Создать предложения', ['order-doc', 'id' => $model->id], ['class' => 'btn btn-success']);
    } ?>
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'order_code')->textInput(['disabled' => true]) ?>

    <?= $form->field($model, 'client_name')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'name_ru')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'mass')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cargo_type')->dropDownList($model->getAllType()) ?>


    <!--    --><? //= $form->field($model, 'cargo_from_location')->textInput(['maxlength' => true]) ?>

    <? echo $form->field($model, 'cargo_from_location')->widget(Select2::className(), [
        'data' => \common\models\Country::getALlRegion(),
        'theme' => Select2::THEME_BOOTSTRAP,
        'options' => ['placeholder' => 'Country', 'id' => 'country'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>
    <? echo $form->field($model, 'cargo_to_location')->widget(Select2::className(), [
        'data' => \common\models\Country::getALlRegion(),
        'theme' => Select2::THEME_BOOTSTRAP,
        'options' => ['placeholder' => 'Country', 'id' => 'region'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>
    <?= $form->field($model, 'code')->textInput(['maxlength' => true]) ?>
    <hr>
    <?
    echo $form->field($model, 'delivery_time')->widget(
        DateTimePicker::className(), [
            'type' => DateTimePicker::TYPE_COMPONENT_PREPEND,
            'options' => [
                'value' => !$model->isNewRecord && $model->delivery_time ? date("d-m-Y H:i", $model->delivery_time) : false
            ],
            'pluginOptions' => [
                'autoclose' => true,
                'format' => 'dd-mm-yyyy hh:ii'
            ]
        ]
    ) ?>
    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <hr>
    <? echo $form->field($model, 'currently_location')->widget(Select2::className(), [
        'data' => \common\models\Country::getALlRegion(),
        'theme' => Select2::THEME_BOOTSTRAP,
        'options' => ['placeholder' => 'Country', 'id' => 'location'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

    <?= $form->field($model, 'status')->dropDownList(\common\models\Order::getAllStatus()) ?>
    <hr>
    <?= $form->field($model, 'additional_from')->textInput() ?>
    <?= $form->field($model, 'additional_to')->textInput() ?>

    <hr>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
