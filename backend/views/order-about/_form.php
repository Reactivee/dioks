<?php

use kartik\datetime\DateTimePicker;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\OrderAbout $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="order-about-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>

    <!--    --><? //= $form->field($model, 'name_uz')->textInput(['maxlength' => true]) ?>

    <!--    --><? //= $form->field($model, 'name_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'region')->textInput(['maxlength' => true]) ?>


    <?
    //    echo $form->field($model, 'delivery_time')->widget(DateTimePicker::classname(), [
    //        'options' => ['placeholder' => 'Enter delivery time ...'],
    //        'value' => $model->delivery_time,
    //        'pluginOptions' => [
    //            'autoclose' => true,
    //            'format' => 'mm/dd/yyyy hh:ii:ss'
    //        ]
    //    ]);

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
