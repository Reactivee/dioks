<?php

use kartik\datetime\DateTimePicker;
use kartik\depdrop\DepDrop;
use kartik\select2\Select2;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\OrderAbout $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="order-about-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_ru')->textInput(['maxlength' => true]) ?>

    <? echo $form->field($model, 'country')->widget(Select2::className(), [
        'data' => \common\models\Country::getALlCountry(),
        'theme' => Select2::THEME_BOOTSTRAP,
        'options' => ['placeholder' => 'Country', 'id' => 'country'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

    <? echo $form->field($model, 'region')->widget(DepDrop::classname(), [
        'data' => \common\models\Country::getALlCountry(),
        'type' => DepDrop::TYPE_SELECT2,
        'options' => ['id' => 'region', 'placeholder' => 'Region'],
        'pluginOptions' => [
            'depends' => ['country'],
            'url' => Url::to(['region']),
        ]
    ]) ?>


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

    <!--    --><? //= $form->field($model, 'order_code')->dropDownList([]) ?>

    <?= $form->field($model, 'long')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'truck_id')->textInput(['disabled' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList(\common\models\OrderAbout::getAllStatus()) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
